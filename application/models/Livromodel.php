<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LivroModel extends CI_Model {

	public function get_livros() {
		$this->db->join('autor', 'id_autor = autor_id', 'inner');
		$this->db->join('editora', 'id_editora = editora_id', 'inner');
		$result = $this->db->get('livro')->result();
		return $result;
	}

	public function get_livro($livro) {
		$this->db->where('id_livro', $livro);
		$result = $this->db->get('livro')->result();
		return $result;
	}

	public function get_autores() {
		$result = $this->db->get('autor')->result();
		return $result;
	}

	public function get_editoras() {
		$result = $this->db->get('editora')->result();
		return $result;
	}

}