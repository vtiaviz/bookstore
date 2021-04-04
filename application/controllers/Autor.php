<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Autor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function validar_sessao() {
		if (!$this->session->userdata('LOGADO')) {
			redirect('acesso');
		}
		return true;
	}
	
	public function index() {
		$this->validar_sessao();
		$this->load->model('autormodel');
		$alert = $this->uri->segment(2);
		$autor = $this->uri->segment(3);
		if ($autor) {												//Verifica se é um pedido de edição
			$data['autor'] = $this->autormodel->get_autor($autor);	//Busca o autor passado em parametro
		}
		$data['autores'] = $this->autormodel->get_autores();	//Busca todos os autores
		if ($alert == 1) {
			$data['alert'] = 'success-Operação realizada com sucesso!';
		} elseif ($alert == 2) { 
			$data['alert'] = 'danger-Não foi possivel realizar a operação!';
		}

		$this->load->helper(['form']);
		$this->load->library('form_validation');
		
		$this->load->view('head', $data);
		$this->load->view('autores');
		$this->load->view('footer');
		
	}

	public function salvar() {
		$this->validar_sessao();		
		$this->load->model('crudmodel');
		
		$data['nome_autor'] = $this->input->post('nome_autor');
		$data['biografia_autor'] = $this->input->post('biografia_autor');
		$data['contato_autor'] = $this->input->post('contato_autor');
		$landing = $this->input->post('landing');		//Verifica para qual pagina deve retornar após salvar

		if(!$landing) {
			$landing = "autor";
		}

		$id = $this->uri->segment(3);
		if ($id) {														//Verifica se é atualização ou novo registro
			$result = $this->crudmodel->update('autor', $data, $id, 'id_autor');	//Atualiza
		}else {
			$result = $this->crudmodel->insert('autor', $data);		//Novo
		}

		$this->load->helper(['form']);

		if ($result) {
			redirect($landing .'/1');
		} else {
			redirect($landing .'/2');
		}
	}

	public function apagar() {
		$this->validar_sessao();		
		$this->load->model('crudmodel');
		$id = $this->uri->segment(4);
		
		$result = $this->crudmodel->delete('autor', $id, 'id_autor');

		if ($result) {
			redirect('autor/1');
		} else {
			redirect('autor/2');
		}
	}

	
}
