<?php
class Controller_alumno extends CI_Controller
{
    
        public function index(){
            
            $this->load->view('vistaform');
            
        }
    
        public function recibedatos(){
            
            $nombre=$this->input->post('nombre');
            $apellido=$this->input->post('apellido');
            $sexo=$this->input->post('sexo');
            $dia=$this->input->post('dia');
            $mes=$this->input->post('mes');
            $ano=$this->input->post('ano');
            $pais=$this->input->post('pais');
            $codp=$this->input->post('codp');
            
            $enc = md5($nombre);
            $enc1 = md5($codp);
            
            $dato = array(
		'nombre'=> $enc,
		'apellido'=> $apellido,
		'sexo'=> $sexo,
        'dia_nac'=> $dia,
        'mes_nac'=> $mes,
        'ano_nac'=> $ano,
        'pais'=> $pais,
		'cod_post'=> $enc1
		);
		
		$this->modelo_alumno->insertar($dato);
            
            
            
        }
    
}
?>