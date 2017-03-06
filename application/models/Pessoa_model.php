<?php
	class Pessoa_model extends CI_Model {

		private $id_pessoa;
	    private $nm_pessoa;
		private $nr_cpf;
		private $dt_nascimento;
		private $ds_email;
		
		private $nr_cep;
		private $ds_logradouro;
		private $ds_complemento;
		private $nr_logradouro;
		private $ds_bairro;
		private $ds_cidade;
		private $ds_estado;
		
		private $ds_habilidades;
		private $ds_departamento;

        public function __construct()
        {
            // Call the CI_Model constructor
            parent::__construct();
        }

		public function insert() {
			// carrega a biblioteca de validação do code igniter
			$this->load->library('form_validation');

			// regras de validação
			$this->form_validation->set_rules('nome', 'Nome', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
            $this->form_validation->set_rules('cpf', 'Cpf', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('email', 'Email', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('data', 'Data de Nascimento', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('cep', 'CEP', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('logradouro', 'Logradouro', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('bairro', 'Bairro', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('cidade', 'Cidade', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('estado', 'Estado', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('habilidades', 'Habilidades', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			
			// Se a validação falhar
            if ($this->form_validation->run() == FALSE)
            {
                $msg = array(
                	"class" => "danger",
                	"mensagem" => validation_errors()
                );
            }
            else
            {
			   	// Preenche o objeto Pessoa
				$data = array(
					'nm_pessoa' => $_POST['nome'],
					'nr_cpf' => preg_replace("/[^0-9]/", "", $_POST['cpf']),
					'ds_email' => $_POST['email'],
					'dt_nascimento' => date("Y-m-d", strtotime(str_replace('/', '-', $_POST['data']))),
					
					'nr_cep' => preg_replace("/[^0-9]/", "", $_POST['cep']),
					'ds_logradouro' => $_POST['logradouro'],
					'ds_complemento' => $_POST['complemento'],
					'nr_logradouro' => $_POST['numero'],
					'ds_bairro' => $_POST['bairro'],
					'ds_cidade' => $_POST['cidade'],
					'ds_estado' => $_POST['estado'],
					'ds_habilidades' => $_POST['habilidades'],
					'ds_departamento' => $_POST['departamento']
				);

				if ($this->db->insert('TB_PESSOA', $data))
				{
					$msg = array(
						"class" => "success",
						"mensagem" => "Cadastrado com sucesso!"
					);
				} else {
					$error = $this->db->error(); // Has keys 'code' and 'message'
					$msg = array(
						"class" => "danger",
						"mensagem" => $error['message']
					);
				}     	
            }

            return $msg;
		}

		public function listAll() {
			$this->db->order_by("ds_departamento", "asc");
			$query = $this->db->get('TB_PESSOA');
	        return $query->result();
		}

		public function getById($id) {
			$query = $this->db->where('id_pessoa', $id)->get('TB_PESSOA');
	        return $query->result_array()[0];
		}

		public function edit($pessoa) {
			// carrega a biblioteca de validação do code igniter
			$this->load->library('form_validation');

			// regras de validação
			$this->form_validation->set_rules('nome', 'Nome', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
            $this->form_validation->set_rules('cpf', 'Cpf', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('email', 'Email', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('data', 'Data de Nascimento', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('cep', 'CEP', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('logradouro', 'Logradouro', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('bairro', 'Bairro', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('cidade', 'Cidade', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
			$this->form_validation->set_rules('estado', 'Estado', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );

			// Se a validação falhar
            if ($this->form_validation->run() == FALSE)
            {
                $msg = array(
                	"class" => "danger",
                	"mensagem" => validation_errors()
                );
            }
            else
            {
				// Atualiza o registro na tabela
				$this->db->where('id_pessoa', $pessoa['id_pessoa']);
				$this->db->update('TB_PESSOA', $pessoa);

            	$msg = array(
                	"class" => "success",
                	"mensagem" => "Editado com sucesso!"
                );
            }

            return $msg;
		}

		public function delete($id) {
			$this->db->where('id_pessoa', $id);
			$this->db->delete('TB_PESSOA');

			$msg = array(
            	"class" => "success",
            	"mensagem" => "Deletado com sucesso!"
            );

            return $msg;
		}
	}
?>