<?php
include '../model/db.php';

if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];
    $con=connection();
    $sql="DELETE from registration where id=$id";
    $result= mysqli_query($con,$sql);
    if($result) {
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>