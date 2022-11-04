<?php
  include_once("connection.php"); 

  
  include 'phpqrcode/qrlib.php';

  
  

  if(isset($_POST['Submit'])) {	
    $idno = $_POST['idno'];  
    $productname = $_POST['productname'];
    $code = $_POST['code']; 
    $category = $_POST['category']; 
    $subcategory = $_POST['subcategory']; 
    $pcolour = $_POST['pcolour'];
  
    $material =$_POST ['material'];
    $price =$_POST ['price'];
    
    

        
    $result = "INSERT INTO coats (idno,productname,code,category,subcategory,pcolour,material,price) VALUES ('$idno','$productname', '$code', '$category', '$subcategory','$pcolour','$material','$price')";



    if(!mysqli_query($mysqli ,$result)) {
        die('Error: ' . mysqli_error($mysqli));
    }
    
 
    
    

   
   header("Location: rentcoats.php");
  
      
  }

    mysqli_close($mysqli);
  

      

?>