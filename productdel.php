<?php

include_once("connection.php"); 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($mysqli, "DELETE FROM coats WHERE id=$id");
	$_SESSION['message'] = "Product deleted!"; 
	header('location: rentcoats.php');
}


?>