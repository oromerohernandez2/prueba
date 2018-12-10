<?php
class modelo_alumno extends CI_model{

public function insertar($dato)
{
	$this->db->insert('alumno',$dato);
}
}
?>