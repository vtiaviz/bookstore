<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Livro extends CI_Controller {

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
		$this->load->model('livromodel');
		$data['livros'] = $this->livromodel->get_livros();	//Busca todos os livros
		$alert = $this->uri->segment(2);
		$livro = $this->uri->segment(3);
		
		if ($livro) {												//Verifica se é um pedido de edição
			$data['livro'] = $this->livromodel->get_livro($livro);	//Busca o livro passado em parametro
		}
		$data['autores'] = $this->livromodel->get_autores();	//Busca todos os autores
		$data['editoras'] = $this->livromodel->get_editoras();	//Busca todos as editoras

		if ($alert == 1) {
			$data['alert'] = 'success-Operação realizada com sucesso!';
		} elseif ($alert == 2) { 
			$data['alert'] = 'danger-Não foi possivel realizar a operação!';
		}
		
		$this->load->helper(['form']);
		$this->load->library('form_validation');

		$this->load->view('head', $data);
		$this->load->view('livros');
		$this->load->view('footer');
	}

	public function salvar() {
		$this->validar_sessao();		
		$this->load->model('crudmodel');
		
		$data['titulo_livro'] = $this->input->post('titulo_livro');
		$data['descricao_livro'] = $this->input->post('descricao_livro');
		$data['categoria_livro'] = $this->input->post('categoria_livro');
		$data['estoque_livro'] = $this->input->post('estoque_livro');
		$data['preco_livro'] = $this->input->post('preco_livro');
		$data['editora_id'] = $this->input->post('editora_id');
		$data['autor_id'] = $this->input->post('autor_id');
		
		$id = $this->uri->segment(3);
		if ($id) {														//Verifica se é atualização ou novo registro
			$result = $this->crudmodel->update('livro', $data, $id, 'id_livro');	//Atualiza
		}else {
			$result = $this->crudmodel->insert('livro', $data);		//Novo
		}

		if ($result) {
			redirect('livro/1');
		} else {
			redirect('livro/2');
		}
	}

	public function apagar() {
		$this->validar_sessao();		
		$this->load->model('crudmodel');
		$id = $this->uri->segment(4);

		$result = $this->crudmodel->delete('livro', $id, 'id_livro');

		if ($result) {
			redirect('livro/1');
		} else {
			redirect('livro/2');
		}
	}
	
}
