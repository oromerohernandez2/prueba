<?php
class modelo_reportes extends CI_model{
	
	public function consultar(){
	
		
		$res=$this->db->get('city');
		return $res->result();
		
	}
	
	public function insertar($datos){
	
	$this->db->insert('city',$datos);
	}
}
?>