<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM orders ORDER BY id DESC");
?>
<h2 class="head3">View Customers </h2>
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
<button class="btn btn-primary">Go</button>
</div>
<br>
</div>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Due Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['phone']."</td>";	
		echo "<td>".$res['duedate']."</td>";
    echo "<td>".$res['duedate']."</td>";
		echo "<td><a class='btn btn-warning' href=\"customeredit.php?id=$res[id]\">Edit</a>  </td>";

	}
  ?>
</div>
