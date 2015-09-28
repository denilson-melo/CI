<?php 
class Login_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function login()
	{
		$this->load->helper('url');
		$post = array(
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha')
		);

		$send = array();
		$query = $this->db->query("SELECT * FROM usuario WHERE email='".$post['email']."'");
		foreach ($query->result() as $row) {
				$send['nome'] = $row->nome;
				$send['email'] = $row->email;
				$send['senha'] = $row->senha;			
		}

		if ($query){
			if ( password_verify( $post['senha'], $send['senha'] )) {
				
			}else {
				$send = array();
				$send['erro'] = "Senha incorreta";
			}
		}else{
			$send['erro'] = "Usuário não encontrado";
		}

		return $send;
	}
}
 ?>