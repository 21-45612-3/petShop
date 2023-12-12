
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


include("../model/db.php");
$con = connection();
session_start();


if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['repeat_password'] = $_POST['repeat_password'];
}
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'] ;
    $repreat_password = $_SESSION['repeat_password'] ;
    $same_email_sql = "SELECT * FROM users where email = '$email'";
    $same_email = mysqli_query($con , $same_email_sql);



    if($name == "" || $password == "" || $email == "" || $repreat_password == ""){
        //echo "<script>alert('All Fields are Required') </script>";
        echo "<script>window.location='../view/registration.html'</script>";
    }elseif(strlen($password)<8){

    
        //echo "<script>alert('Password Must Be At Least 8') </script>";
        echo "<script>window.location='../view/registration.html'</script>";
    

    }elseif($password!=$repreat_password){
        //echo "<script>alert('Password Must Be Same As Confirmed Password') </script>";
       echo "<script>window.location='../view/registration.html'</script>";
    }elseif(!alphabetic($name)){
       // echo "<script>alert('Name Must be Letters Only') </script>";
        echo "<script>window.location='../view/registration.html'</script>";
    }elseif(mysqli_num_rows($same_email)>0){
        echo "<script>alert('This Email has already taken') </script>";
        echo "<script>window.location='../view/registration.html'</script>";
    }else{
        
    //pass all the condition , now set them in database

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($con, $sql);
    
    echo "<script>alert('Registration Successful') </script>";
    echo "<script>window.location='../view/registration.html'</script>";
        echo " all infor are correct";
    }
    



function alphabetic($input) {
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if (!(($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z'))) {
            return false;
        }
    }
    return true;
}



?>

</body>
</html>