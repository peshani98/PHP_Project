<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM orders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);


?>

<!doctype html>
<head>
    <title>Shop Print  #<?php echo $singleRow['id']; ?></title>
</head>

<style>
    
    
    
    	body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}
			
			@media print {
                #printbtn {
                    display :  none;
                }
            }

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
</style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<body>

                <div class="container">
        <button id ="printbtn" type="button" class="btn btn-danger" onClick="window.print()">Print this page</button> <br/>
    </div>
      
 
        
      <div class="invoice-box">
       
     Customer Name : <?php echo $singleRow['name']; ?>
        <br>
        <br>
      Due Date : <?php echo $singleRow['duedate']; ?>
        <br>
        <br>
     Bill No : <?php echo $singleRow['id']; ?>
        <br>
        <br>
      Phone : <?php echo $singleRow['phone']; ?>
        <BR>
        <br>
        
           <div class="container">
            <?php 
            
            echo $singleRow['details']; 
            
            ?>
           
            <br>
            <?php 
            echo $singleRow['details2']; 
            ?>
             
            <br>
            <?php
            echo $singleRow['details3']; 
            ?>
             <br>
           
            <?php
            echo $singleRow['details4']; 
            ?>
            
            <?php
            echo $singleRow['details5']; 
            ?>
             <br>
            <br>
            <?php 
            echo $singleRow['details6'];
            ?>
             <br>
            <br>
            <?php 
            echo $singleRow['details7'];
            ?>
             <br>
            
            <?php 
            echo $singleRow['details8']; 
            ?>
             <br>
          
            <?php
            echo $singleRow['details9'];
            ?>
             <br>
           
            <?php
            echo $singleRow['details10']; 
            ?>
             <br>
           
            <?php
            echo $singleRow['details11'];
            ?>
             <br>
            
            <?php
            echo $singleRow['details12'];
            ?>
             <br>
            <br>
            <?php
            echo $singleRow['details13'];
            ?>
             <br>
            
            <?php 
            echo $singleRow['details14'];
            ?>
            
            <br>
            <?php
            echo $singleRow['details15']; 
            ?>
             <br>

            <?php 
            echo $singleRow['details16']; 
            ?>
            
            <br>
            <?php 
            echo $singleRow['details17']; 
            ?>
             
            <br>
            <?php 
            echo $singleRow['details18'];
            ?>
            
            <br>
            <?php
            echo $singleRow['details19']; 
            ?>
             
            <br>
            <?php
            echo $singleRow['details20'];
            ?>
             <br>
            
                
        </div>
          
      </div>
      
    </div>
    
      <hr>
  
  
</div>
  

</body>

</html>



