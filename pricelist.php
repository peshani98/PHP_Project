<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id DESC");
?>

<h2 class="head3">View Pricelist</h2>
<br>
<div class="container">
<div class="flex">
    <label>Search</label>
    <input type="text" placeholder="Search..">
    <br>
    <br>
    
    <a class="btn btn-primary" href="updateprice.php">Update Prices</a>
    <br>
</div>
</div>
<br>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item</th>
      <th scope="col">Description</th>
      <th scope="col">Min Price</th>
      <th scope="col">Max Price</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['description']."</td>";
    echo "<td>".$res['min_price']."</td>";
    echo "<td>".$res['max_price']."</td>";
	}
  ?>
 
  </tbody>
</table>
</div>