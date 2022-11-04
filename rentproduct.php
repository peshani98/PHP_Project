<?php include 'includes/header.php';?>




<div class="container">
  <h3>Add Product</h3>  
    
</div>

  <div class="container" style="
    padding: 51px;
">
      	<form action="rentproductorder.php" method="post" name="form1">
            <div class="form-group">
                <label>ID Number</label>
                <input  type="nubmer" name="idno" class="form-control" placeholder="">
            </div>
            <br>
            
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="productname" class="form-control" placeholder="Name">
            </div>

        <br>
        
       
        
        
        <div class="form-group">
                <label>SKU</label>
                <input type="text" name="code" class="form-control"placeholder="">
            </div>

        <br>
        
            
        <div class="form-group">
            <label>Category</label>
            <input  type="text" name="category" class="form-control "placeholder="Category">
        </div>
        <br>
            
        <div class="form-group">
            <label>Measurement</label>
            <input  type="text" name="subcategory" class="form-control "placeholder="">
        </div>
        <br>
            
        <div class="form-group">
            <label>Product Color</label>
            <input  type="color" name="pcolour" class="form-control " placeholder="Product Color">
        </div>
        <br>
            
        <div class="form-group">
            <label>Product Color</label>
            <input  type="text" name="material" class="form-control "placeholder="Material">
        </div>
        <br>
        
           <div class="form-group">
               <label>Material</label>
            <input  type="text" name="price" class="form-control "placeholder="Price">
        </div>
        <br>
            
  

         <input type="submit"class="btn btn-primary" name="Submit" value="Add Product">
    </div>
 
    </form>
      
      
  </div>
  
  <?php include 'includes/footer.php';?>

