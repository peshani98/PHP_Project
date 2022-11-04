<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM orders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);


?>

<!doctype html>
<head>
    <title> Invoice Print Cut  # <?php echo $singleRow['id']; ?></title>
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
			
			.border-darks
			{
			    width: 734px;
                height: 324px;
                border: 1px solid black;
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
    
    
 
    <div class="container">
  <div class="row">
    <div class="col">
           <?php 
        
            $details = $singleRow['details'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];


            $details12 = $singleRow['details102'];
            $details13 = $singleRow['details103'];
            $quantity = $singleRow['quantity'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Item : ' ;  ;  echo $singleRow["item"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details;
                        echo '<br>';
                        echo $details12;
                        echo '<br>';
                        echo $details13;
                                  
                    '</div>';
                    }
                    
                       echo "<br>";
                    echo "<br>";
        
        
         
        ?> 
        
      
    </div>

    <div class="col">
          <?php 
        
            $details2 = $singleRow['details2'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details22 = $singleRow['details202'];
            $details23 = $singleRow['details203'];
            $quantity2 = $singleRow['quantity2'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details2)) {
                    } else {
                
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Item : ' ;  ;  echo $singleRow["item2"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity2"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details2;
                        echo '<br>';
                
                        echo $details22;
                        echo '<br>';
                        echo $details23;
    
                    '</div>';
                    }
                    
                       echo "<br>";
                    echo "<br>";
        
        
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details3 = $singleRow['details3'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details32 = $singleRow['details302'];
            $details33 = $singleRow['details303'];
            $quantity3 = $singleRow['quantity3'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details3)) {
                    } else {
                    
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Item : ' ;  ;  echo $singleRow["item3"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity3"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details3;
                        echo '<br>';
                        echo $details32;
                        echo '<br>';
                        echo $details33;

                    '</div>';
                    }
        
         
        ?> 
        
      
    </div>
    
    <div class="col">
        <?php 
        
            $details4 = $singleRow['details4'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details42 = $singleRow['details402'];
            $details43 = $singleRow['details403'];
            $quantity4 = $singleRow['quantity4'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details4)) {
                    } else {
                     
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Item : ' ;  ;  echo $singleRow["item4"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity4"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details4;
                        echo '<br>';
                        echo $details42;
                        echo '<br>';
                        echo $details43;

                    '</div>';
                    }
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details5 = $singleRow['details5'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details52 = $singleRow['details502'];
            $details53 = $singleRow['details503'];
            $quantity5 = $singleRow['quantity5'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details5)) {
                    } else {
                    
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Item : ' ;  ;  echo $singleRow["item5"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity5"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details5;
                        echo '<br>';
                        echo $details52;
                        echo '<br>';
                        echo $details53;
          
                    '</div>';
                    }
                    
                       echo "<br>";
                    echo "<br>";
        
        
         
        ?> 
        
      
    </div>
  
    <div class="col">
        <?php 
        
            $details6 = $singleRow['details6'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details62 = $singleRow['details602'];
            $details63 = $singleRow['details603'];
            $quantity6 = $singleRow['quantity6'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details6)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity6"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details6;
                        echo '<br>';
                        echo $details62;
                        echo '<br>';
                        echo $details63;
                    '</div>';
                    }
                    
                  
        
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details7 = $singleRow['details7'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details72 = $singleRow['details702'];
            $details73 = $singleRow['details703'];
            $quantity7 = $singleRow['quantity7'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details7)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity7"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details7;
                        echo '<br>';
                        echo $details72;
                        echo '<br>';
                        echo $details73;


                    '</div>';
                    }
                 
        
        
         
        ?> 
        
      
    </div>

    <div class="col">
        <?php 
        
            $details8 = $singleRow['details8'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details82 = $singleRow['details802'];
            $details83 = $singleRow['details803'];
            $quantity8 = $singleRow['quantity8'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details8)) {
                    } else {
                   
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity8"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details8;
                        echo '<br>';
                        echo $details82;
                        echo '<br>';
                        echo $details83;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                    
        
         
        ?> 
            
  </div>
  

    <div class="col">
        <?php 
        
            $details9 = $singleRow['details9'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details92 = $singleRow['details902'];
            $details93 = $singleRow['details903'];
            $quantity9 = $singleRow['quantity9'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details9)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity9"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details9;
                        echo '<br>';
                        echo $details92;
                        echo '<br>';
                        echo $details93;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                     
        
        
         
        ?> 
        
      
    </div>

    <div class="col">
        <?php 
        
            $details10 = $singleRow['details10'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details102 = $singleRow['details1002'];
            $details103 = $singleRow['details1003'];
            $quantity10 = $singleRow['quantity10'];

            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details10)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Quantity : ' ;  echo $singleRow["quantity10"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details10;
                        echo '<br>';
                        echo $details102;
                        echo '<br>';
                        echo $details103;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
        
              
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details11 = $singleRow['details11'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details112 = $singleRow['details1102'];
            $details113 = $singleRow['details1103'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details11)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details11;
                        echo '<br>';
                        echo $details112;
                        echo '<br>';
                        echo $details113;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                  
        
        
         
        ?> 
        
      
    </div>
    
    <div class="col">
        <?php 
        
            $details4 = $singleRow['details12'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details122 = $singleRow['details1202'];
            $details123 = $singleRow['details1203'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details4)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details12;
                        echo '<br>';
                        echo $details122;
                        echo '<br>';
                        echo $details123;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                  
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details3 = $singleRow['details13'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details132 = $singleRow['details1302'];
            $details133 = $singleRow['details1303'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details3)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details13;
                        echo '<br>';
                        echo $details132;
                        echo '<br>';
                        echo $details133;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                   
        
        
         
        ?> 
        
      
    </div>
   
    <div class="col">
        <?php 
        
            $details4 = $singleRow['details14'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details142 = $singleRow['details1402'];
            $details143 = $singleRow['details1403'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details14)) {
                    } else {
                
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details14;
                        echo '<br>';
                        echo $details142;
                        echo '<br>';
                        echo $details143;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                 
        
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details3 = $singleRow['details15'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details152 = $singleRow['details1502'];
            $details153 = $singleRow['details1503'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details15)) {
                    } else {
                     
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details15;
                        echo '<br>';
                        echo $details152;
                        echo '<br>';
                        echo $details153;
                    
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                   
        
        
         
        ?> 
        
      
    </div>

    <div class="col">
        <?php 
        
            $details4 = $singleRow['details16'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details162 = $singleRow['details1602'];
            $details163 = $singleRow['details1603'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details16)) {
                    } else {
                     
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details16;
                        echo '<br>';
                        echo $details162;
                        echo '<br>';
                        echo $details163;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                    
                    
                    
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details5 = $singleRow['details17'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details172 = $singleRow['details1702'];
            $details173 = $singleRow['details1703'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details17)) {
                    } else {
                   
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details17;
                        echo '<br>';
                        echo $details172;
                        echo '<br>';
                        echo $details173;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                 
        
         
        ?> 
        
      
    </div>
   
    <div class="col">
        <?php 
        
            $details6 = $singleRow['details18'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details182 = $singleRow['details1802'];
            $details183 = $singleRow['details1803'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details18)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details18;
                        echo '<br>';
                        echo $details182;
                        echo '<br>';
                        echo $details183;
                    
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                    
        
         
        ?> 
            
  </div>

    <div class="col">
        <?php 
        
            $details7 = $singleRow['details19'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details92 = $singleRow['details1902'];
            $details93 = $singleRow['details1903'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details19)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details19;
                        echo '<br>';
                        echo $details192;
                        echo '<br>';
                        echo $details193;
                        
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                    
        
         
        ?> 
        
      
    </div>
  
    <div class="col">
        <?php 
        
            $details4 = $singleRow['details20'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $details202 = $singleRow['details2002'];
            $details203 = $singleRow['details2003'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details20)) {
                    } else {
                     
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details20;
                        echo '<br>';
                        echo $details202;
                        echo '<br>';
                        echo $details203;
                    
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                   
        
         
        ?> 
            
  </div>
   
    <div class="col">
        <?php 
        
            $details9 = $singleRow['details9'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details9)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details9;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                    
        
        
         
        ?> 
        
      
    </div>
     
    <div class="col">
        <?php 
        
            $details10 = $singleRow['details10'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details10)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details10;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                   
        
        
         
        ?> 
            
  </div>
  

  
   
 

  



 
    <div class="col">
        <?php 
        
            $details11 = $singleRow['details11'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details11)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details11;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                      
        
        
         
        ?> 
        
      
    </div>
 
    <div class="col">
        <?php 
        
            $details12 = $singleRow['details12'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details12)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details12;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                    
                   
        
        
         
        ?> 
            
  </div>
  
  
 

    <div class="col">
        <?php 
        
            $details13 = $singleRow['details13'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details13)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details13;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                   
        
        
         
        ?> 
        
      
    </div>
     
    <div class="col">
        <?php 
        
            $details14 = $singleRow['details14'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details14)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details14;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
        
         
        ?> 
            
  </div>
  
 
    <div class="col">
        <?php 
        
            $details15 = $singleRow['details15'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details15)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details15;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
        
         
        ?> 
        
      
    </div>
   
    <div class="col">
        <?php 
        
            $details16 = $singleRow['details16'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details16)) {
                    } else {
                        
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details16;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
        
         
        ?> 
            
  </div>
  
 
    <div class="col">
        <?php 
        
            $details17 = $singleRow['details17'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details17)) {
                    } else {
                       
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details17;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
                 
        
         
        ?> 
        
      
    </div>
   
    <div class="col">
        <?php 
        
            $details18 = $singleRow['details18'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details18)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details18;
                                  
                    '</div>';
                    
                    echo '<br>';
                        echo '<br>';
                    }
                    
                  
        
        
         
        ?> 
            
  </div>
  
  
    <div class="col">
        <?php 
        
            $details19 = $singleRow['details19'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details19)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details19;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
          
        
         
        ?> 
        
      
    </div>
   
    <div class="col">
        <?php 
        
            $details20 = $singleRow['details20'];
            $name = $singleRow['name'];
            $phone = $singleRow['phone'];
            $duedate = $singleRow['duedate'];
            $idid = $singleRow['id'];
                    
                    
                if (empty($details20)) {
                    } else {
                      
                        echo '<div class="col">';
                                
                        echo '<div class="invoice-box">';
                               
                        echo 'Name : ' ;  ; echo $singleRow["name"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Phone : ' ;  ; echo $singleRow["phone"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Due Date : ' ;  echo $singleRow["duedate"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Bill No : ' ;  echo $singleRow["id"];
                        echo '<br>';
                        echo '<br>';
                        echo 'Payment : ' ;  ;
                        echo '<br>';
                        echo '<br>';
                           
                                
                        echo $details20;
                                  
                    '</div>';
                    echo '<br>';
                        echo '<br>';
                    }
            
        
         
        ?> 
            
  </div>
  
  
    
 
  



 


 


   
  

  
 
    
    
    
   
      
  

</body>

</html>



