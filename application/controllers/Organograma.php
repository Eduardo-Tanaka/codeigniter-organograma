<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organograma extends CI_Controller {

	public function index()
	{
		$data['title'] = "Organograma"; // can be change according to views
		$this->load->model('Pessoa_model');
		$data['pessoas'] = $this->Pessoa_model->listAll();
		$tabela1 = '';
		$tabela2 = '';
		$tabela3 = '';
		$tabela4 = '';
		foreach ($data['pessoas'] as $row)
		{
			if($row->ds_departamento == 1) {
				$tabela1 .= 
				'<li id="' . $row->id_pessoa . '">
					<div class="node bottom-level">
						<div class="title">
							' . $row->nm_pessoa . '
						</div>
						<div class="content">
							' . $row->ds_habilidades . '
						</div>
					</div>
				</li>';
			} else if($row->ds_departamento == 2) {
				$tabela2 .= 
				'<li id="' . $row->id_pessoa . '">
					<div class="node bottom-level">
						<div class="title">
							' . $row->nm_pessoa . '
						</div>
						<div class="content">
							' . $row->ds_habilidades . '
						</div>
					</div>
				</li>';
			} else if($row->ds_departamento == 3) {
				$tabela3 .= 
				'<li id="' . $row->id_pessoa . '">
					<div class="node bottom-level">
						<div class="title">
							' . $row->nm_pessoa . '
						</div>
						<div class="content">
							' . $row->ds_habilidades . '
						</div>
					</div>
				</li>';
			} else if($row->ds_departamento == 4) {
				$tabela4 .= 
				'<li id="' . $row->id_pessoa . '">
					<div class="node bottom-level">
						<div class="title">
							' . $row->nm_pessoa . '
						</div>
						<div class="content">
							' . $row->ds_habilidades . '
						</div>
					</div>
				</li>';
			}
		}
		$data["tabela1"] = $tabela1;
		$data["tabela2"] = $tabela2;
		$data["tabela3"] = $tabela3;
		$data["tabela4"] = $tabela4;
        $this->load->template('organograma/index', $data); // this will load the view file
	}
}
