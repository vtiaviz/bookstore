<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditoraModel extends CI_Model {

	public function get_editora($editora) {
		$this->db->where('id_editora', $editora);
		$result = $this->db->get('editora')->result();
		return $result;
	}

	public function get_editoras() {
		$result = $this->db->get('editora')->result();
		return $result;
	}

}