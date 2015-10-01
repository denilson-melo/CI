<?php 
class Login_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function login( $email, $enteredPassword )
	{
		$userData = array();
		$user = $this->find_user($email);
		if ( !isset($user) ) {
			$userData['error'] = "Email não encontrado";
			return $userData;
		}
		if ( $this->correct_password($enteredPassword, $user->senha) ) {
			$userData['nome'] = $user->nome;
			$userData['email'] = $user->email;
			return $userData;
		}else{
			$userData = array();
			$userData['error'] = "Senha incorreta";
			return $userData;		
		}
	}
	
	private function find_user($email=NULL)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('email', $email);
		$rows = $this->db->get();
		if ( $rows->num_rows() == 1 ) {
			$user = $rows->result(); 
			return $user[0]; // 0 because it's the first and only row from the query
		}
		return NULL;
	}

	// Uses PHP 5.5+ function to see if the string matches the stored
	private function correct_password($passed, $stored)
	{
		return password_verify( $passed, $stored );
	}
	
}
 ?>