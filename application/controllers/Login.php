<?php 
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('login_model');
	}
	
	public function index()
	{
		$data['title'] = "Login";
		$data['main'] = 'cadastro/login';
		$this->load->view('template', $data);
	}

	public function go_perfil()
	{
		redirect('perfil');
	}
	
	public function entrar(){
		$resultado = NULL;
		$data = NULL;
		
		if ( $this->formulario_valido() ) {
			$userData = $this->login_model->login( $this->input->post('email'), $this->input->post('senha') );
			if ( isset($resultado['error']) ){				
				$this->index();		
			} else {
				$this->set_session($userData);
				$this->go_perfil();
			}
		} else {
			$this->index();		
		}
	}
	
	public function sair(){
		$this->session->unset_userdata('logado');
		redirect('index');
	}
	
	
	private function formulario_valido(){
		$this->form_validation->set_message('checa_email', 'Email não cadastrado');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		return $this->form_validation->run();
	}
	
	public function set_session($userData){
		$this->session->set_userdata('nome', $userData['nome']);
		$this->session->set_userdata('logado', true);
	}

	
}
 ?>
