<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organograma extends CI_Controller {

	public function index()
	{
		$data['title'] = "Organograma"; // can be change according to views
        $this->load->template('organograma/index', $data); // this will load the view file
	}
}
