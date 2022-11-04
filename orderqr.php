<?php
  include_once("connection.php");

 $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    
// Include the qrlib file
include 'phpqrcode/qrlib.php';



  
// $text variable has data for QR 
$text = $singleRow['id'];
  
  $fileName = md5(uniqid()).'.png'; 
$tempDir = "qrimg";                    // the directory to store the files
$filePath = $tempDir . "/" . $fileName;
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser
QRcode::png($text, $filePath);

if(file_exists($filePath)) {
    echo '<img src="./'.$filePath.'" />'; 
}
?>