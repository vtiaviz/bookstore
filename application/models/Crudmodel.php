<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model {
	
	public function insert($tabela, $data) {
		$result = $this->db->insert($tabela, $data);
		return $result;
	}

	public function update($tabela, $data, $id, $field) {
		$this->db->where($field, $id);
		$result = $this->db->update($tabela, $data);
		return $result;
	}

	public function delete($tabela, $id, $field) {
		$this->db->where($field, $id);
		$result = $this->db->delete($tabela);
		return $result;
	}

}