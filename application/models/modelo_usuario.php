<?php
class modelo_usuario extends CI_model{

public function insertar($datos)
{
	$this->db->insert('datos',$datos);
}
}
?>