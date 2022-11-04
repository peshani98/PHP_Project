<?php
  include_once("connection.php");

 $sql = "SELECT * FROM rentuser WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    
// Include the qrlib file
include 'phpqrcode/qrlib.php';



  //Set pixel size
  $pixel_size = 12;
    
  $frame_size = 8;

// $text variable has data for QR 
$text = $singleRow['id'];
  
$fileName = md5(uniqid()).'.png'; 
$tempDir = "qruser";                    // the directory to store the files
$filePath = $tempDir . "/" . $fileName;
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser
QRcode::png($text, $filePath, $pixel_size, $frame_size);

if(file_exists($filePath)) {
    echo '<img src="./'.$filePath.'" />'; 
}

?>