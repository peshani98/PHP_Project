<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

require "./vendor/autoload.php";
use Zxing\QrReader;

//fetching data in descending order (lastest entry first)
$sql = "SELECT * FROM rentorders WHERE code='" . $_GET["code"] . "'";

$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_assoc($result);

$text = $qrcode->text();

echo $text;

?>

                                       


<div class="container">
   <form action="" method="GET">
        <label>Enter Code</label>
        <br>
        <br>
        <input type="text" class="form-control"name="code" placeholder="Scan SKU Code" required value="<?php if(isset($_GET['name'])){ echo $_GET['id']; } ?>">
        <br>
        <input type="submit" class="btn btn-success" value="Check">
        <br>
    </form>
    
    
                              
                        
                                
              </tbody>
      <div class="container p-3 my-3 bg-dark text-white">
          ID Number : <?php echo $singleRow['id']; ?>
          <br>
          <br>
          Customer Name : <?php echo $singleRow['customername']; ?>
          <br>
          <br>
          Product Name :<?php echo $singleRow['prodname']; ?>
          <br>
          
          <br>
          
      </div>
      
      <form action="stockadd.php" method="POST">
          <H3>Want to Add Stock</H3>
          <input type="submit" class="btn btn-success" value="Add To Stock">
      </form>

</div>