<?php session_start(); ?>
<?php include 'includes/header.php';?>


<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM orders ORDER BY id DESC");
?>
