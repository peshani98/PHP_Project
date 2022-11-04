<?php
//including the database connection file
include_once("connection.php");


    
    
    

  
    
    

if (isset($_POST['update'])) {
    
    $sql = "SELECT * FROM products WHERE id='" . $_GET["id"] . "'";
    
    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    $iddata=$singleRow['id'];
    $id = $_POST['id'];

    
	
	$min_price = $_POST['min_price'];
	$max_price = $_POST['max_price'];


    $result = "UPDATE products SET id='$id' , min_price='$min_price', max_price='$max_price' WHERE id='$iddata'";
    var_dump($result);	

    
    




	
	
	

	  if(!mysqli_query($mysqli, $result)) {
      die('Error: ' . mysqli_error($mysqli));
      
     
      
    }
    else
    {
        header("Location: updateprice.php");
    }
  

	
}





?>