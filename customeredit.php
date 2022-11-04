<?php include 'includes/header.php';?>

<?php
include_once("connection.php");

    
    $sql = "SELECT * FROM orders WHERE id='" . $_GET["id"] . "'";
  

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    

?>

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
	
	$phone = $_POST['phone'];


    $result = "UPDATE orders SET id='$iddata' , phone='$phone' WHERE id='$iddata'";
    
    




	
	
	

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
  <h6>Customer Name :  <?php echo $singleRow['name']; ?></h6>
  <br>
  <h6> Phone Number : <?php echo $singleRow['phone']; ?></h6>  
  
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <br>
        
        <input class="form-control" type="hidden" name="id" placeholder="<?php echo $singleRow['id']; ?>"> 
        <input class="form-control" type="text" name="phone" value="94" placeholder="<?php echo $singleRow['phone']; ?>">
        <br>
       <br>
       
       <input class="btn btn-primary"  type = "submit" name = "update"   value = "Update ">
   </form>
    
</div>


