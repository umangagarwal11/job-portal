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
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
if(isset($_POST['appid'])){
$cadd=$_POST['cadd'];
$dur=$_POST['dur'];
$join=date("d-m-Y",strtotime($_POST['join']));
$day=$_POST['day'];
$resp=date("d-m-Y",strtotime($_POST['resp']));
$today=date("d-m-Y");
$abc=explode('-',$today);
$md=$abc[1].$abc[0];
$application=mysqli_fetch_row(mysqli_query($con,"Select * from applications where id=".$_POST['appid']));
$job=mysqli_fetch_row(mysqli_query($con,"Select * from jobs where id='$application[1]'"));
$user=mysqli_fetch_row(mysqli_query($con,"Select * from usertable where href='$application[0]'"));
$dep=mysqli_fetch_row(mysqli_query($con,"Select code from departments where name='$job[2]'"))[0];
$number=mysqli_num_rows(mysqli_query($con,"Select * from applications where username='$application[0]' and job='$application[1]' and status='Hired'"));
$org=mysqli_fetch_row(mysqli_query($con,"Select name from organizations where name like '$job[3]%'"))[0];
$ab=date("Y-m-d");
$res=mysqli_query($con,"Update applications set beg=\"$ab\" where id=".$_POST['appid']);

    
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetTopMargin(20);
$pdf->SetRightMargin(20);
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,30);



//first page start 
// Logo
    $pdf->Image('./images/capture.png',15,20,60);
    // Arial bold 15
    $pdf->SetFont('Arial','B',12);
    // Move to the right
    $pdf->Cell(100);
    // Title
    $pdf->Cell(30,20,'HR/Offer/CBI/'.$dep.'/'.$abc[2].'/'.$md.'/'.$number,'',1,'L');
    // Line break
    $pdf->Ln(5);
	$res=mysqli_query($con,"Update shadows set href='HR/Offer/CBI/".$dep."/".$abc[2]."/".$md."/".$number."' where href='$application[0]'");
	if($res == false){		
		$_SESSION['f']=100;    
		echo "<meta http-equiv=\"refresh\" content=\"0;URL='./app.php'\" />";
	}
	else{
	$res=mysqli_query($con,"Update applications set username='HR/Offer/CBI/".$dep."/".$abc[2]."/".$md."/".$number."' where username='$application[0]'");
	$res=mysqli_query($con,"Update usertable set href='HR/Offer/CBI/".$dep."/".$abc[2]."/".$md."/".$number."' where href='$application[0]'");
	$res=mysqli_query($con,"Update userdata set href='HR/Offer/CBI/".$dep."/".$abc[2]."/".$md."/".$number."' where href='$application[0]'");
	$res=mysqli_query($con,"Update ccommunity set reference_code='HR/Offer/CBI/".$dep."/".$abc[2]."/".$md."/".$number."' where reference_code='$application[0]'");

$pdf->SetFont('Times',null,12);
$pdf->Ln(10);
$pdf->Cell(0,10,date('jS F, Y'),'',1,'J');
$pdf->Ln(3); 

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Mr./Ms. '.$user[0].' '.$user[1],'',1,'J');
$pdf->Ln(3); 

$pdf->SetFont('Times',null,12);
$pdf->Multicell(0,7,$cadd,'','J');
$pdf->Ln(3); 

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Subject: Letter of appointment as "'.$job[1].' - '.$job[0].'"','',1,'J');
$pdf->Ln(3); 

$pdf->SetFont('Times',null,12);
$pdf->Cell(0,10,'Dear '.$user[0],'',1,'J');
$pdf->Ln(3); 

$pdf->SetFont('Times','B',12);
$pdf->Write(7,'CodeBinary Initiatives');

$pdf->SetFont('Times',null,12);
$pdf->Write(7,' is pleased to offer you an employment opportunity as ');

$pdf->SetFont('Times','B',12);
$pdf->Write(7,$job[1].' - '.$job[0]);

$pdf->SetFont('Times',null,12);
$pdf->Write(7,' in department of ');

$pdf->SetFont('Times','B',12);
$pdf->Write(7,$job[2]);

$pdf->SetFont('Times',null,12);
$pdf->Write(7,' for ');

$pdf->SetFont('Times','B',12);
$pdf->Write(7,$org.'.');
$pdf->Ln(7); 
 
$pdf->SetFont('Times',null,12);
$pdf->MultiCell(0,7,'Your internship will be for '.$dur.' months beginning on '.$day.', '.$join.'. 

Please find the detailed terms and conditions of your internship in Annexure 1. We would like to have your response by '.$resp.'. If you do not report with a signed copy of this offer letter till '.$resp.', this letter of appointment will stand withdrawn. Please revert a signed copy of the offer letter upon agreement with clauses mentioned in Annexure 1.

We are looking forward to having you in our family.

Best Regards,','','J');
$pdf->Ln(3);
$x=$pdf->GetY();
$pdf->Image('./images/nilay_sign.jpg',20,$x,60,15);
$pdf->Ln(15);

$pdf->Write(5,'
Nilay Jayswal
Founder, CodeBinary Initiatives');
//First page done


//Second Page 
$pdf->AddPage('P');

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Intern Acknowledgement','',1,'L');
$pdf->Ln(3); 


$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5,'
In response to the above Internship Offer, I have read and understood all the terms and conditions of the offer letter completely. I have agreed and accepted with the expressed intent to be legally bound on this date ______________


Signature:
Name:

','','J');
//Second page done

//Third page
$pdf->AddPage('P');


$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,"Annexure 1",'',0,'C');
$pdf->Ln(20);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(10,10,"I. \t\t");

//Output text
$pdf->MultiCell(0,10,'Position','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,10,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'You will be hired under the title '.$job[0].'.','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Your intern status at CodeBinary Initiatives is on an “at-will” basis, which means your internship with CodeBinary Initiatives can be terminated with or without cause by CodeBinary Initiatives. ','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'CodeBinary Initiatives reserves the right to end the internship on the grounds of performance, conduct, or for any other reason at its sole discretion without any notice period.','','J');

$pdf->Ln(10);



$pdf->SetFont('Times','B',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(10,10,"II. \t\t");

//Output text
$pdf->MultiCell(0,10,'Benefits','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
if($job[9]=="Unpaid")
$pdf->MultiCell(0,7,'Stipend – Unpaid','','J');
else
$pdf->MultiCell(0,7,'Stipend – '.$job[9].' (The amount mentioned is on per month basis)','','J');
$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Internship Certificate ','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Letter of Recommendation','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Menstrual Policy benefits (if applicable)','','J');

$pdf->Ln(10);




$pdf->SetFont('Times','B',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(10,10,"III. \t\t");

//Output text
$pdf->MultiCell(0,10,'Privacy and Confidentiality agreement','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Individual acknowledges that though the relationship described herein, Individual will obtain access to certain “confidential Information” regarding the businesses affairs of the Organization or its affiliates, including without limitation information relating to discoveries, development, design, improvements, inventions, formulas, software programs,  processes, techniques, know-how, data, research techniques, customer and supplier list, marketing , sales or other financial or business Information, scripts, any all derivatives, improvement and enhancements to any of the above , and other proprietary information of a similar nature. Confidential Information shall not include any information which-','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(10);

//Output bullet
$pdf->Cell(5,7,chr(155)."\t\t");

//Output text
$pdf->MultiCell(0,7,'at the time of disclosure, is in the public domain through no fault of Individual;  ','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(10);

//Output bullet
$pdf->Cell(5,7,chr(155)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Individual can show was in its possession at the time of disclosure or is independently derived or developed by Individual, and was not acquired, directly or indirectly, from Organization; or','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(10);

//Output bullet
$pdf->Cell(5,7,chr(155)."\t\t");

//Output text
$pdf->MultiCell(0,7,'was received by Individual from a third party having the legal right to transmit the same. It is agreed that all such confidential Information is special, unique and an asset owed solely by Organization.','','J');

$pdf->Ln(10);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text

$pdf->SetFont('Times','BUI',12);

$pdf->Write(7,"Covent of Non-disclosure:");


$pdf->SetFont('Times','',12);

$pdf->Write(7,"  Individual  agrees  that  the  Individual will  retain all Confidential
"); 

$pdf->Cell(6);
$pdf->MultiCell(0,7,'Information in confidence; not disclose any confidential information to any third party without Organization’s permission; not use any Confidential Information for any other purpose other than performing Individual’s duties as aOrganization employee on behalf of Organization ; use Individual’s best efforts to limit access to Confidential Information to those who have a need to know the information for the business purpose of the Organization , return all tangible object and copies thereof containing Confidential Information to Organization upon request by the Organization; and upon termination of the Individual relationship with the Organization, not duplicate any Confidential Information without prior approval from the Organization; and honour Individual agreement under this agreement both during and after the employment relationship. Notwithstanding the provision of this paragraph, Individual shall not be deemed to be in violation of this paragraph for disclosing Confidential Information pursuant to a subpoena or court order, provided that the Individual provides Organization with reasonable prior notice of such subpoena or court order so that Organization may challenge such subpoena or court order.','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text

$pdf->SetFont('Times','BUI',12);

$pdf->Write(7,"Deposit companies’ documents:");


$pdf->SetFont('Times','',12);

$pdf->Write(7," \t Upon the termination of  your employment , you will return
"); 

$pdf->Cell(6);
$pdf->MultiCell(0,7,'to the Organization all papers and documents or other property which may at that time be in your possession relating to the business or affairs of the Organization or any of its associated or branches or their clients and will not retain any copies or extracts there from.','','J');

$pdf->Ln(10);



$pdf->SetFont('Times','B',12);

//Output bullet
$pdf->Cell(10,10,"IV. \t\t");

//Output text
$pdf->MultiCell(0,10,'Intellectual Property Rights','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Individual agrees that all developments, ideas, copyrightable creation, works of authorship, and other contributions (herein collectively referred to as "creations"), whether or not copyrighted or copyrightable, conceived, made, developed, created or acquired by Individual, either Individually or jointly, during Individual’s employment by or under any agreement with Organization and which relate in any manner to the Individual’s work for Organization shall be deemed to be a work made for hire. To the extent that this provision does not effectively transfer such rights, Individual does hereby sell, assign, and transfer to the Organization Individual’s entire right, title and interest (worldwide) in and to such creations and all intellectual property rights thereto.','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Individual specifically agrees that Organization’s rights granted hereunder shall include the right not to file for copyrights or domestic or foreign patents when such is considered by Organization in its sole discretion appropriate for the business objectives of Organization.','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Individual’s obligations regarding trade secrets and confidential information shall continue in effect beyond the period of the relationship as stated above, and said obligation shall be binding upon Individual’s spouse, affiliates, assigns, heirs, executors, administrators, or other legal representatives.','','J');

$pdf->Ln(10);



$pdf->SetFont('Times','B',12);

//Output bullet
$pdf->Cell(10,10,"V. \t\t");

//Output text
$pdf->MultiCell(0,10,'	Restrictive Covenants ','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->Write(7,"As a condition participation in this Internship program/ Employment you are required to enter 
\t \t \t  into a");
$pdf->SetFont('Times','B',12);
$pdf->Write(7,' restrictive covenant agreement ');
$pdf->SetFont('Times','',12);
$pdf->Write(7,'pursuant to which you would agree to the following:
');

$pdf->Ln(5);


//indent
$pdf->Cell(10);

//Output bullet
$pdf->Cell(5,7,chr(155)."\t\t");

//Output text
$pdf->MultiCell(0,7,'For a period of one(1) year following the termination of your internship, you will not solicit any client of Organization with which you had material contact for providing any service or product that was offered or provided by you on behalf of Organization to such client.','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(10);

//Output bullet
$pdf->Cell(5,7,chr(155)."\t\t");

//Output text
$pdf->MultiCell(0,7,'For a period of one (1) year following the termination of your internship, you will not solicit or hire any employee or intern of Organization with which you had material contact for providing services of the type of services provided by such employee or intern for Organization','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(10);

//Output bullet
$pdf->Cell(5,7,chr(155)."\t\t");

//Output text
$pdf->MultiCell(0,7,'For a period of three (3) years following the termination of your internship forOrganization, you will not disclose or use for your benefit or the benefit of another any of Organization’s confidential information.','','J');

$pdf->Ln(10);


//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Neither Individual nor any of their agents or principals shall become or be deemed an owner, partner, joint venture or agent of or with Organization or any of its affiliates or related companies or businesses by reason of this Agreement or his/her relationship with Organization unless set forth in a separate written agreement signed and dated by the parties. Neither Organization nor Individual nor any agent, Individual, officer or independent contractor of or retained by Individual shall have any authority to bind the other in any respect unless set forth in a separate written agreement signed and dated by the parties.','','J');

$pdf->Ln(10);



$pdf->SetFont('Times','B',12);

//Output bullet
$pdf->Cell(10,10,"VI. \t\t");

//Output text
$pdf->MultiCell(0,10,'Disciplinary Actions','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'The Organization can terminate your services immediately on disciplinary grounds.','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'If you remain absent without leave or overstay without obtaining leave after the expiry of leave ordinarily granted or subsequently extended, you will be deemed to have abandoned your employment on your own accord and your employment will automatically come to an end.','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'If it is found that you have misrepresented any information in your application for employment or at the time of interview, or have furnished any false information or have concealed or suppressed any relevant material facts, your services are liable to be terminated any time, without any notice or compensation in lieu thereof. You are further liable for the expenses incurred on you for Salary, any expenses; travel expenses for transfers and interviews etc. which have been meted out by the Organization on you and will be recovered from you.','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Your conduct at all times should reflect observance of the National and local laws and the rules and regulations of the Organization as from time to time in effect. If you are found involved in any Criminal Controversy or Convicted or an offence involving moral turpitude which would bring dis-repute to the Organization, you are liable for appropriate disciplinary action by the management including termination from the service of the Organization.','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'In all matters not covered above, the statutory regulations/ provisions applicable or the laws of the Organization applicable to your position, which may be framed from time to time, will govern you.','','J');

$pdf->Ln(5);


//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'You will be governed by the Rules and Regulations, policies, procedures and guidelines of the Organization as in force from time to time and will always supersede the terms and conditions mentioned in this offer letter.','','J');

$pdf->Ln(10);



$pdf->SetFont('Times','B',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(12,10,"VII. \t\t");

//Output text
$pdf->MultiCell(0,10,'Interpretation, Enforcement and Amendment','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'This letter agreement supersedes and replaces any prior agreements, representations or understandings (whether written, oral, implied or otherwise) between you and the Organization and constitute the complete agreement between you and the Organization regarding the subject matter set forth herein. This letter agreement may not be amended or modified, except by an express written agreement signed by both you and a duly authorized officer of the Organization.','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'If any provision of this Agreement is invalid or unenforceable, then such provision shall be construed and limited to the extent necessary, or severed if necessary, in order to eliminate such invalidity or unenforceability, and the other provisions of this Agreement shall not be affected thereby.','','J');

$pdf->Ln(10);



$pdf->SetFont('Times','B',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(12,10,"VIII. \t\t");

//Output text
$pdf->MultiCell(0,10,'Miscellaneous','','J');

$pdf->Ln(7);


$pdf->SetFont('Times','',12);

//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'You confirm that you are joining the Organization’s Internship Program under your own free will and agree to indemnify it against any claims that may arise due to your participation.','','J');

$pdf->Ln(5);



//indent
$pdf->Cell(1);

//Output bullet
$pdf->Cell(5,7,chr(149)."\t\t");

//Output text
$pdf->MultiCell(0,7,'Your individual remuneration is purely a matter between yourself and the Organization and has been arrived on the basis of your specific background and professional merit. You are required to maintain this information and any changes therein made from time to time as personal and strictly confidential.','','J');

$pdf->Ln(10);




$filename="./offerletters/".$_POST['appid'].".pdf";
$pdf->Output($filename,'F');
$_SESSION['f']=30;    
}
echo "<meta http-equiv=\"refresh\" content=\"0;URL='./app.php'\" />";
}
?>