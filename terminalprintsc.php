<?php
include_once("connection.php"); 

    $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);

   header("Location: hello.php?id=$singleRow[id]");


   ?>