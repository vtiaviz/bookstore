<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcessoModel extends CI_Model {
	
	public function logar($login, $senha) {
		$this->db->where('login_usuario', $login);
		$this->db->where('senha_usuario', $senha);
		return $this->db->get('usuario')->result();
	}

	public function logar_geral($login, $senha) {
		$this->db->where('login_prof', $login);
		$this->db->where('senha_prof', $senha);
		return $this->db->get('profissionais')->result();
	}

}