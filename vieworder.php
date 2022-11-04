<?php session_start(); ?>
<?php include 'includes/header.php';?>


<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM orders ORDER BY id DESC");
?>


<style>
    
    
    #myInput {
  font-size: 16px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
}
</style>
<h2 class="head3">View Orders</h2>
<br>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['name'])){ echo $_GET['id']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
             <div class="container">
                 <table class="table">
          <thead>
    <tr>
      <th scope="col">Receipt No</th>
      <th scope="col">Order No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Billed On</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
    <tbody id="myUL">

          <?php 
                include_once("connection.php");

                if(isset($_GET['search']))
                        {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM orders WHERE CONCAT(id,name,phone) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($mysqli, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['advance_amount']; ?></td>
                                                    <td><?= $items['duedate']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <?php
                                                         echo "<td><a class='btn btn-primary' href=\"completeorder.php?id=$items[id]\">Complete Order</a>  </td>  <td><a class='btn btn-warning' href=\"invoice.php?id=$items[id]\">View Invoice</a>  </td> <td><a class='btn btn-success' href=\"printinorder.php?id=$items[id]\">Print Cut Invoice</a>  </td> <td><a class='btn btn-danger' href=\"shopinvoice.php?id=$items[id]\">Shop Invoice</a>  </td> <td><a class='btn btn-dark' href=\"pickuporder.php?id=$items[id]\">Pickup Order</a>  </td>";	

                                                    ?>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                                
              </tbody>
                </table>


          
      </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                     
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Receipt No</th>
      <th scope="col">Order No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Billed On</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody id="myUL">
      
      
     
      
          
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['phone']."</td>";	
		echo "<td>".$res['advance_amount']."</td>";	
        echo "<td>".$res['duedate']."</td>";
        echo "<td><a class='btn btn-primary' href=\"completeorder.php?id=$res[id]\">Complete Order</a>  </td>  <td><a class='btn btn-primary' href=\"invoice.php?id=$res[id]\">View Invoice</a>  </td> <td><a class='btn btn-primary' href=\"printinorder.php?id=$res[id]\">Print Cut Invoice</a>  </td> <td><a class='btn btn-primary' href=\"shopinvoice.php?id=$items[id]\">Shop Invoice</a>  </td> <td><a class='btn btn-primary' href=\"pickuporder.php?id=$items[id]\">Pickup Order</a>  </td>";	


	
	
	}
  ?>
 
  </tbody>
</table>
</div>


<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

<?php include 'includes/footer.php';?>
