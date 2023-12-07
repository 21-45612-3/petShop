<!DOCTYPE html>
<html>
  <head>
    <title>Cart</title>
    <style>
      .btn {
        border: none;
        background-color: #161a30;
        color: #fff;
        padding: 12px 18px;
        border-radius: 5px;
        font-size: 16px;
        position: fixed;
        top: 85px;
        right: 100px;
        float: right;
      }

      .btn:hover {
        cursor: pointer;
        background-color: #e3651d;
        transform: scale(1.1);
        transition: all 0.3s ease-in-out;
      }

      .content {
        height: 1200px;
      }
    </style>
  </head>
  <body>
    <form method="post" action="../view/cart.php">
      <button class="btn" type="submit" name="cart" value="cart">
      Cart       
        <?php
          // session_start(); 
          if(isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
              echo "$count";
          } else {
              echo "0";
          }
        ?>
      </button>
    </form>
    
  </body>
</html>
