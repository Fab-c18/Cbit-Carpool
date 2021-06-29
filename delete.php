<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $r=$user_data['roll_no'];

    $ucname=$_GET['cname'];
    $ucno=$_GET['cno'];
    $uarea=$_GET['area'];
    $uprice=$_GET['price'];
    $utime=$_GET['time'];
    $useats=$_GET['seats'];

    
                    $query="delete from rides_data  where ( roll_no='$r' and car_name='$ucname' and car_no='$ucno' and area='$uarea' and start_time='$utime' and seats='$useats' )";
                    mysqli_query($con,$query);


                    echo " <script type='text/javascript'>alert('Ride Deleted Successfully!');
                    window.location='yourrides.php';
                    </script>";
                
                    
                    
                    die;
?>

