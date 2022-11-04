<?php session_start(); ?>
<style>
    	@media print {
                #printbtn {
                    display :  none;
                }
            }
</style>

<div id ="printbtn">

 <?php include 'includes/header.php';?>
 
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Reports <?php echo $_GET['from_date'];?> &nbsp;  to &nbsp;<?php echo $_GET['from_date'];?></h4>
                    </div>
                    <div id ="printbtn" class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    <button id ="printbtn" type="button" onClick="window.print()" class="btn btn-success">Print</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    <th>Billed Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                            
                                $databaseHost = 'localhost';
                                $databaseName = 'receiptstailor_demo';
                                $databaseUsername = 'receiptstailor_demo';
                                $databasePassword = 'xCV(MrQQRvS5';
                                
                                
                                $con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $query = "SELECT * FROM rentorders WHERE created_at BETWEEN '$from_date' AND '$to_date' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['customername'];?></td>
                                                                                        <td><?= $row['status']; ?></td>
                                                <td><?= $row['total']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>