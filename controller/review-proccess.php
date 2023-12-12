<?php
include("../model/db.php");
$con = connection();
if(isset($_POST['review'])){
    $review = mysqli_real_escape_string($con, $_POST['review']);
    echo $_POST['review'];
    $query = "INSERT INTO review(comment) VALUES('$review')";
    if(mysqli_query($con,$query)){
    echo 'review added...';

    }else{
        echo 'error!!!';
    }
}


?>
