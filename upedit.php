<?php

  include_once("connection.php"); 


if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
	  $idno = $_POST['idno'];  
    $productname = $_POST['productname'];
    $code = $_POST['code']; 
    $category = $_POST['category']; 
    $subcategory = $_POST['subcategory']; 
    $pcolour = $_POST['pcolour'];
    $material =$_POST ['material'];
    $price =$_POST ['price'];
    
    


    $result = "UPDATE coats SET id='$id', idno='$idno', productname='$productname', code='$code', category='$category', subcategory='$subcategory', pcolour='$pcolour', material='$material', price='$price' WHERE id='$id'";
	 
	
	  if(!mysqli_query($mysqli,$result)) {
      die('Error: ' . mysqli_error($mysqli));
  }
	$_SESSION['message'] = "Product updated!"; 
	header('location: rentcoats.php');
	 
	 
	 
	
}


?>
