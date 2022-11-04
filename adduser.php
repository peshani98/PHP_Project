<?php include 'includes/header.php';?>


<div class="container">
  <h3>Add User</h3>  
    
</div>

<div class="container" style="padding: 51px;">
    	<form action="addusers.php" method="post" name="form1">
            <div class="form-group">
                <label>Username</label>
                <input  type="text" name="username" class="form-control ">
            </div>
            <br>

            <div class="form-group">
                <label>Email</label>
                <input  type="email" name="email" class="form-control ">
            </div>
            <br>
            
                <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control">
                <option value="">Select the Item</option>
                <option value="admin">Admin</option>
                <option value="cashier">Cashier</option>
                <option value="user">User</option>
                <option value="Manager">Manager</option>
                   
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>Password</label>
                <input  type="password" name="password" class="form-control">
            </div>
            <br>
  

      
        
        <input type="submit" " class="btn btn-primary" name="Submit" value="Add User">
    
</div>

 
    </form>

   
</div>