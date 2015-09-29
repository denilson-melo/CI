<?php 
class Login_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function get_email_existe( $email )
	{
		$this->db->select('email');
		$this->db->from('usuario');
		$this->db->where('email', $email);
		$resultado = $this->db->get();
		if ( $resultado->num_rows() == 1){
			return true;
		}
		return false;
	}
	
	public function login( $email, $senha )
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('email', $email);
		$resultado = $this->db->get();
		foreach ($resultado->result() as $row) {
				$data['nome'] = $row->nome;
				$data['email'] = $row->email;
				$data['senha'] = $row->senha;			
		}
		if ( !password_verify( $senha, $data['senha'] )) {
			$data = array();
			$data['erro'] = "Senha incorreta";
		}
		return $data;
	}
	
	public function valida_login($email=NULL, $senha=NULL)
	{
		if($email!=NULL || $senha!=NULL):
			$this->db->select('*');
			$this->db->from('usuario');
			$this->db->join('pessoa as pes', 'usuario.fk_id_pessoa = pes.id_pessoa');
			$this->db->where('usuario.email', $email);
			$this->db->where('usuario.senha', $senha);
			
			$resultado = $this->db->get();
			
			if($resultado->num_rows() == 1):
				return $resultado;
			else:
				return false;
			endif;
		endif;
	}
	
	
}
 ?>