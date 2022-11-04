<?php
//including the database connection file
include_once("connection.php");


    $sql = "SELECT * FROM orders WHERE id='" . $_GET["id"] . "'";
    
    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    $iddata=$singleRow['id'];
    
  
    
    

if (isset($_POST['update'])) {
    
    $iddata=$singleRow['id'];
    
// 	
	
	$advance_amount2 = $_POST['advance_amount2'];
	$complete = $_POST['complete'];


    $result = "UPDATE orders SET id='$iddata' , advance_amount2='$advance_amount2', complete='$complete' WHERE id='$iddata'";
    
    header('location: index.php');




	
	
	

	  if(!mysqli_query($mysqli, $result)) {
      die('Error: ' . mysqli_error($mysqli));
      
     
      
    }
    else
    {
        header("Location: index.php");
    }
  

  
  
  

  
  
	
}




?>
