<?php
include("db.php");
$con = connection();
$cmntnewcount = $_POST['cmntnewcount'];
$sql = "SELECT * FROM comments LIMIT $cmntnewcount";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
      echo "<p>";
      echo $row['author'];
      echo "<br>";
      echo $row['message'];
      echo "</p>";

}

}else{
echo "There are no comments";
}
?>