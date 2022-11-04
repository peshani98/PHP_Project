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
    
    

    
    

if (isset($_POST['update'])) {
    
    $iddata=$singleRow['id'];

    
// 	
	
	$advance_amount2 = $_POST['advance_amount2'];
	$complete = $_POST['complete'];


    $result = "UPDATE orders SET id='$iddata' , advance_amount2='$advance_amount2', complete='$complete' WHERE id='$iddata'";

    
    




	
	
	

	  if(!mysqli_query($mysqli, $result)) {
      die('Error: ' . mysqli_error($mysqli));
      
     
      
    }
    else
    {
        header("Location: https://shan.receiptstailor.com/index.php");
        

    }
  

	
}





?>


    
    
    
  
    
    








<div class="container">
  <br>
  <h6>Item Name :  <?php echo $singleRow['item']; ?></h6>
  <br>
  <h6>Paid Amount : <?php 
    
    $result2=$singleRow['advance_amount'];
    $result3=$singleRow['advance_amount2'];
    
    
    $priceadd= $result2 + $result3;
    
    echo $priceadd;
  
  ?></h6>  
  
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <br>
        <label>Remaining Payment</label>
        <br>
        <br>
        <input class="form-control" type="hidden" name="id" placeholder="<?php echo $singleRow['id']; ?>"> 
        <input class="form-control" type="text" name="advance_amount2" placeholder="<?php echo $singleRow['advance_amount2']; ?>"> 
        <input type="hidden" name="complete" value="0" class="form-control">
       <br>
       
       <input class="btn btn-primary"  type = "submit" name = "update"   value = "Complete the Order">
   </form>
    
</div>
