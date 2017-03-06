<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

	public function cadastro()
	{
		$this->load->library('session');
		$this->load->library('form_validation');
		$data['msg'] = null;
		if($_POST){
			$this->load->model('Pessoa_model');
			$data['msg'] = $this->Pessoa_model->insert();
			// store data to flashdata
			$this->session->set_flashdata('msg', $data['msg']['mensagem']);
			redirect('pessoa/lista');
		}
		$data['title'] = "Cadastro de Pessoa"; // can be change according to views
        $this->load->template('pessoa/cadastro', $data); // this will load the view file
	}
	
	public function lista()
	{
		$this->load->library('session');
		$data['msg'] = null;
		$this->load->model('Pessoa_model');
		$data['pessoas'] = $this->Pessoa_model->listAll();
		$tabela = '';
		foreach ($data['pessoas'] as $row)
		{
       		$tabela .= 
       		'<tr>
       			<td>' . $row->nm_pessoa . '</td>
       			<td>' . $row->nr_cpf . '</td>
       			<td>' . date('d/m/Y', strtotime($row->dt_nascimento)) . '</td>
       			<td><a class="btn btn-success" href="' . base_url('/pessoa/editar/' . $row->id_pessoa) . '">Editar <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
       			<td><a class="btn btn-danger" href="' . base_url('/pessoa/deletar/' . $row->id_pessoa) . '">Deletar <i class="fa fa-trash" aria-hidden="true"></i></a></td>
       		</tr>';
		}
		$data["pessoas"] = $tabela;
		$data['title'] = "Lista de Pessoas"; // can be change according to views
        $this->load->template('pessoa/lista', $data); // this will load the view file
	}
	
	public function editar($id)
	{
		$this->load->library('form_validation');
		$this->load->model('Pessoa_model');
		$data['msg'] = null;
		if($_POST) {	
			$pessoa = array (
			 	'id_pessoa' => $this->input->post('id'),
            	'nm_pessoa' => $this->input->post('nome'),
            	'dt_nascimento' => $this->input->post('data') 
			);	
			$data['msg'] = $this->Pessoa_model->edit($pessoa);
		} 
		$data['pessoa'] = $this->Pessoa_model->getById($id);
		$data['title'] = "Edição de Pessoa"; // can be change according to views
        $this->load->template('pessoa/editar', $data); // this will load the view file
	}
	
	public function deletar($id)
	{
		$this->load->library('session');
		$this->load->model('Pessoa_model');
		$data['msg'] = $this->Pessoa_model->delete($id);
		// store data to flashdata
		$this->session->set_flashdata('msg', $data['msg']['mensagem']);
		redirect('pessoa/lista');
	}
}
