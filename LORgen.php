<?php
include ('db.php');
session_start();
require('./pdf/fpdf.php');

class PDF extends FPDF
{

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-10);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
if(isset($_POST['appid'])){
$cadd=$_POST['content'];
$today=date("d-m-Y");
$abc=explode('-',$today);
$md=$abc[1].$abc[0];

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetTopMargin(10);
$pdf->SetRightMargin(20);
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,30);



//first page start 
// Logo
    $pdf->Image('./images/capture.png',10,20,60);
    
	// Move to the right
    $pdf->Cell(60);
    
	$pdf->SetFont('Times','B',20);
    $pdf->Cell(30,10,'CodeBinary Initiatives','',1,'J');
	$pdf->Ln(5);
	$pdf->SetFont('Times','B',15);
	$pdf->Cell(60);
	$pdf->Cell(30,7,'FF-27, Cross Road Mall, Central Spine, Vidhyadhar','',1,'J');
	$pdf->Cell(60);
	$pdf->Cell(30,10,'Nagar, Jaipur, Rajasthan, 302039, India','',1,'J');
	$pdf->Cell(60);
	$pdf->SetFont('Times',null,15);
	$pdf->Cell(30,7,'https://codebinary.in/','',1,'J');
    // Line break
    $pdf->Ln(10);
	$pdf->SetLineWidth(1);
	$pdf->Line(10,$pdf->GetY(),200,$pdf->GetY());
	$pdf->SetDrawColor(175,175,175);
	$pdf->Line(10,$pdf->GetY()+1,200,$pdf->GetY()+1);
	
	$pdf->SetFont('Times',null,15);
	$pdf->Ln(7);
	$pdf->Cell(0,5,"Date:".date('jS F, Y'),'',1,'J');
	$pdf->Ln(5); 
	
	
	$pdf->SetFont('Times','B',15);
	$pdf->Cell(0,15,"TO WHOM IT MAY CONCERN",'',1,'C');
	
	$pdf->SetFont('Times',null,12);
	$pdf->Ln(3);
	$pdf->MultiCell(0,7,$cadd,'','J');
	$pdf->Ln(7);
	$x=$pdf->GetY();
	$pdf->Image('./images/nilay_sign.jpg',130,$x,60,15);
	$pdf->Ln(15);

	$pdf->SetFont('Times','B',12);
	$pdf->MultiCell(0,5,'
	Nilay Jayswal
	Founder, CodeBinary Initiatives','','R');

	



$filename="./LOR/".$_POST['appid'].".pdf";
$pdf->Output($filename,'F');
$_SESSION['f']=92;    
}
echo "<meta http-equiv=\"refresh\" content=\"0;URL='./app.php'\" />";
?>