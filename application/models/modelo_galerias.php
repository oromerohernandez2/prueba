<?php
class modelo_galerias extends CI_model{

public function insertar($dato)
	{
	$this->db->insert('datos',$dato);
	}
	

public function consultar()
	{
	$res=$this->db->get('city');
		return $res->result();
	}
	
}
?>