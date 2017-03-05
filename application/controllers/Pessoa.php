<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

	public function cadastro()
	{
		$this->load->library('form_validation');
		/*$data['msg'] = null;
		if($_POST){
			$this->load->model('Livro_model');
			$data['msg'] = $this->Livro_model->insert();
		}*/
		$data['title'] = "Cadastro de Pessoa"; // can be change according to views
        $this->load->template('pessoa/cadastro', $data); // this will load the view file
	}
	
		public function lista()
	{
		/*$data['msg'] = null;
		if($_POST){
			$this->load->model('Livro_model');
			$data['msg'] = $this->Livro_model->insert();
		}*/
		$data['title'] = "Lista de Pessoas"; // can be change according to views
        $this->load->template('pessoa/lista', $data); // this will load the view file
	}
}
