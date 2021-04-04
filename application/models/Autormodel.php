<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AutorModel extends CI_Model {

	public function get_autor($autor) {
		$this->db->where('id_autor', $autor);
		$result = $this->db->get('autor')->result();
		return $result;
	}

	public function get_autores() {
		$result = $this->db->get('autor')->result();
		return $result;
	}

}