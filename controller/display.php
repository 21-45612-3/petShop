<?php
 include '../model/db.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users
    </title>
    <link rel="stylesheet" href="auth.css">

</head>
<body align="center">
<div class = "txtField">
        <button ><a href="../view/userReg.php">add user</a></button>
        <a href="../view/home.php">Back home</a><br>
       
        Search User:
        <input type="text" oninput="loade_data(this.value)" name="getName"/>
    </div>
    <table class="t d">
  <thead>
    <tr>
      <th scope="col">id </th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">operation</th>


    </tr>
  </thead>


  <tbody id= "table_data" >

  <?php
 
  $con= connection();
  $sql = "SELECT * FROM registration";
  $result=mysqli_query($con,$sql);
  if($result){
    while( $row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
   echo ' <tr>
   <th scope="row">'.$id.'</th>
   <td>'.$name.'</td>
   <td>'.$email.'</td>
   
   <td>
   <div class = "formControl">
   <button  class="button"><a href="delete.php?deleteid='.$id.' ">delete</a>
   </button>
   </div>
   </td>

 </tr>';

  }
}
  ?>
 
  </tbody>
</table>

<script> 
  function load_data(search){
    let xhr = new XMLHttpRequest();
    xhr.open("GET","search.php?search="+search, true);
    
    xhr.onprogress = function(){
        document.getElementById('table_data').innerHTML = `<div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>`;
      }
    xhr.onload =function(){
      document.getElementById('table_data').innerHTML = xhr.responseText;

  }
  xhr.send();

  }
 // load_data();
  /*
$(document).ready(function(){
  $('$getName').on("keyup",function(){
    var getName =$(this).val();
    $.ajax({
    method: 'POST',
    url:'search.php',
    data: {name:getName},
    success: function(response)
    {
      $("$showdata").html(response);
    }
    });
  });
});
*/
</script>
</body>
</html>