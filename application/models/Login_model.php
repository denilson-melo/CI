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
				return $resultado->result();
			else:
				return false;
			endif;
		endif;
	}
	
	
	
	
}
 ?>