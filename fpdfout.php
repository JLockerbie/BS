<?php 

$name = $_POST['name'];
$characteristics = $_POST['characteristics'];
$image = $_POST['image'];


require('fpdf17/fpdf.php');

//create a FPDF object
 $pdf=new FPDF();

 //set document properties
 $pdf->SetAuthor('Anon');
 $pdf->SetTitle($name);

 //set font for the entire document
 $pdf->SetFont('Helvetica','B',20);
 $pdf->SetTextColor(50,60,100);

 //set up a page
 $pdf->AddPage('P'); 
//$pdf->SetDisplayMode(real,'default');

 //insert an image and make it a link
 $pdf->Image('logo.png',10,20,33,0);

 //display the title without a border around it
 $pdf->SetXY(50,20);
 $pdf->SetDrawColor(50,60,100);
 $pdf->Cell(100,10,$name,0,0,'C',0);


 // Insert a dynamic image from a URL
 $pdf->Image($image,75,30,0,50);

 //Set x and y position for the main text, reduce font size and write content
 $pdf->SetXY (10,90);
 $pdf->SetFontSize(10);
 $pdf->Write(5,$characteristics);

 //Output the document
 $pdf->Output(); 
?> 