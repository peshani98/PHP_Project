<?php include 'includes/header.php';?>




<div class="container">
    <h5 class="head5">Change Password </h5>
	<form action="changepasss.php" method="post" name="form1">
            <div class="form-group">
                <label>Current Password</label>
                <br>
                <br>
                <input type="text" name="currentPassword" class="form-control"> 
            </div>
            <br>

            <div class="form-group">
                <label>New Password</label>
                <br>
                <br>
                <input type="text" name="password" class="form-control"> 
            </div>
            <br>

            <div class="form-group">
                <label>Confirm New Password</label>
                <br>
                <br>
                <input type="text" name="password" class="form-control"> 
            </div>
            <br>
          
    <input type="submit" " class="btn btn-warning" name="Submit" value="Change Password">

      
    </form>