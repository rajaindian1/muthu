<?php
require_once('c:/xampp/htdocs/libraries/fpdf/fpdf.php');
require_once('c:/xampp/htdocs/libraries/fpdi/src/autoload.php');

// Database related code 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo("<br>Connection Established");

// Retrieve the ID number from the HTML form submission
$id = $_POST["bibid"];


// Query the database to retrieve the PDF file
$sql = "SELECT * FROM muthu_cert WHERE bibid=$id";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
  // Retrieve the PDF file from the query result
  $row = mysqli_fetch_assoc($result);
  $name = $row["rname"];
  $cate = $row['cate'];
  $place = $row['place'];
  $ftime = $row['ftime'];
  $mdate = $row['mdate'];
  //$pdf=$row["clink"];
  //$pdf = $row["certificate"];

  // Set the appropriate headers to display the PDF file in the browser
  /*header("Content-type: application/pdf");
  header("Content-Disposition: inline; filename='certificate.pdf'");
  header("Content-Transfer-Encoding: binary");
  header("Accept-Ranges: bytes");*/
  //header("Location: ".$pdf);
  // Output the PDF file to the browser
  //echo $pdf;
  // initiate FPDI
$pdf = new \setasign\Fpdi\Fpdi();
// add a page
$pdf->AddPage('L');

//$pdf->AddFont('MyFont', '', 'c:\xampp\htdocs\MAIAN.TTF');

// set the source file
$pdf->setSourceFile('mm.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx);

// now write some text above the imported page
$pdf->SetFont('Times','',18);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(150,92);
$pdf->Write(0, $name);
$pdf->SetXY(157,110);
$pdf->Write(0, $cate);
$pdf->SetXY(75,127);
$pdf->Write(0, $place);
$pdf->SetXY(165,127);
$pdf->Write(0, $ftime);
$pdf->SetXY(230,127);
$pdf->Write(0, $mdate);

$pdf->Output('I', "$name.pdf");

} else {
  echo "<script>alert('Please enter valid INFORMATION');document.location='mCertificate.html';</script>";
  echo "No PDF file found for ID number $id.";
}

// Close the database connection
mysqli_close($conn);?>




// End of database things.

// initiate FPDI
/* $pdf = new \setasign\Fpdi\Fpdi();
// add a page
$pdf->AddPage('L');

//$pdf->AddFont('MyFont', '', 'c:\xampp\htdocs\MAIAN.TTF');

// set the source file
$pdf->setSourceFile('mm.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx);

// now write some text above the imported page
$pdf->SetFont('Times','B',20);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(150,94);
$pdf->Write(0, 'Participant Name');

$pdf->Output('I', 'generated.pdf'); */

?>