<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class controlador_pdf extends CI_Controller {
  
    function __construct(){
        parent::__construct();
        $this->load->library("Pdf");
		
    }
  
	public function index(){
		
		$this->load->view('form');
		
	}
	
	public function ver(){
		$datos["res"] = $this->modelo_reportes->consultar();
		$this->load->view('vista_resultados',$datos);
		
	}
	
    public function exportarPDF() { 
		
	
		
		
		
	$pdf = new TCPDF('L','mm','letter');     
	
    //Información del Documento
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Iyeliz Reyes');
    $pdf->SetTitle('TCPDF Ejemplo');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   	
	
    //Configurar fuente
    $pdf->SetFont('times', 'B', 12, '', true);  
 	
	//Agregar página
    $pdf->AddPage(); 	
	
	//Imprimir texto
		
		
		
		$res = $this->modelo_reportes->consultar();
		
		$pdf->cell(40,5,"Clave",1,0);
		$pdf->cell(40,5,"Nombre",1,0);
		$pdf->cell(40,5,"Codigo",1,0);
		$pdf->cell(40,5,"District",1,0);
		$pdf->cell(40,5,"Population",1,0);
		$pdf->cell(40,5,"Activo",1,1);
		
		foreach ($res as $obj){
			
			$pdf->Cell(40,5,$obj->ID,1,0);
			$pdf->Cell(40,5,$obj->Name,1,0);
			$pdf->Cell(40,5,$obj->CountryCode,1,0);
			$pdf->Cell(40,5,$obj->District,1,0);
			$pdf->Cell(40,5,$obj->Population,1,0);
			$pdf->Cell(40,5,$obj->activo,1,1);
			
		}
		
		
		
		
		
		/*/$us=$this->input->post('user');
		$pas=$this->input->post('contraseña');
		$correo=$this->input->post('correo');
		
	$pdf -> Text(10,20,"Usuario:".$us);
	$pdf -> Text(10,25,"Contrasena:".$pas);
	$pdf -> Text(10,30,"Correo:".$correo);
		
		
		$pdf->ln();
		$pdf->cell(42,5,"Esta es una Celda 1 :v",0,0);
		//$pdf->ln();
		$pdf->cell(42,5,"Esta es una Celda 2 :v",1,0);
		
		$pdf->image('./assets/images/img.jpg',30.80,50,50);*/
	
	ob_end_clean();
    $pdf -> Output('Ejemplo1.pdf', 'I');   	
    }
}
?>


