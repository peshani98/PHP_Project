<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentcustomer ORDER BY id DESC");
?>


<style>
  .result
  {
    background-color: DodgerBlue;
    color: white;
    left: 0;
    right: 0;
    z-index: 99;
  }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

















<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

<div class="container">
  <h3>Add Rental Order</h3>  
    
</div>

  <div class="container" style="
    padding: 51px;
">
      	<form action="addorderental.php" method="post" name="form1">
            <div class="form-group">
                <label>ID Number</label>
                <input  type="nubmer" name="idno" class="form-control" placeholder="">
            </div>
            <br>
            
            
            <div class="container">
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                         <label>Customer Name</label>
                          <select name= "customername" class=" search-box form-control" searchable id="cars">
                            <option  >Choose a Customer</option>
                            <?php
	                          while($res = mysqli_fetch_array($result)) {	
                           echo  '<option value= "'.$res['id'].'">' .$res['customername'].'</option>';
                            }
                            ?>
                          </select>

                        </div>
                    </div>
                    <div class="col" style="padding: 30px;">

                         
                        <a href='rentcustomer.php' class="btn btn-success">Add Customer</a>

                    </div>

                  </div>
                          </div>


        <br>
        
             <div class="container">
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Date</label>
                          <input type="date" name="date" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Due Date</label>
                          <input type="date" name="duedate" class="form-control" placeholder="Name">
                        </div>
                    </div>

                  </div>
            </div>
        <br>

		
        
       	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<table class="table table-bordered table-hover" id="invoiceItem">	
							<tr>
								<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
								<th width="15%">Item No</th>
								<th width="38%">Item Name</th>
								<th width="15%">Quantity</th>
								<th width="15%">Price</th>								
								<th width="15%">Total</th>
							</tr>


							<tr>
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total"  class="form-control total" autocomplete="off"></td>
									<td><button class="btn btn-danger delete"  type="button" id="hide">- Delete</button><a href="javascript:void(0)"  class="btn btn-success" id="show" type="button">+ Add More</a></td>
							
							</tr>
							

							</table>
		      		</div>
		      	</div>
		      	

							
<script>
        $(document).ready(function () {

	$(document).on('click', '.btn-danger', function () {
	$(this).closest('.row').remove();
});
            
            $(document).on('click', '.btn-success', function () {
                $('.paste-new-forms').append('<div class="row">\
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
					  <table class="table table-bordered table-hover" id="invoiceItem">	<tr>\
           <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>\
						<th width="15%">Item No</th>\
								<th width="38%">Item Name</th>\
								<th width="15%">Quantity</th>\
                <th width="15%">Price</th>\
                <th width="15%">Total</th>\
                </tr>\
                <tr>\
								<td><input class="itemRow" type="checkbox"></td>\
								<td><input type="text"  name="productcode"  class="form-control" autocomplete="off"></td>\
								<td><input type="text" class="form-control " name="productname"  autocomplete="off"></td>\
								<td><input type="number"  name="quantity" class="form-control quantity" autocomplete="off"></td>\
								<td><input type="number"  name="price"  class="form-control price" autocomplete="off"></td>\
								<td><input type="number"  name="total"  class="form-control total" autocomplete="off"></td>\
								<td><button class="btn btn-danger delete"  type="button" id="hide">- <br> Delete</button><a href="javascript:void(0)"  class="btn btn-success" id="show" type="button">+ Add <br> More</a></td><tr>\
								</table>\
							</div>  </div>');
            });

        });
    </script>



				<div class="paste-new-forms"></div>

                       

        


  

            <div class="row">	
		      		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		      			<h3>Notes: </h3>
		      			<div class="form-group">
							<textarea class="form-control txt" rows="5" name="notes" placeholder="Your Notes"></textarea>
						</div>
						<br>
					
						
		      		</div>
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<span class="form-inline">
							
													
							<div class="form-group">
								<label>Total: &nbsp;</label>
								<div class="input-group">
									<input value="<?php echo $invoiceValues['order_total_after_tax']; ?>" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Amount Paid: &nbsp;</label>
								<div class="input-group">
									<input value="<?php echo $invoiceValues['order_amount_paid']; ?>" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Amount Due: &nbsp;</label>
								<div class="input-group">
									<input value="<?php echo $invoiceValues['order_total_amount_due']; ?>" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
								</div>
							</div>
							<br>
							<br>
						</span>
					</div>
		      	</div>


        
        <div class="form-group">
            <input type="hidden" name="status" value="Preparing" class="form-control">
        </div>
            
  

         <input type="submit"class="btn btn-primary" name="Submit" value="Add Product">
    </div>
 
    </form>
      
      
  </div>
  
  
  
  <?php include 'includes/footer.php';?>

