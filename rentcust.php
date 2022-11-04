<?php
  include_once("connection.php"); 

  if(isset($_POST['Submit'])) {	
    $idnumber = $_POST['idnumber'];
    $customername = $_POST['customername'];  
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    $email =$_POST['email'];
    

        

    $result = "INSERT INTO rentcustomer (idnumber,customername,telephone,address,email) VALUES ('$idnumber','$customername','$telephone', '$address', '$email')";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }

   
   header("Location: viewcustomerrent.php");
  
      
  }

    mysqli_close($mysqli);
  

      

?>