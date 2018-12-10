<?php
class Controlador extends CI_Controller{

public function mostrarform(){
   $this->load->view('form');
}

public function registro()
{
		$user= $this->input->post('user');
		$cont= $this->input->post('contraseña');
		$correo= $this->input->post('correo');
		$act= $this->input->post('activo');
		
		$enc= $this->encryption->encrypt($cont);
		$enc2= $this->encryption->encrypt($correo);
		
		$dato = array(
		'user'=> $user,
		'contraseña'=> $enc,
		'correo'=> $enc2,
		'activo'=> $act
		);
		
		$this->modelo_alumno->insertar($dato);
}

}
?>