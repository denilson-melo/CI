<?php 
class Login_model extends CI_Model{
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function find_user($email=NULL)
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
	public function correct_password($passed, $stored)
	{
		return password_verify( $passed, $stored );
	}
	
}
 ?>