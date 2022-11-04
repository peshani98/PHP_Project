<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$sql = "SELECT * FROM coats WHERE code='" . $_GET["code"] . "'";

$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_assoc($result);




?>

                                       


<div class="container">
   <form action="" method="GET">
        <label>Enter Code</label>
        <br>
        <br>
        <input type="text" class="form-control"name="sku" placeholder="Enter Code " required value="<?php if(isset($_GET['code'])){ echo $_GET['code']; } ?>">
        <br>
        <input type="submit" class="btn btn-success" value="Check">
        <br>
    </form>
    
    
                              
                        
                                
              </tbody>
      <div class="container p-3 my-3 bg-dark text-white">
          ID Number : <?php echo $singleRow['id']; ?>
          <br>
          <br>
         
          Product Name :<?php echo $singleRow['productname']; ?>
          <br>
          <br>
      
          <br>
          
      </div>
      
      
      
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col">Order Id</th>
      <th scope="col">Status</th>
      <th scope="col">Total Amount</th>
     
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody id="myUL">
      
      
     

 
		 <tr>
		 <td>$res['customername']</td>
		 <td>$res['customername']</td>
		 <td>$res['status']</td>
	   <td>$res['total_amt']</td>
		
        <td><a class='btn btn-primary' href=\"completeorder.php?id=$res[id]\">Complete Order</a>  </td>	


	
	

 
  </tbody>
</table>
      
      <form action="stockadd.php" method="POST">
          <H3>Collect the Payment</H3>
          <input type="submit" class="btn btn-success" value="Collect">
      </form>

</div>

<?php include 'includes/footer.php';?>
