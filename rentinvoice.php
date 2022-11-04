<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);


?>
            


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="asset/fonts/fontstylesheet.css">
		<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	


		<title>Invoice #<?php echo $singleRow['id']; ?> </title>

		<!-- Favicon -->
		<link rel="icon" href="assets/newshan.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
		
			
			@media print {
                #printbtn {
                    display :  none;
                }
                
                .tdclass
                {
                  background: black !important;
                  color: white;
                }
                
                .tdclass2
                {
                  text-align: right;
                  background: black !important;
                  color: white;
                }
                
                
            }
            
            
             .tdclass
                {
                  background: black !important;
                  color: white;
                }
                
                .tdclass2
                {
                  text-align: right;
                  background: black !important;
                  color: white;
                }
            
            .hrtag
            {
                border: 0;
                border-top: 6px solid black;
                opacity: 1;
                margin-left: 2px;
                width: 94%;
                margin-top: 7px;
            }
            
            .spana
            {
                font-size:12px;
            }
            
            .borderbox
            {
               
              border: 2px solid black;
              border-radius: 6px;
              padding: 23px;
              margin: 1px;
              margin-bottom: 15px;
              width: 86%;
              padding-top: 35px;
               
            }
            
       
            
            body
            {
                padding: 1px;
                font-family: 'adriannaextrabold';
                font-weight:800;
                

                
            }
            
            table  td{
              
                border: 1px solid;
               
            }
            
            table tr{
                border:none;
            }


            .none
            {
              border:none !important
            }
            
           

		


		

		
		</style>
	</head>

	<body>
	       <div class="container">
	              	     <button id ="printbtn" type="button" class="btn btn-success"  onClick="window.print()">Print this page</button>
                       <?php echo "<a id ='printbtn' class='btn btn-primary' href=\"salesinvoice.php?id=$singleRow[id]\">Sales Invoice</a>";	?>

                           <?php echo "<a id ='printbtn' class='btn btn-primary' href=\"invoicedit.php?id=$singleRow[id]\">Edit</a>";	?>


                  <div class="row">
                        <div class="col">
                        </div>
                         <div class="col" style="margin-top: 27px;">
                         
                          
                        </div>
                  </div>
                  
            </div>
         <div class="container">
            <div class="row">
                <div class="col">
                <img src="assets/invoiceimage.png" style="width: 180px;">

                </div>
                <div class="col">
                  <span>Invoice #<?php echo $singleRow['id']; ?></span><br>
                  <span>Date: <?php echo $singleRow['created_at']; ?></span><br>
                  <span>Due Date:  <?php echo $singleRow['order_due']; ?></span>
                  <br>
                  <span>To: <?php echo $singleRow['customername']; ?></span>
                </div>
            </div>
  
        </div>
        
       
        
          
            <br>
            <div class="container">
               
  
        </div>
	     
	     <div class="invoice-box">
	          
	         
	         <table>
	             <tr>
	               <th class="tdclass" style="width:10%;">QTY</th>
                    <th class="tdclass" style="width:10%;">Item </th>
                    <th class="tdclass" style="width:10%;">Description</th>
                    <th class="tdclass" style="width:10%;">Discount</th>
                    <th class="tdclass" style="width:10%;">Amount</th>
                   

                  </tr>
	         
	            <?php
	            
	                 $productcode= $singleRow['productcode'];
	                 $productname= $singleRow['productname'];
	                 $quantity= $singleRow['quantity'];
	                 $price = $singleRow['price'];
	                 $total= $singleRow['total'];
	                 
	                  if (empty($productcode)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode']; "</td>";
                     echo "<td style='width:10%;'>"; 
                     echo $singleRow['productname']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                <?php
	            
	                 $productcode2= $singleRow['productcode2'];
	                 $productname2= $singleRow['productname2'];
	                 $quantity2= $singleRow['quantity2'];
	                 $price2 = $singleRow['price2'];
	                 $total2= $singleRow['total2'];
	                 
	                  if (empty($productcode2)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode2']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname2']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity2']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price2'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total2'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                
                <?php
	            
	                 $productcode3= $singleRow['productcode3'];
	                 $productname3= $singleRow['productname3'];
	                 $quantity3= $singleRow['quantity3'];
	                 $price3 = $singleRow['price3'];
	                 $total3= $singleRow['total3'];
	                 
	                  if (empty($productcode3)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode3']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname3']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity3']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price3'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total3'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                
                <?php
	            
	                 $productcode4= $singleRow['productcode4'];
	                 $productname4= $singleRow['productname4'];
	                 $quantity4= $singleRow['quantity4'];
	                 $price4 = $singleRow['price4'];
	                 $total4= $singleRow['total4'];
	                 
	                  if (empty($productcode4)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode4']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname4']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity4']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price4'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total4'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                
                <?php
	            
	                 $productcode5= $singleRow['productcode5'];
	                 $productname5= $singleRow['productname5'];
	                 $quantity5= $singleRow['quantity5'];
	                 $price5 = $singleRow['price5'];
	                 $total5= $singleRow['total5'];
	                 
	                  if (empty($productcode5)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode5']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname5']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity5']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price5'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total5'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                
              <?php
	            
	                 $productcode6= $singleRow['productcode6'];
	                 $productname6= $singleRow['productname6'];
	                 $quantity6= $singleRow['quantity6'];
	                 $price6 = $singleRow['price6'];
	                 $total6= $singleRow['total6'];
	                 
	                  if (empty($productcode6)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode6']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname6']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity6']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price6'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total6'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                
                <?php
	            
	                 $productcode7= $singleRow['productcode7'];
	                 $productname7= $singleRow['productname7'];
	                 $quantity7= $singleRow['quantity7'];
	                 $price7 = $singleRow['price7'];
	                 $total7= $singleRow['total7'];
	                 
	                  if (empty($productcode7)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode7']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname7']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity7']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price7'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total7'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                
                
                <?php
	            
	                 $productcode8= $singleRow['productcode8'];
	                 $productname8= $singleRow['productname8'];
	                 $quantity8= $singleRow['quantity8'];
	                 $price8 = $singleRow['price8'];
	                 $total8= $singleRow['total8'];
	                 
	                  if (empty($productcode8)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode8']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname8']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity8']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price8'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total8'];"</td>";
              echo  "</tr>";
                        }
                ?>
                
                <?php
	            
	                 $productcode9= $singleRow['productcode9'];
	                 $productname9= $singleRow['productname9'];
	                 $quantity9= $singleRow['quantity9'];
	                 $price9 = $singleRow['price9'];
	                 $total9= $singleRow['total9'];
	                 
	                  if (empty($productcode9)) {
                        } else {
	                 
                  echo "<tr>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['productcode9']; "</td>";
                     echo "<td style='width:50%;'>"; 
                     echo $singleRow['productname9']; "</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['quantity9']; "</td>";
                     echo "<td  style='width:10%;'>"; 
                     echo $singleRow['price9'];"</td>";
                     echo "<td style='width:10%;'>";
                     echo $singleRow['total9'];"</td>";
              echo  "</tr>";
                        }
                ?>

                <tr>
                  <td class="none"></td>
                  <td class="none"></td>
                  <td class="none"></td>
                  <td class="none">Total</td>
                  <td>LKR </td>
                  
                </tr>

                <tr>
                  <td class="none"></td>
                  <td class="none"></td>
                  <td class="none"></td>
                  <td class="none">Payment</td>
                  <td>LKR </td>
                  
                </tr>

                <tr>
                  <td class="none"></td>
                  <td class="none"></td>
                  <td class="none"></td>
                  <td class="none">Due Balance</td>
                  <td>LKR </td>
                  
                </tr>
                
	        </table>
	      
	       
	         
	     </div>
	    <br> 
	     <div class="footer">
 <span>If you have any questions concerning this invoice, use the following contact information </span><br>
 <span><strong>+94 312273904 | outfits.shan@gmail.com</strong></span><br>
 <span><strong>1057 Chilaw Road Daluwakotuwa, Kochichikade</strong></span>
 
 <br>
 <br>
 
 <img src="assets/invoicere.png" style="
    width: 590px;
">
 
 <!--<div style="border: 4px solid black;">-->
 <!--    <span><strong>Deposit Amount for a coat is Rs 2000/-</strong></span><br>-->
 <!--    <span><strong>A rent applies only for 3 days, and for extra days you should want to pay 200/- per day (Only for rentals)</strong></span><br>-->
    

 <!--</div>-->
 

 
<br>
<br>
  

             <span><strong>Thank You and Come again!</strong</span>
</div>

	</body>
</html>