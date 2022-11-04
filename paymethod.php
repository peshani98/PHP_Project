<?php include 'includes/header.php';?>

<?php

include_once("connection.php"); 

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentorders ORDER BY id DESC");

?>

<?php
include_once("connection.php");

    
    $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";
  

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    

?>



<div class="container">
    <h3>View Action</h3>
    <br>
    <br>
    <form action="paymethods.php" method="post" name="form1">
        
        
       <div class="form-group">


         <input type="hidden" name="id" value="<?php echo $singleRow['id']; ?>">
           <select name="paymethod" class="form-control">
            <option value="cash">Choose Payment Option</option>
             <option value="cash">Cash</option>
             <option value="cheque">Cheque</option>
             <option value="card">Card</option>
             
           </select>
           <br>
           <br>

           <label for="">Price Amount</label>
           <input type="text" class="form-control" name="priceamt">

           <br>
           <br>
           <select name="paymethod2" class="form-control">
           <option value="cash">Choose Payment Option</option>

             <option value="cash">Cash</option>
             <option value="cheque">Cheque</option>
             <option value="card">Card</option>
             
           </select>
           <br>
           <br>
           <label for="">Price Amount</label>
           <input type="text" class="form-control" name="priceamt2">

           <br>
           <br>

           <select name="paymethod3" class="form-control">
           <option value="cash">Choose Payment Option</option>

             <option value="cash">Cash</option>
             <option value="cheque">Cheque</option>
             <option value="card">Card</option>
             
           </select>
           <br>
           <br>
           <label for="">Price Amount</label>
           <input type="text" class="form-control" name="priceamt3">


        </div>

        <br>
           <br>
        
    
        
        <input type="submit"class="btn btn-primary" name="Submit" value="Add Action">
    </form>

</div>