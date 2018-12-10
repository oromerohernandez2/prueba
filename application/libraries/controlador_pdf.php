<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class controlador_pdf extends CI_Controller {
  
    function __construct(){
        parent::__construct();
        $this->load->library("Pdf");
    }
  
    public function exportarPDF() { 
	$pdf = new TCPDF();     
	
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
	$pdf -> Text(10,20,"Este es un mesaje!");
	
	//ob_end_clean();
    $pdf -> Output('Ejemplo1.pdf', 'I');   	
    }
}
?>


