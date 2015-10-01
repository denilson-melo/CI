<?php 
class Perfil extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Perfil';
        $data['main'] = 'perfil/perfil';
        if ( $this->session_tools->is_logged() ) {
            $this->load->view('template', $data);
        } else {
            echo "Acesso negado";
        }
    }
    
}

?>