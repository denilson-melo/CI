<?php 
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('url_helper');
	}

	public function sucesso($data = NULL, $resultado = NULL){
		$this->load->view('templates/header', $data);
		$this->load->view('cadastro/logado', $resultado);
		$this->load->view('templates/footer');
		$this->session->set_userdata('nome', $resultado['nome']);
		$this->session->set_userdata('logado', true);
		print_r($_SESSION);
	}
	
	private function falha($data = NULL, $resultado = NULL){
		$this->load->view('templates/header', $data);
		$this->load->view('cadastro/login', $resultado);
		$this->load->view('templates/footer');
	}
	
	public function index()
	{
		$data['title'] = "Login";
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_message('checa_email', 'Email não cadastrado');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_checa_email');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		$data['title'] = 'Login';
		$resultado = NULL;
		if ( $this->form_validation->run() == FALSE ) {
			$this->falha($data, $resultado);		
		} else {
			$resultado = $this->login_model->login( $this->input->post('email'), $this->input->post('senha') );
			if ( isset($resultado['erro']) ){				
				$this->falha($data, $resultado);		
			} else {
				$this->sucesso($data, $resultado);
			}
		}

	}
	
	public function checa_email(){
		$data = $this->login_model->get_email_existe( $this->input->post('email') );
		if (isset($data)){
			return true;
		}
		return false;
	}
}
 ?>
