<?php


 include_once("connection.php");
 
 //fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentuser ORDER BY id DESC");


?>


<?php include 'includes/header.php';?>




<h2 class=" container head3">View User</h2>
<br>

<div class="container">
    <button onclick="window.location.href='adduser.php';" class="btn btn-success">Add User</button>

<div class="flex">
    <label>From</label>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
    <label>To</label>
    <input type="text" placeholder="Search..">
   
    <button class="btn btn-primary">Go</button>
</div>
</div>
<br>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
  
      <th scope="col">Action</th>
      

    </tr>
  </thead>
  <tbody id="myUL">
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td>".$res['role']."</td>";	
    echo "  <td><a class='btn btn-primary' href=\"updateuser.php?id=$res[id]\">Edit</a> <a class='btn btn-primary' href=\"userqr.php?id=$res[id]\">Qr Code</a> </td> ";
	
	
	}
  ?>
 
  </tbody>
</table>
</div>
