<?php

session_start();

    include("connection.php");
    include("functions.php");
    $user_data=check_login($con);
    

    if($_SERVER['REQUEST_METHOD']=="POST")
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
            $query="insert into rides_data (roll_no,name,phone_no,car_name,car_no,area,price,start_time,seats) values ('$r','{$user_data['name']}','$p','$carname','$carno','$area','$price','$starttime','$seats')";
            mysqli_query($con,$query);
            echo "<script type='text/javascript'>alert('Ride Added Successfully!');
            window.location='rides.php';
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
  <title>UPLOAD RIDES</title>
  <meta charset="utf-8">
  <meta name="description" content="CBIT CAR POOL">
  <meta name="keyword" content="car pool">
  <meta name="website" content="cbit car pool website">
  <meta name="view port" content="width=device-width initial-scale=1.0">
  <link rel="shortcut icon" type="images/jpg" href="images/icon.jpg">
  <link rel="stylesheet" href="css/styles.css">
  <style>
    .container2 form {
			position: relative;
			z-index: 1;
			width: 60%;
			height: 550px;
			margin-left: 300px;
			text-align: center;
			background-color: transparent;
			background-image: url(images/31.png);
			background-repeat: none;
			background-size: cover;
			padding-top: 80px;
			margin-right: 500px;
		}
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
      background-color:transparent;
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
      cursor:pointer;
    }
    input[type='submit']:hover{
			color: black;
		}
    label
    {
        font-family:URW Chancery L, cursive;
			font-size: 25px;
			background-color: transparent;
			width: 220px;
			display: inline-block;
			text-align: right;
    }
    #upload{
			margin-right: 200px;
			margin-top: 10px;
			background-color: transparent;
		}
  </style>
</head>
<body>
  <div class="header">
		<nav>
	    <img id="img"src="images/LOGO.jpg" alt="logo">
	    <ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="rides.php">Rides</a></li>
			<li><a href="signin.php">SignIn</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="myaccount.php">MyAccount</a></li>
			<li><a href="logout.php">LogOut</a></li>
		</ul>
	    </nav>
	</div>
    <div class="container2">
      <form method="POST">
      <div id="upload">
        <label for="carname">CarName</label>
        <input type="text" name="carname" placeholder="carname">
        <label for="carno.">CarNo.</label>
        <input type="text" name="carno" placeholder="carno.">
        <label for="area">Area</label>
        <input type="text" name="area" placeholder="area">
        <label for="price">Price</label>
        <input type="number" name="price" placeholder="price">
        <label for="starttime">StartTime</label>
        <input type="text" name="starttime" placeholder="start time">
        <label for="no.of seats">No.of Seats</label>
        <input type="number" name="seats" placeholder="no.of seats available">
        <input type="submit" name="upload" value="Upload">
    </div>
    </form>
    </div>
    <p><img src="vcar.gif" width="640" height="480" style="padding-right: 120px;"></p>
</body>
</html>
