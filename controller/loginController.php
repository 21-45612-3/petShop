<?php 
    session_start();
    include '../model/db.php';
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];

    if($name == "" || $password == "" ){
        echo"<script> alert('null username or password!');</script>";
       echo "<script>window.location='../view/login.php'</script>";
    }
    else{
     
       $con = connection();
        $sql="SELECT  * FROM registration where name='$name'and password='$password'";
        $result = mysqli_query($con,$sql);
        if ($result){
            $num=mysqli_num_rows($result);
            if($num>0){
        $_SESSION['name']= $name;
        header("location: ../view/homeadmin.php");
        }
        else{
            echo"<script> alert('invalid credentials');</script>";
       echo "<script>window.location='../view/login.php'</script>";
         }
        }
    }
?>

<?php 


