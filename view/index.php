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
    
 </head>
 <body>

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

echo 'Date: '.date('d/m/Y'); 
echo '<br>' ;
date_default_timezone_set('Asia/Dhaka');
echo 'Time: '.date('h:i:sa');
$sql = "SELECT * FROM ta";

 $result = mysqli_query($con,$sql);
 
   
   
 while($row = mysqli_fetch_assoc($result)){

    component($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);
}


    

//component("p1",3.5,"./upload/pic1.jpg");


?>

    </fieldset>

     
   

</body>
 </body>
 </html>
