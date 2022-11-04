


<?php
$databaseHost = 'localhost';
$databaseName = 'receiptstailor_demo';
$databaseUsername = 'receiptstailor_demo';
$databasePassword = 'xCV(MrQQRvS5';
$con  = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM orders";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Product']  ;
            $sales[] = $row['TotalSales'];
        }
 
 
 }
 
 
?>