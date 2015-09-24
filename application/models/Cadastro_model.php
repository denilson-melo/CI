<?php 
	class Cadastro_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function criar()
		{
			$this->load->helper('url');
			$data = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('senha'),
				'sexo' => $this->input->post('sexo')
			);
			//return 0;
			return $this->db->insert('usuario', $data);
		}	
	}
 ?>