<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>Document</title>
   <script src="script.js"></script>
  
</head>
<body>

<?php 
 
session_start();

include("../controller/component.php");
include("../model/db.php");

if(isset($_POST['add'])){

  //print_r($_POST['product_id']);
  
  if(isset($_SESSION['cart'])){
     
     $sss= array_column($_SESSION['cart'],"product_id");
     
     if(in_array($_POST['product_id'],$sss)){
  
  echo "<script>alert('item is already added') </script>";
  //echo "<script>window.location='index.php'</script>";
     }else{
  $how_many_element = count($_SESSION['cart']);
  $item_array = array(
  
      'product_id'=>$_POST['product_id']
  );
  $_SESSION['cart'][$how_many_element]=$item_array;
  //print_r($_SESSION['cart']);
  
     }
  
  }else{
  
      $item_array = array(
  
          'product_id'=>$_POST['product_id']
      );
  
      $_SESSION['cart'][0]= $item_array;
     // print_r($_SESSION['cart']);
  }
  }


?>
   
   </body>
</html>


 <!DOCTYPE html>
 <html lang="en">
 <head>

    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
      <!-- Navbar -->
      <div class="navbar">
        <img src="upload/paw-logo.png" class="logo" />
        <nav>
          <ul>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="updateCustomer.php">Edit Profile</a></li>
            <li><a href="index.php">Shop</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            <li><a href="notification.html">Notifications</a></li>
            <li><a href="../../Controllers/logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>
<?php 
include("../controller/header.php");

?>
 
 <fieldset style="border: 3px solid #333; padding: 10px; border-radius: 5px; background-color: #ecf0f1;">
    <legend style="color: #333; font-weight: bold;">FOOD ITEMS</legend>
    
    
<?php 
$con = connection();
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $product_name = $_POST['product_name']; 
  //  $product_price = $_POST['product_price']; 
    //$product_img = $_POST['product_img']; 

    
//}

//echo 'Date: '.date('d/m/Y'); 
//echo '<br>' ;
//date_default_timezone_set('Asia/Dhaka');
//echo 'Time: '.date('h:i:sa');
$sql = "SELECT * FROM ta";

 $result = mysqli_query($con,$sql);
 
   
   
 while($row = mysqli_fetch_assoc($result)){

    component($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);
}


    

//component("p1",3.5,"./upload/pic1.jpg");


?>

    </fieldset>

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
 </body>
 </html>
