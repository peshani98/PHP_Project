<?php include 'includes/header.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


   <div class="container">
       <button onclick="window.location.href='viewcustomerrent.php';" class="btn btn-primary">View Customers</button>
   </div>
   <br>
   <br>
<div class="container">
    <h4>Add Customer</h4>
</div>
<br><br>
  <div class="container">
      	<form action="rentcust.php" method="post" name="form1">
      	    
      	    <div class="form-group">
                <label>ID Number</label>
                <input  type="nubmer" name="idnumber" class="form-control ">
            </div>
            <br>
            <div class="form-group">
                <label>Customer</label>
                <input  type="nubmer" name="customername" class="form-control ">
            </div>
            <br>

            <div class="form-group">
                <label>Telephone</label>
                <input  type="nubmer" name="telephone" class="form-control ">
            </div>
            <br>
            
            


        <br>

         <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control">
            </div>
           
    
       <br>
       
       <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="email" class="form-control">
            </div>
           
    
       <br>

       
       

  

         <input type="submit" " class="btn btn-primary" name="Submit" value="Add Customer">
    </div>
 
    </form>
    
    <?php include 'includes/footer.php';?>
