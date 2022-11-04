<?php include 'includes/header.php';?>

<?php
include_once("connection.php");

    
    $sql = "SELECT * FROM products WHERE id='" . $_GET["id"] . "'";
  

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    

?>

<?php
//including the database connection file
include_once("connection.php");


    $sql = "SELECT * FROM products WHERE id='" . $_GET["id"] . "'";
    
    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    
    
    $iddata=$singleRow['id'];
    
  
    
    

if (isset($_POST['update'])) {
    
    $iddata=$singleRow['id'];
    
// 	
	
	$min_price = $_POST['min_price'];
	$max_price = $_POST['max_price'];


    $result = "UPDATE products SET id='$iddata' , min_price='$min_price', max_price='$max_price' WHERE id='$iddata'";
    
    




	
	
	

	  if(!mysqli_query($mysqli, $result)) {
      die('Error: ' . mysqli_error($mysqli));
      
     
      
    }
    else
    {
        header("Location: index.php");
    }
  

	
}





?>





<div class="container">
  <br>
  <h6>Min Price :  <?php echo $singleRow['min_price']; ?></h6>
  <br>
  <h6> Max Price : <?php echo $singleRow['max_price']; ?></h6>  
  
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <br>
        
        <input class="form-control" type="hidden" name="id" placeholder="<?php echo $singleRow['id']; ?>"> 
        <input class="form-control" type="text" name="min_price" placeholder="<?php echo $singleRow['min_price']; ?>">
        <br>
        <input  class="form-control" type="text" name="max_price" value="<?php echo $singleRow['max_price']; ?>">
       <br>
       
       <input class="btn btn-primary"  type = "submit" name = "update"   value = "Update the Price">
   </form>
    
</div>


