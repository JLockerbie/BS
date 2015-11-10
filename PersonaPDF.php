<?php
$name = $_POST['name'];
$characteristics = $_POST['characteristics'];
$image = $_POST['image'];
$clues = explode(',', $_POST['clues']);

require('MultiCellBlt2.php');

 //Create pdf
 $pdf=new PDF();
 $pdf->AddPage();

 //set document properties
 $pdf->SetAuthor('Anon');
 $pdf->SetTitle($name);

 // Set the page break to 'true' and the bottom margin height
 $pdf->SetAutoPageBreak(1,10);

 //set font for the entire document
 $pdf->SetFont('Helvetica','B',20);
 $pdf->SetTextColor(50,60,100);

 //insert Collage logo
 $pdf->Image('logo.png',10,10,33,0);

 //display the title without a border around it
 $pdf->SetXY(50,15);
 $pdf->SetDrawColor(50,60,100);
 $pdf->Cell(100,10,$name,0,0,'C',0);

 // Insert a dynamic image from a URL
 $pdf->Image($image,11,30,0,50);

 //Set x and y position for the main text, reduce font size and write content
 $pdf->SetXY (65,30);
 $pdf->SetLeftMargin(65);
 $pdf->SetFontSize(10);
 $pdf->Write(5,$characteristics);
 $pdf->Ln(8);

 //Output the clues
 $pdf->SetFont('Helvetica','',9);
 $pdf->SetXY (10,90);

 $column_width = $pdf->w-10;

 // For bullet list - width and bullet array variables
 $cluesBullet = array();
 $cluesBullet['bullet'] = chr(149);
 $cluesBullet['margin'] = ' ';
 $cluesBullet['indent'] = 0;
 $cluesBullet['spacer'] = 0;
 $cluesBullet['text'] = array();

 //Set a counter for the foreach loop
 $i=0;

 foreach($clues as $val) {
  	$cluesBullet['text'][$i] = $val;
	$i++;
 }

 $pdf->SetX(10);
 $pdf->MultiCellBltArray($column_width-$pdf->x,5,$cluesBullet);
 $pdf->Ln(10);

 //Finally output the pdf
 $pdf->Output();
?>