<?php
class Controlador_jquery extends CI_Controller{
	
	public function index(){
	$this->load->view('PracticaJQ13');
	}
	
	public function recibe(){
		
		$datos= array(
		'nombre'=>$this->input->post('nombre'),
		'contrasena'=>$this->input->post('contrasena'),
		'correo'=>$this->input->post('correo'),
		'activo'=>$this->input->post('activo'),
		);
		$this->modelo_usuario->insertar($datos);
		
		
		
		
		
		/*echo "Nombre:".$nombre;
		echo"<br>";
		echo "Apellido:".$apellido;
		echo"<br>";
		echo "E-Mail:".$correo;
		echo"<br>";*/
	}
	
	public function form(){
	$this->load->view('modal');
	}
}

?>