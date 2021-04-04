<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editora extends CI_Controller {

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
		$this->load->model('editoramodel');
		$alert = $this->uri->segment(2);
		$editora = $this->uri->segment(3);
		if ($editora) {												//Verifica se é um pedido de edição
			$data['editora'] = $this->editoramodel->get_editora($editora);	//Busca a editora passado em parametro
		}
		$data['editoras'] = $this->editoramodel->get_editoras();	//Busca todos as editoras
		if ($alert == 1) {
			$data['alert'] = 'success-Operação realizada com sucesso!';
		} elseif ($alert == 2) { 
			$data['alert'] = 'danger-Não foi possivel realizar a operação!';
		}

		$this->load->helper(['form']);
		$this->load->library('form_validation');

		$this->load->view('head', $data);
		$this->load->view('editoras');
		$this->load->view('footer');
	}

	public function salvar() {
		$this->validar_sessao();		
		$this->load->model('crudmodel');

		$data['nome_editora'] = $this->input->post('nome_editora');
		$data['site_editora'] = $this->input->post('site_editora');
		$data['contato_editora'] = $this->input->post('contato_editora');
		$landing = $this->input->post('landing2');				//Verifica para qual pagina deve retornar após salvar

		if(!$landing) {
			$landing = "editora";
		}

		$id = $this->uri->segment(3);
		if ($id) {														//Verifica se é atualização ou novo registro
			$result = $this->crudmodel->update('editora', $data, $id, 'id_editora');	//Atualiza
		}else {
			$result = $this->crudmodel->insert('editora', $data);		//Novo
		}

		$this->load->helper(['form']);

		if ($result) {
			redirect($landing . '/1');
		} else {
			redirect($landing . '/2');
		}

	}

	public function apagar() {
		$this->validar_sessao();		
		$this->load->model('crudmodel');
		$id = $this->uri->segment(4);

		$result = $this->crudmodel->delete('editora', $id, 'id_editora');

		if ($result) {
			redirect('editora/1');
		} else {
			redirect('editora/2');
		}
	}

	
}
