<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM orders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);


?>
            


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="asset/fonts/fontstylesheet.css">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	


		<title>Invoice #<?php echo $singleRow['id']; ?> </title>

		<!-- Favicon -->
		<link rel="icon" href="assets/img/shantailers.jpeg" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
		
			
			@media print {
                #printbtn {
                    display :  none;
                }
            }
            
            
            .hrtag
            {
                border: 0;
                border-top: 6px solid black;
                opacity: 1;
                margin-left: 2px;
                width: 89%;
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
              margin-bottom: 16px;
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
            
           

		


		

		
		</style>
	</head>

	<body>
	     

	     
	     <div class="invoice-box">
	          
	         
	          <div class="container">
	              	     <button id ="printbtn" type="button" class="btn btn-danger"  onClick="window.print()">Print this page</button>

                  <div class="row">
                        <div class="col">
                          <img  src="assets/img/imageshan2.png" style="width: 260px;margin-left: 82px;margin-bottom: -100px;margin-top: -40px;">
                        </div>
                      
                  </div>
                  
            </div>
            

	        
	        <hr class="hrtag">
	        
	           <div class="container">
                  <div class="row">
                        <div class="col">
                          <p class="spana">Bill No  :  <?php echo $singleRow['id']; ?> </p>
                          <p class="spana">Customer :  <?php echo $singleRow['name']; ?></p>
                          <p class="spana">Details </p>
                        </div>
                        <div class="col">
                          <p class="spana">Date   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?php echo $singleRow['created_at']; ?></p>
                          <p class="spana">Phone  &nbsp; &nbsp; &nbsp;&nbsp;: 0<?php echo $singleRow['phone']; ?></p>
                          <p class="spana">Due Date &nbsp;: <?php echo $singleRow['duedate']; ?></p>
                          
                        </div>
                  </div>
                  
            </div>
	        
	        <div class="borderbox">
	            <div class="">
                  <div class="row">
                     <?php
                        $item = $singleRow['details'];
    
                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                        $item = $singleRow['details2'];
    
                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details2'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details3'];
        
                               if (empty($item)) {
                               }
                                   
                               else{
                                   echo $singleRow['details3'];
                                   echo "<br>";
                               }    
                        ?>
                        <?php
                            $item = $singleRow['details4'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details4'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details5'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details5'];
                               echo "<br>";
                           }    
                        ?>
                        
                        <?php
                            $item = $singleRow['details6'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details6'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details7'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details7'];
                               echo "<br>";
                           }    
                        ?>
                          <?php
                            $item = $singleRow['details8'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details8'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details9'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details9'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details10'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details10'];
                               echo "<br>";
                           }    
                        ?>
                    </div>
                    <div class="col">
                      <?php
                        $item = $singleRow['details11'];
    
                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details11'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                        $item = $singleRow['details12'];
    
                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details12'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details13'];
        
                               if (empty($item)) {
                               }
                                   
                               else{
                                   echo $singleRow['details13'];
                                   echo "<br>";
                               }    
                        ?>
                        <?php
                            $item = $singleRow['details14'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details14'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details15'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details15'];
                               echo "<br>";
                           }    
                        ?>
                        
                        <?php
                            $item = $singleRow['details16'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details16'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details17'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details17'];
                               echo "<br>";
                           }    
                        ?>
                          <?php
                            $item = $singleRow['details18'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details18'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details19'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details19'];
                               echo "<br>";
                           }    
                        ?>
                        <?php
                            $item = $singleRow['details20'];

                           if (empty($item)) {
                           }
                               
                           else{
                               echo $singleRow['details20'];
                               echo "<br>";
                           }    
                        ?>
                    </div>
                  </div>
                  
                </div>
	            
	        </div>
	        
	        <table style="width: 87%;">
                  <tr>
                    <td style="background: black;color: white;width:50%;" >Item</td>
                    <td style="text-align: right ; background: black;
    color: white;">Price</th>
                
                  </tr>
                  <tr>
                    <td>
                        <?php 
        
                         
                          
                            $item = $singleRow['item'];

                    
                            if (empty($item)) {
                                } else {
                                    echo $singleRow['item'];
                                    
                                       
                                            
                                    
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                        
                    </td>
                    <td  style="text-align: right;">
                          <?php 
        
                            $advance_amount = $singleRow['item_price'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo $singleRow['item_price'];
                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                        
                        </td>
                   
                  </tr>
                  <tr>
                    <td >
                        <?php 
        
                         
                          
                            $item = $singleRow['item2'];

                    
                            if (empty($item)) {
                                } else {
                                    echo $singleRow['item2'];
                                    
                                       
                                            
                                    
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                    </td>
                    <td style="text-align: right;">
                        <?php 
        
                            $advance_amount = $singleRow['item_price2'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo $singleRow['item_price2'];
                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                    </td>
                   
                  </tr>
                  
                   <tr>
                    <td></td>
 <td style="text-align: right;">  Total &nbsp; &nbsp; &nbsp;&nbsp;:
                    <?php 
					
					 $label1 = $singleRow['item_price'];
					 $label2 = $singleRow['item_price2'];
					
					 
					 
					 
					 $sum = $label1 + $label2;
					echo $sum; 
					
					
					?>
                    
                    </td>
                   
                  </tr>
            
                   <tr>
                    <td></td>
                    <td style="text-align: right;">Payment&nbsp;: &nbsp;&nbsp;<?php echo $singleRow['advance_amount'] ?> </td>
                 
                  </tr>
                  
                  <tr>
                    <td></td>
                    <td style="text-align: right;" >Balance  &nbsp;&nbsp;:  
                    <?php 
					
					 $label1 = $singleRow['item_price'];
					 $label2 = $singleRow['item_price2'];
					
					 $balance =$singleRow['advance_amount']; 
					 
					 
					 $sum = $label1 + $label2  - $balance;
					echo $sum; 
					
					
					?>
                    
                    </td>
                   
                  </tr>
            </table>
	        
	        <br>
             <p style="margin-left: 76px;";>This Invoice is Valid for Three Days Only</p>
             <br>
             <h4 style="margin-left: 85px;";>Thank You and Come again!</h4>
	         
	         
	     </div>
	     
	     
	
	</body>
</html>