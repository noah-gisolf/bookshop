<?php
class books_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_books() {
    	$query = $this->db->get('books');
    	return $query->result_array();
	}

    public function get_book($id) {
        $book = $this->db->get_where('books', array('id'=>$id));
        return $book->result_array()[0];
    }

	public function set_books() {
        $this->load->helper('url');

        $data = array(
            'author' => $this->input->post('author'),
            'title' => $this->input->post('title'),
            'genre' => $this->input->post('genre'),
            'description' => $this->input->post('description'),
            'year' => $this->input->post('year')
        );

        return $this->db->insert('books', $data);
	}

    public function delete_book($id) {
        $this->db->where('id', $id);
        $this->db->delete('books');
    }

    public function edit_books($data, $id) {
        $data = array(
        'id' => $this->input->post('id'),
        'author' => $this->input->post('author'),
        'title' => $this->input->post('title'),
        'genre' => $this->input->post('genre'),
        'description' => $this->input->post('description'),
        'year' => $this->input->post('year')
        );

        $this->db->where('id', $id);
        $this->db->replace('books', $data);
    }
}