<?php 
	class Cadastro_model extends CI_Model()
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function criar()
		{
			$this->load->helper('url');
			$data = array(
				'nome' => $this->ínput->post('nome'),
				'email' => $this->ínput->post('email'),
				'sexo' => $this->ínput->post('sexo'),
				'telefone' => $this->ínput->post('telefone')
			);
			return $this->db->insert('usuario', $data);
		}	
	}
 ?>