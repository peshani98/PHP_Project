<?php
  include_once("connection.php"); 
  
  
    if(isset($_POST['Submit'])) {
    $id = $_POST['id'];   
    $paymethod = $_POST['paymethod']; 
    $priceamt = $_POST['priceamt'];
    $paymethod2 = $_POST['paymethod2']; 
    $priceamt2 = $_POST['priceamt2'];
    $paymethod3 = $_POST['paymethod3']; 
    $priceamt3 = $_POST['priceamt3'];


    
    

    $result = "UPDATE  rentorders SET id='$id', paymethod='$paymethod', priceamt='$priceamt', paymethod2='$paymethod2',priceamt2='$priceamt2', paymethod3='$paymethod3',priceamt3='$priceamt3' WHERE id='$id' ";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }
    

   
   header("Location: viewrentorder.php");
  
      
  }

    mysqli_close($mysqli);
  

      

?>