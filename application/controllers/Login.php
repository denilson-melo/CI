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
		if ( $this->session_tools->is_logged()) {
			redirect('perfil');
		}
		
		if ( $this->formulario_valido() )
		{
			$this->entrar();
		}
		
		$data['title'] = "Login";
		$data['main'] = 'cadastro/login';
		$this->load->view('template', $data);
	}

	private function formulario_valido(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('senha', 'Senha', 'required|max_length[60]');
		//60 max length due to PHP password recomendation
		return $this->form_validation->run();
	}
	
	private function entrar()
	{
		$email = $this->input->post('email');
		$user = $this->login_model->find_user($email);
		
		if ( !isset($user) ) {
			$this->index();
		}
		
		$enteredPassword = $this->input->post('senha');
		if ( $this->login_model->correct_password($enteredPassword, $user->senha) ) {
			$this->set_session($user);
			redirect('perfil');
		}
	}
	
	
	public function set_session($user)
	{
		$this->session->set_userdata('nome', $user->nome);
		$this->session->set_userdata('email', $user->email);
		$this->session->set_userdata('senha', $user->senha);
		$this->session->set_userdata('sexo', $user->sexo);
		$this->session->set_userdata('logado', true);
	}
	
	public function sair()
	{
		$this->session->unset_userdata('logado');
		$this->session->sess_destroy();
		redirect('index');
	}
	
}
 ?>
