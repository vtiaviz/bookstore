<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	public function index() {
		$this->load->model('livromodel');
		$data['livros'] = $this->livromodel->get_livros();

		$this->load->view('index', $data);
	}

	public function entrar() {
		redirect('acesso');
	}

	
}
