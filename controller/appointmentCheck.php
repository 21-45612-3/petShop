
<?php 
    session_start();
    include '../model/db.php';
    if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
    $animal = $_REQUEST['animal'];
   
    if($name == "" || $date == "" || $animal == "" ){
       echo"<script> alert('invalid');</script>";
       echo "<script>window.location='../view/appointment.php'</script>";  
    }
     else {
        $con = connection();
               // $con = connection();
                $sql1 = "INSERT INTO appointment(name,date,animal)
                     VALUES('$name','$date','$animal')";
        
                $status1 = mysqli_query($con,$sql1);
                echo"<script> alert('successfully booked');</script>";
                echo "<script>window.location='../view/home.php'</script>";  

               // header('location: ../view/home.php');
            
            if($status1 ){
                return true;
            }            
            else {return false;}
        }
    }
    

?>