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
		<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	


		<title>Invoice #<?php echo $singleRow['id']; ?> </title>

		<!-- Favicon -->
		<link rel="icon" href="assets/img/shantailers.jpeg" type="image/x-icon" />

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
            
           

		


		

		
		</style>
	</head>

	<body>
	     

	     
	     <div class="invoice-box">
	          
	         
	          <div class="container">
	              	     <button id ="printbtn" type="button" class="btn btn-danger"  onClick="window.print()">Print this page</button>

                  <div class="row">
                        <div class="col">
                          <img src="assets/img/shantailers.jpeg" style="width: 180px;">
                        </div>
                         <div class="col" style="margin-top: 27px;">
                          <span class="spana">No 1059 DALUWAKOTUWA, KOCHCHIKADE</span><br>
                          <span class="spana">TEL 0777892087 / 0312273894</span><br>
                          <span class="spana">EMAIL: TAILORSSHAN455@GMAIL.COM</span>
                          
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
                          <p class="spana">Phone  &nbsp; &nbsp; &nbsp;&nbsp;: +<?php echo $singleRow['phone']; ?></p>
                          <p class="spana">Due Date &nbsp;: <?php echo $singleRow['duedate']; ?></p>
                          
                        </div>
                  </div>
                  
            </div>

	        
	        <table style="width: 86%;">
                  <tr>
                    <td class="tdclass" style="width:50%;">Item</td>
                  
                    <td class="tdclass" style="width:20%;">Price</td>
                   

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                     echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                      
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price'];
                                    
                                    echo "</td>";
 
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                        
                        
                        

                  </tr>
                  
                 
                        <?php 
        
                          
                            $item = $singleRow['item2'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item2'];
                                    
                                       
                                    echo "</td>";
      
                                    
                                              
                                '</div>';
                                }
        
                        ?> 
                        
                   
                        
                  
                        <?php 
        
                            $advance_amount = $singleRow['item_price2'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price2'];
                                    echo "</td>";

                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        


                  </tr>
                  
                   <tr>
                       
                       
                    <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item3'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item3']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                  
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price3'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price3'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item4'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item4']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price4'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price4'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                     
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item5'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item5']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        

                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price5'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price5'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        

                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item6'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item6']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                   
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price6'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price6'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item7'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item7']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                   
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price7'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price7'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                         
                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                         
                          
                            $item = $singleRow['item8'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";
                                    echo $singleRow['item8']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                  
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price8'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price8'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        

                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item9'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item9']  ;
                                    
                                    echo "<br>";
                                       
                                    echo "</td>";
     
                                    
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                   
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price9'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price9'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                     
                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item10'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item10']  ;
                                    
                                    echo "<br>";
                                       
                                    echo "</td>";
    
                                    
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                  
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price10'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price10'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?>
                        
                          
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item11'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item11']  ;
                                    
                                    echo "<br>";
                                       
                                    echo "</td>";
       
                                    
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                  
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price11'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price11'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                     
                        
                        

                  </tr>
                  
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item12'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item12']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    
                                   echo "</td>";
         
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price12'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price12'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        

                        
                        

                  </tr>
                  
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item13'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item13']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                   
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price13'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price13'];
                                    echo "</td>";

                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        

                        

                  </tr>
                  
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item14'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item14']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price14'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price14'];
                                    
                                    echo "</td>";

                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 

                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item15'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item15']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price15'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price15'];
                                    
                                    echo "</td>";

                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                           
                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item16'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item16']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                  
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price16'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price16'];
                                    
                                    echo "</td>";

                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item17'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item17']  ;
                                    
                                    echo "<br>";
                                       
                                    echo "</td>";
       
                                    
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                  
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price17'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price17'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?>
                        

                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item18'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item18']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                      
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price18'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price18'];
                                    
                                    echo "</td>";

                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        

                        
                        
                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item19'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item19']  ;
                                    
                                    echo "<br>";
                                       
                                    echo "</td>";
    
                                    
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                        
                
                        
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price19'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price19'];
                                    
                                    echo "</td>";

                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        

                        
                        

                  </tr>
                  <tr>
                    
                        <?php 
        
                          
                            $item = $singleRow['item20'];

                    
                            if (empty($item)) {
                                } else {
                                    echo "<td>";

                                    echo $singleRow['item20']  ;
                                    
                                    echo "<br>";
                                       
                                            
                                    echo "</td>";

                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                        
                    
                          <?php 
        
                            $advance_amount = $singleRow['item_price20'];
                            
                    
                    
                            if (empty($advance_amount)) {
                                } else {
                                    echo "<td style='text-align: right;'>";

                                    echo $singleRow['item_price20'];
                                    echo "</td>";

                                    
                                       
                                            
                                  
                                              
                                '</div>';
                                }
        
         
                        ?> 
                        
                       
                        
                        
                        

                  </tr>
                    <td></td>
                        <td style="text-align: right;">  Total &nbsp; &nbsp; &nbsp;&nbsp;:
                    <?php 
					
					 $label1 = $singleRow['item_price'];
					 $label2 = $singleRow['item_price2'];
					 $label3 = $singleRow['item_price3'];
					 $label4 = $singleRow['item_price4'];
					 $label5 = $singleRow['item_price5'];
					 $label6 = $singleRow['item_price6'];
					 $label7 = $singleRow['item_price7'];
					 $label8 = $singleRow['item_price8'];
					 $label9 = $singleRow['item_price9'];
					 $label10 = $singleRow['item_price10'];
					 $label11 = $singleRow['item_price11'];
					 $label12 = $singleRow['item_price12'];
					 $label13 = $singleRow['item_price13'];
					 $label14 = $singleRow['item_price14'];
					 $label15 = $singleRow['item_price15'];
					 $label16 = $singleRow['item_price16'];
					 $label17 = $singleRow['item_price17'];
					 $label18 = $singleRow['item_price18'];
					 $label19 = $singleRow['item_price19'];
					 $label20 = $singleRow['item_price20'];
					 
					 
					 
					$sum = $label1 + $label2 + $label3  + $label4 + $label5 + $label6  + $label7 + $label8 + $label9 + $label10 + $label11 + $label12 + $label13 + $label14 + $label15 + $label16 + $label17  + $label18 + $label19 + $labe20 ;

					echo $sum; 
					
					
					?>
                    
                    </td>
                   
                  </tr>
            
                   <tr>
                    <td></td>
                    <td style="text-align: right;">
                        
                        Payment&nbsp;: &nbsp;&nbsp;<?php echo $singleRow['advance_amount'] ?>
                        
                      
                 
                  </tr>
                  
                  <tr>
                    <td></td>
                    <td style="text-align: right;" >Balance  &nbsp;&nbsp;:  
                    <?php 
					
					 $label1 = $singleRow['item_price'];
					 $label2 = $singleRow['item_price2'];
					 $label3 = $singleRow['item_price3'];
					 $label4 = $singleRow['item_price4'];
					 $label5 = $singleRow['item_price5'];
					 $label6 = $singleRow['item_price6'];
					 $label7 = $singleRow['item_price7'];
					 $label8 = $singleRow['item_price8'];
					 $label9 = $singleRow['item_price9'];
					 $label10 = $singleRow['item_price10'];
					 $label11 = $singleRow['item_price11'];
					 $label12 = $singleRow['item_price12'];
					 $label13 = $singleRow['item_price13'];
					 $label14 = $singleRow['item_price14'];
					 $label15 = $singleRow['item_price15'];
					 $label16 = $singleRow['item_price16'];
					 $label17 = $singleRow['item_price17'];
					 $label18 = $singleRow['item_price18'];
					 $label19 = $singleRow['item_price19'];
					 $label20 = $singleRow['item_price20'];
					 $balance =$singleRow['advance_amount']; 
					 
					 
					$sum = $label1 + $label2 + $label3  + $label4 + $label5 + $label6  + $label7 + $label8 + $label9 + $label10 + $label11 + $label12 + $label13 + $label14 + $label15 + $label16 + $label17  + $label18 + $label19 + $labe20 - $balance ;

					echo $sum; 
					
					
					?>
                    
                    </td>
                   
                  </tr>
                  <tr>

                    
                   
                  </tr>
            </table>
	        
	       
	         
	     </div>
	    <br> 
	     <div class="footer">
 <p style="margin-left: 100px;font-size: 14px;bottom: 100;";>This Invoice is Valid for Three Months Only</p><br>
             <h4 style="margin-left: 150px;font-size: 14px;";>Thank You and Come again!</h4>
</div>
	
	</body>
</html>