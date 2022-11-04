

<?php
  include_once("connection.php");

 $sql = "SELECT * FROM coats WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    
// Include the qrlib file
include 'phpqrcode/qrlib.php';



  
// $text variable has data for QR 


$link = "https://newshan.receiptstailor.com/checkproduct.php?code=";
$sku = $singleRow['code'];
$text = $link  . $sku;
  
  //Set pixel size
    $pixel_size = 12;
    
    $frame_size = 8;
  
  $fileName = $singleRow['code'].".png"; 
$tempDir = "qrimg";                    // the directory to store the files
$filePath = $tempDir . "/" . $fileName;
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser


QRcode::png($text, $filePath , $pixel_size, $frame_size);

if(file_exists($filePath)) {
    echo '<img src="./'.$filePath.'" />'; 
}
?>

