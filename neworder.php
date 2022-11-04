
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$duedate = $_POST['duedate'];
	$details = $_POST['detail'];

		
	// checking empty fields
	if(empty($name) || empty($phone) || empty($duedate)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($phone)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($duedate)) {
			echo "<font color='red'>Due Date field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO orders(name,  phone, duedate, detail) VALUES('$name','$phone','$price', '$duedate', '$details')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='vieworder.php'>View Result</a>";
	}
}
?>

