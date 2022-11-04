<?php include 'includes/header.php';?>

<?php
  include_once("connection.php"); 
  
  $sql = "SELECT * FROM coats WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
  ?>


<div class="container">
  <h3>Update Product</h3>  
    
</div>

  <div class="container" style="
    padding: 51px;
">
      	<form action="upedit.php" method="post" name="form1">

            <input type="hidden" name="id" value="<?php echo $singleRow['id']; ?>">

            <div class="form-group">
                <label>ID Number</label>
                <input  type="nubmer" name="idno" value="<?php echo $singleRow['idno']; ?>" class="form-control">
            </div>
            <br>
            
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="productname" value="<?php echo $singleRow['productname']; ?>" class="form-control">
            </div>

        <br>
        
       
        
        
        <div class="form-group">
                <label>SKU</label>
                <input type="text" name="code" value="<?php echo $singleRow['code']; ?>" class="form-control">
            </div>

        <br>
        
            
        <div class="form-group">
            <label>Category</label>
            <input  type="text" name="category" value="<?php echo $singleRow['category']; ?>" class="form-control">
        </div>
        <br>
            
        <div class="form-group">
            <label>Measurement</label>
            <input  type="text" name="subcategory" value="<?php echo $singleRow['subcategory']; ?>" class="form-control" >
        </div>
        <br>
            
        <div class="form-group">
            <label>Product Color</label>
            <input  type="color" name="pcolour" value="<?php echo $singleRow['pcolour']; ?>" class="form-control ">
        </div>
        <br>
            
        <div class="form-group">
            <label>Material</label>
            <input  type="text" name="material" value="<?php echo $singleRow['material']; ?>" class="form-control ">
        </div>
        <br>
        
         <div class="form-group">
            <label>Price</label>
            <input  type="text" name="price" value="<?php echo $singleRow['price']; ?>" class="form-control">
        </div>
        <br>
            
  
            <input type="submit" class="btn btn-primary" name="Submit" value="Update Product">
    </div>
 
    </form>
      
      
  </div>
  
  <?php include 'includes/footer.php';?>

