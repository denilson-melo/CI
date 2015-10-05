<?php

class Home extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
		$this->load->library('form_validation');
    }
    
    public function index(){
        $data['title'] = "Home";
        $data['main'] = 'home/home';
        $this->load->view('template', $data);
    }
}


?>