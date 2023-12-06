
<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
</head>
<body>

<form method="post" action="../view/cart.php">
    
<button type="submit" name="cart" value="cart" style="background-color: #bcbcbc;  color:white;  padding: 10px 15px; border: 3px solid #333; border-radius: 5px; cursor: pointer; font-size: 16px;">cart
<?php
 // session_start(); 
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo "$count";
}else{
    echo "0";
}

?>
</button>
<?php echo 'Date: '.date('d/m/Y'); ?>
</form>

</body>
</html>