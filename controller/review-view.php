<?php

include("../model/db.php");
$con = connection();

$sql = "SELECT * FROM review";
$result = mysqli_query($con ,$sql);

//fetch data
$review = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($review);
?>