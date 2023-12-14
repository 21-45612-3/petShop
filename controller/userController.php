
<?php 
    session_start();
    include '../model/db.php';
    if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
   
    $pass = password_hash($password, PASSWORD_BCRYPT);
    if($name == "" || $password == "" || $email == "" ){
       echo"<script> alert('null credentials');</script>";
       echo "<script>window.location='../view/userReg.php'</script>";  
    }
    else if(strlen( $password )<= 4 ){
        echo "<span style= 'color:red;'>password should be more then 4</span>";
    }
      
     else {

        $user = ['name'=> $name, 'password'=> $password, 'email'=>$email];
        $_SESSION['user'] = $user;
        $con = connection();
        $sql2= "SELECT * from registration where name = '$name'";
        $result=mysqli_query($con,$sql2);
        
        if($result){
            $num= mysqli_num_rows($result);
        if($num>0){
            echo "user exists";
        }
            else{

               // $con = connection();
                $sql1 = "INSERT INTO registration(name,email,password)
                     VALUES('$name','$email','$password')";
        
                $status1 = mysqli_query($con,$sql1);
                header('location: display.php');
            
            if($status1 ){
                return true;
            }            
            else {return false;}
        }
    }
    }
}
?>