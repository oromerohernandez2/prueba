<?php
Class micontrolador extends CI_Controller{
	public function mostrar(){
	$this->load->view('vistapro');
	}
	public function metodo(){
	$id= $this->input->post("id");
	$desc= $this->input->post("desc");
	$pre= $this->input->post("pre");
	$act= $this->input->post("act");
	echo $id;
	echo $desc;
	echo $pre;
	echo $act;
	}
}
?>