<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>

<?php
include("../model/db.php");
$con = connection();
session_start();
if(isset($_POST['submit'])){

    $_COOKIE['email'] = $_POST['email'];
    $_COOKIE['password'] = $_POST['password'];

    setcookie('flag', 'true', time()+3600, '/');
    
    //header();
    }
    $email =  $_COOKIE['email'];
    $password =$_COOKIE['password'];
    
    //echo $email;
    $sql = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($con , $sql);
    $row = mysqli_fetch_assoc($result);

    if($password != "" || $email != ""){
      
        if(mysqli_num_rows($result)>0){
            if($password == $row["password"]){

                //hrader("Location: ../view/home.php");
                echo "<script>window.location='../view/home.php'</script>";
            }else{
                echo "<script>alert('Wrong Password') </script>";
                echo "<script>window.location='../view/login.html'</script>";

            }


        }else {
            echo "<script>alert('Email is not Registered') </script>";
            echo "<script>window.location='../view/login.html'</script>";
        }
    }else{

        echo "<script>alert('All Fields are Required') </script>";
        echo "<script>window.location='../view/login.html'</script>";
    }
?>
    
</body>
</html>