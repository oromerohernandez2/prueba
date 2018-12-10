<?php
class modelo_inser extends CI_model{

public function insertar($dato)
{
	$this->db->insert('datos',$dato);
}
}
?>