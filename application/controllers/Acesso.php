<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acesso extends CI_Controller {
	
	public function index() {
		$this->load->view('login');
	}
	
	public function login($alert = null) {
		if ($this->session->userdata('LOGADO')){
			redirect('livro');
		}
		$dados = null;
		if ($alert != null){
			$dados['alert'] = $this->msg($alert);
			$this->load->view('login', $dados);
		} else $this->load->view('login');
	}
	
	public function logar() {
		
		$this->load->model('acessomodel');
		
		$login = $this->input->post('username');
		$senha = $this->input->post('password');
		$usuario = $this->acessomodel->logar($login, $senha);
		
		
		if (count($usuario) === 1) {
			$dados['login_usuario'] = $usuario[0]->login_usuario;
			$dados['LOGADO'] = TRUE;

			$this->session->set_userdata($dados);

			redirect("livro");

		} else {
			redirect("acesso/2");
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect("acesso");
	}
	
	public function msg($alert) {
		$str = '';
		if ($alert == '1')
			$str = 'success- Login realizado com sucesso!';
			else if ($alert == '2')
				$str = 'danger-Não foi possível entrar. Verifique o usuário e a senha e tente novamente!';
				else
					$str = null;
					return $str;
	}


	
}
