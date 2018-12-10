<?php
      class Controlador_session extends CI_Controller
      {
          public function index(){
              $this->load->view('login');
              
          }
          public function iniciar(){
              $usr=$this->input->post('usuario');
              $_SESSION['usuario'] = $usr;
                
                if(isset($_SESSION['usuario'])){
                    $this->load->view('inicio',$usr);
                }
                
                else{
                    $this->load->view('error');
                }
              
          }
      }
?>