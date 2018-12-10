<?php
class Examen extends CI_Controller{
	
	public function index(){
		$this->load->view('formalu');
	}
	
		
		 public function exportarPDF() { 	
		$this->load->library('Pdf');
	$pdf = new TCPDF('L','mm','letter');     
	
    //Información del Documento
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Oscar');
    $pdf->SetTitle('TCPDF Examen');
    $pdf->SetSubject('TCPDF Exam');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   	
	
    //Configurar fuente
    $pdf->SetFont('times', 'B', 12, '', true);  
 	
	//Agregar página
    $pdf->AddPage(); 	
	
	//Imprimir texto
		
		$pdf->cell(40,5,"Matricula",1,0);
		$pdf->cell(40,5,"Nombre",1,0);
		$pdf->cell(40,5,"Domicilio",1,0);
		$pdf->cell(40,5,"E-Mail",1,0);
		$pdf->cell(40,5,"Sexo",1,0);
		$pdf->cell(40,5,"Carrera",1,1);
		
		$mat=$this->input->post('matricula');
		$nombre=$this->input->post('nombre');
		$domicilio=$this->input->post('domicilio');
		$correo=$this->input->post('correo');
		$sexo=$this->input->post('sexo');
		$carrera=$this->input->post('carrera');
				  
		$pdf -> cell(40,5,$mat,1,0);
		$pdf -> cell(40,5,$nombre,1,0);
		$pdf -> cell(40,5,$domicilio,1,0);
		$pdf -> cell(40,5,$correo,1,0);
		$pdf -> cell(40,5,$sexo,1,0);
		$pdf -> cell(40,5,$carrera,1,1);
				   
			 ob_end_clean();
    $pdf -> Output('Ejemplo1.pdf', 'I');   	
	

			}
		}
?>