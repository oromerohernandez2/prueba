<?php
	class controlador4 extends CI_Controller{
	
	public function encriptar(){
	$var = "angel";
	//$enc = $this->encryption->encrypt($var);
	//$enc = base64_encode ($var);
	//$enc = md5($var);
	//$enc = sha1 ($var);
	$enc = sha1 (md5($var));
	echo $enc;
	
	//$dec = base64_decode($enc);
	//echo "<br>".$dec;
	}
	
	
	
	
	}