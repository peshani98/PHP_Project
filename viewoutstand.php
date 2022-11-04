<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM orders ORDER BY id DESC");



?>

<h2 class="head3">View Outstanding </h2>
<br>
<div class="container">
<div class="flex">
    <label>From</label>
    <input type="text" placeholder="Search..">
      <label>To</label>
    <input type="text" placeholder="Search..">
  
</div>
</div>
<br>
<div class="container">
<div class="flex">

<label>Order</label>
<input type="text" placeholder="Search..">
<label>Phone</label>
<input type="text" placeholder="Search..">
<label>Name</label>
<input type="text" placeholder="Search..">
<button class="btn btn-success">Go</button>
</div>
<br>
</div>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Receipt No</th>
      <th scope="col">Order No</th>
      <th scope="col">Name</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Billed On</th>
    </tr>
  </thead>
  <tbody>
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";	
		echo "<td>".$res['advance_amount']."</td>";	
    echo "<td>".$res['duedate']."</td>";	
	
	}
  ?>
 
  </tbody>
</table>
</div>

<?php include 'includes/footer.php';?>

