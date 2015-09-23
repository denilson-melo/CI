<?php 
	class Cadastro extends CI_Controller()
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('cadastro_model');
			$this->load->helper('url_helper');
		}

		public function index()
		{
			$data['title'] = "Efetuar cadastro";
		}
	}
 ?>