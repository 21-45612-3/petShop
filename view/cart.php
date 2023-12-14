<?php 

session_start();
include("../controller/component.php");
include("../model/db.php");
 if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){

        foreach($_SESSION['cart'] as $key=>$value){

            if($value["product_id"]==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('product has been removed')</script>";
                echo "<script>window.location='cart.php'</script>";
            }
        }
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Cart</title>
    <link rel="stylesheet" href="./assets/style.css" />
</head>
<body>
<div class="container">
      <!-- Navbar -->
      <div class="navbar">
        <img src="./assets/upload/paw-logo.png" class="logo" />
        <nav>
          <ul>
          <li><a href="index.php">Go Back</a></li>
          <li><a href="home.php">Home</a></li>
            
            <li><a href="../controller/logout.php">Logout</a></li>
           
          </ul>
        </nav>
      </div>
    </div>
 </br>
 <h1>MY CART</h1> <hr> </br>
 
 <fieldset  style="float: left; width: 50%; margin: 10px; padding: 10px; border: 2px solid #ccc; border-radius: 5px; background-color: #ecf0f1; max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px; margin-bottom: 40px; ">
  <legend style="color: #333; font-weight: bold;">ITEMS</legend>
 <?php
 
 $con = connection();
 $total = 0;
 if(isset($_SESSION['cart'])){

    $product_id = array_column($_SESSION['cart'],'product_id');
$sql = "SELECT * FROM ta";

 $result = mysqli_query($con,$sql);
 while($row = mysqli_fetch_assoc($result)){
    foreach($product_id as $id){
            if($row['id'] == $id){
            cartITEMS($row['product_img'],$row['product_name'],$row['product_price'],$row['id']);
                $total = $total + (float)$row['product_price'];
        }
    }
}
 }else{

echo "<h5>cart is empty!</h5>";
 }
?>
</fieldset>

<fieldset style="float: center; width: 40%; margin: 10px; padding: 10px; border: 2px solid #ccc; border-radius: 5px; background-color: #ecf0f1; max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px; margin-bottom: 40px; ">
  <legend style="color: #333; font-weight: bold;">Order Details</legend>
     
 <h5 style="text-align: center;">Paw It Forward Is Always</h5>
 <h5 style="text-align: center;">At Your Service</h5>
 <h5 style="text-align: center;">Since 2023</h5>
 <br>
 <br>
 
 <h5 style="text-align: left;">Date: <?php echo date('d/m/Y');?> </h5> 
 <h5 style="text-align: left;">Time: <?php 
 date_default_timezone_set('Asia/Dhaka');
 echo date('h:i:sa');?></h5>
 <h5 style="text-align: left;">Host: Sadiah</h5>
 <h5 style="text-align: left;">Order No: 101</h5> <br>

 <?php
 if(isset($_SESSION['cart'])){

    $count = count($_SESSION['cart']);
    echo "<h5 style=\"text-align: left;\">Total Items : $count</h5>";


    echo "<h5>price of $count items =  $$total</h5>";
    
 }else {
    echo "<h5>price (0 items)</h5>";
 }
 ?>
 
 <hr>
 <br>
 <h5>amount payable $<?php echo $total;?></h5> 

<br>
 <h5 style="text-align: center;">Thank you For shopping </h5>
 <h5 style="text-align: center;">With us</h5>
 
 <form action="orderconfirm.html" style="text-align: center;">
    <input type="submit" name="submit" value="Confirm" style="text-align: center;">
</form>
<br>
 </fieldset> 
 <div style="clear: both;"></div>
 <!-- Footer -->
 <div class="footer">
        <p class="container"> © 2023 Paw It Forward. All rights reserved.</p>
        
        <div class="container footer-content">
            <div class="quickLinks">
                <ul class="">
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="help.html">Help/FAQ</a></li>
                </ul>
            </div>
            <div class="contactUs">
                <p style="color: #fff; margin-bottom: 30px; margin-top: -20px;">Contact Us</p>
                <ul>
                    <li>Phone: +880 154 768521</li>
                    <li>Email: pawitforward@gmail.com </li>
                    <li>Website: www.pawitforward.com </li>
                </ul>
        </div>
    </div>

</body>
</html>