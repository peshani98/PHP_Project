<?php include 'includes/header.php';?>


<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentcustomer ORDER BY id DESC");



?>

<h2 class="container head3">View Rent Customers </h2>
<br>


<div class="container">
    
        <button onclick="window.location.href='rentcustomer.php';" class="btn btn-success">Add Customer</button>
        <br>
        <br>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Number</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Telephone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['idnumber']."</td>";
		echo "<td>".$res['customername']."</td>";
		echo "<td>".$res['telephone']."</td>";	
		echo "<td>".$res['address']."</td>";	
        echo "<td>".$res['email']."</td>";	
        echo "<td>".$res['status']."</td>";
        echo "<td>".$res['status']."</td>";
	
	}
  ?>
 
  </tbody>
</table>
</div>

<?php include 'includes/footer.php';?>
