<?php 
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['title'] = "Login";
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		$data['title'] = 'Login';
		//HEADER
		$this->load->view('templates/header', $data);
		//BODY
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('cadastro/login');
		}else{

			//Verifica os dados do login
			$data = $this->login_model->login();

			//Verifica se algum erro foi setado no model
			// TRUE - recarrega a página de login e passa a mensagem de erro
			// FALSE - exibe a página de sucesso
			if ( isset($data['erro']) ){				
				$this->load->view('cadastro/login', $data);
			} else {
				$this->load->view('cadastro/logado', $data);
			}
		}
		//FOOTER
		$this->load->view('templates/footer');

	}
}
 ?>
