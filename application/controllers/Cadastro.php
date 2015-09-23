<?php 
	class Cadastro extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('cadastro_model');
			$this->load->helper('url_helper');
		}

		public function index()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			if ( $this->form_validation->run() === FALSE ){
				$this->load->view('cadastro');
			} else {
				$this->load->view('news');
			}

			$data['title'] = "Efetuar cadastro";
		}
	}
 ?>