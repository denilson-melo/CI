<?php 
class Cadastro extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('cadastro_model');
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<small class="red-text right"> *', '</small>');
	}

	public function index()
	{
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[10]|max_length[60]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		$this->form_validation->set_rules('senha_validar', 'Senha', 'required|matches[senha]');
		$this->form_validation->set_rules('sexo', 'Sexo', 'required');

		$data['title'] = "Efetuar cadastro";
		$data['erro_meu'] = "hsaushuahsauhsua";

		//HEAD
		$this->load->view('templates/header', $data);
		//BODY
		if ( $this->form_validation->run() === FALSE ){
			$this->load->view('cadastro/cadastro');
		} else {
			if ( $this->cadastro_model->emailExiste() ){
				$this->load->view('cadastro/cadastro');
			} else {
				$this->cadastro_model->criar();
				$this->load->view('cadastro/sucesso');
			}
		}		
		//FOOTER
		$this->load->view('templates/footer');
	}	
}
 ?>