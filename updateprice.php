<?php include 'includes/header.php';?>


<?php

include_once("connection.php");


$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id DESC");
?>

<h2 class="head3">Update  Price list</h2>
<br>
<div class="container">
<div class="flex">
    <label>Search</label>
    <input type="text" placeholder="Search..">
  
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
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['description']."</td>";
    echo "<td>".$res['min_price']."</td>";
    echo "<td>".$res['max_price']."</td>";
    echo "<td><a class='btn btn-primary' href=\"editprice.php?id=$res[id]\">Edit</a> </td>";
	}
  ?>
 
  </tbody>
</table>
</div>