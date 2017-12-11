<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model('books_model');
        $this->load->model('menu_model');
        $this->load->helper('url_helper');
    }

	public function index() {
		$data['menu'] = $this->menu_model->get_menu();
		$data['books'] = $this->books_model->get_books();
        $data['title'] = 'Books';

        $this->load->view('templates/header',	$data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
	}

	public function create() {
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['menu'] = $this->menu_model->get_menu();
	    $data['title'] = 'Add book';

	    $this->form_validation->set_rules('author', 'Author', 'required');
	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('genre', 'Genre', 'required');
	    $this->form_validation->set_rules('description', 'Description', 'required');
	    $this->form_validation->set_rules('year', 'Year', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);
	        $this->load->view('books/create');
	        $this->load->view('templates/footer');

	    }

	    else
	    {
	        $this->books_model->set_books();

	       	$data['books'] = $this->books_model->get_books();
			
	        $data['title'] = 'Books';

	        $this->load->view('templates/header', $data);
	        $this->load->view('books/index', $data);
	        $this->load->view('templates/footer');
	    }
	}

	public function delete($id) {
		$this->books_model->delete_book($id);

		$data['menu'] = $this->menu_model->get_menu();
		$data['books'] = $this->books_model->get_books();
        $data['title'] = 'Books';

        $this->load->view('templates/header', $data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
	}

	public function edit($id) {	

		$data['title'] = 'Edit book';
		$data['menu'] = $this->menu_model->get_menu();
		$data['book'] = $this->books_model->get_book($id);

	    $this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('id', 'Id', 'required');
	    $this->form_validation->set_rules('author', 'Author', 'required');
	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('genre', 'Genre', 'required');
	    $this->form_validation->set_rules('description', 'Description', 'required');
	    $this->form_validation->set_rules('year', 'Year', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	    	// this code will run when no submit is done
	        $this->load->view('templates/header', $data);
	        $this->load->view('books/edit', $data, $id);
	        $this->load->view('templates/footer');

	    }
	    else
	    {
	    	// edit given book
	        $this->books_model->edit_books($data, $id);

	        // show complete list of all books
	       	$data['books'] = $this->books_model->get_books();			
	        $this->load->view('templates/header', $data);
	        $this->load->view('books/index', $data);
	        $this->load->view('templates/footer');
	    }
	}
}
