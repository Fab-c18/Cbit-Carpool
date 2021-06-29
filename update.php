<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    $ucname=$_GET['cname'];
    $ucno=$_GET['cno'];
    $uarea=$_GET['area'];
    $uprice=$_GET['price'];
    $utime=$_GET['time'];
    $useats=$_GET['seats'];
?>
<?php

        if(isset($_POST['submit']))
        {
                $carname=$_POST['carname'];
                $carno=$_POST['carno'];
                $area=$_POST['area'];
                $price=$_POST['price'];
                $starttime=$_POST['starttime'];
                $seats=$_POST['seats'];

                $name= "select name from UserInfo where roll_no = {$user_data['roll_no']} ";
                $phoneno="select phone_no from UserInfo where roll_no = {$user_data['roll_no']} ";
                $r=$user_data['roll_no'];
                $p=$user_data['phone_no'];
                


                if(!empty($carname) && !empty($carno) && !empty($area) && !empty($price) && !empty($starttime) && !empty($seats) )
                {
                    $query="UPDATE rides_data SET car_name='$carname',car_no='$carno',area='$area',price='$price',start_time='$starttime',seats='$seats' where ( roll_no='$r' and car_name='$ucname' and car_no='$ucno' and area='$uarea' and start_time='$utime' and seats='$useats' )";
                    mysqli_query($con,$query);


                    echo " <script type='text/javascript'>alert('Ride Updated Successfully!');
                    window.location='yourrides.php';
                    </script>";
                
                    
                    
                    die;

                }
                else
                {
                    if(empty($carname))
                    {
                        echo "Enter Car Name";
                    }
                    if(empty($carno))
                    {
                        echo "Enter Car Number";
                    }
                    if(empty($area))
                    {
                        echo "Enter Area";
                    }
                    if(empty($starttime))
                    {
                        echo "Enter Start TIME";
                    }
                    if(empty($price))
                    {
                        echo "Enter Price";
                    }
                    if(empty($seats))
                    {
                        echo "Enter Seats Available";
                    }

                }
                
        }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Ride</title>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    input[type='text'],
    input[type='password'],
    input[type='number']
    {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border:1px solid #ccc;
      border-radius: 15px;
      box-sizing: border-box;
    }
    input[type='submit']
    {
      width: 20%;
      background-color: #4caf50;
      color: white;
      padding: 14px 20px;
      margin: 20px 150px 50px 280px;
      border:none;
      border-radius: 4px;
      
    }
    label
    {
      width: 240px;
      display: inline-block;
      text-align: right;
    }
    .container
    {
      position: absolute;
      display: block;
      text-align: center;
      margin: 5% auto;
      top: 0;
      left: 0;
      padding: 150px;
      padding-right: 100px;
      padding-left:400px;
      width: 1000px;
      height: 200px;
    }
  </style>
</head>
<body>
  <div class="navbar">
      <div class="logo">
        <img src="logo.jpg" width="150" height="50">
      </div>
      <nav>
        <ul>
          <li><strong><a href="index.php">Home</a></strong></li>
          <li><strong><a href="rides.php">Rides</a></strong></li>
          <li><strong><a href="signin.php">Sign In</a></strong></li>
          <li><strong><a href="signup.php">Sign Up</a></strong></li>
          <li><strong><a href="contact.php">Contact</a></strong></li>
          <li><strong><a href="about.php">About</a></strong></li>
          <li><strong><a href="myaccount.php">My Account</a></strong></li>
        </ul>
      </nav>
    </div>
    <div class="container">
      <form method="POST">

      

        <label for="carname">CarName</label>
        <input type="text" value="<?php echo "$ucname" ?>" name="carname" placeholder="carname">
        <label for="carno.">CarNo.</label>
        <input type="text" value="<?php echo "$ucno" ?>" name="carno" placeholder="carno.">
        <label for="area">Area</label>
        <input type="text" value="<?php echo "$uarea" ?>" name="area" placeholder="area">
        <label for="price">Price</label>
        <input type="number" value="<?php echo "$uprice" ?>" name="price" placeholder="price">
        <label for="starttime">StartTime</label>
        <input type="text" value="<?php echo "$utime" ?>" name="starttime" placeholder="start time">
        <label for="no.of seats">No.of Seats</label>
        <input type="number" value="<?php echo "$useats" ?>" name="seats" placeholder="no.of seats available">
        <input type="submit" name="submit" value="Update">
      </form>
    </div>
    <p><img src="vcar.gif" width="640" height="480" style="padding-right: 120px;"></p>
</body>
</html>

