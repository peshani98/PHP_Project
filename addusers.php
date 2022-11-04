<?php
 include_once("connection.php");
 
 
 if(isset($_POST['Submit'])) {	
    $username = $_POST['username'];  
    $email = $_POST['email'];
    $role = $_POST['role'];
    $enypassword = $_POST['password'];
    $password = md5($enypassword);
  
 


    
    

        

    $result = "INSERT INTO  rentuser (username,email,role,password) VALUES ('$username', '$email','$role','$password')";

    if(!mysqli_query($mysqli, $result)) {
        die('Error: ' . mysqli_error($mysqli));
    }
    
    
   


   
   header("Location: users.php");
  
      
  }

    mysqli_close($mysqli);
  

?>