<?php include 'includes/header.php';?>



<div class="container">
    <h5 class="head5">Add Product Category </h5>
	<form action="addcat.php" method="post">
            <div class="form-group">
                <label>Category</label>
                <br>
                <br>
                <input type="text" name="name" class="form-control"> 
            </div>
            <br>
          
    <input type="submit" " class="btn btn-success" name="Submit" value="Add Category">

      
    </form>

    <?php
      if(isset($_GET['message'])){
      echo $_GET['message'];
    }
  ?>
</div>