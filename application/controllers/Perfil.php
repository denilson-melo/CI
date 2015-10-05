<?php 
class Perfil extends CI_Controller
{
    public function __construct()
	{
	    parent::__construct();
	    if ( !$this->session_tools->is_logged() ) {
	        redirect('login');
	    } 
	}
    
    public function index()
    {
        $data['title'] = 'Perfil';
        $data['main'] = 'perfil/perfil';
        
        $data['nome'] = $this->session->userdata('nome');
        $data['email'] = $this->session->userdata('email');
        $data['senha'] = $this->session->userdata('senha');
        $data['sexo'] = $this->session->userdata('sexo');
        $this->load->view('template', $data);
        
    }
    
}

?>