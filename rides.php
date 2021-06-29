<!DOCTYPE html>
<html>
<head>
  <title>Cbit CarPool System</title>
  <meta charset="utf-8">
    <meta name="description" content="CBIT CAR POOL">
    <meta name="keyword" content="car pool">
    <meta name="website" content="cbit car pool website">
    <meta name="view port" content="width=device-width initial-scale=1.0">
   <!-- <meta http-equiv="refresh" content="3">!-->
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="shortcut icon" type="images/jpg" href="images/icon.jpg">
  <style>
    #rides{
      position: relative;
      z-index: 1;
      width: 40%;
      height: 420px;
      margin-left:350px;
      text-align: center;
      background-color: transparent;
      background-image: url(images/ride.png);
      background-repeat: none;
      background-size: cover;
      padding-top: 150px;
    }
    #rides img{
      width: 100%;
      height: 800px;
      position: relative;
      z-index: 1;
    }
    #rides a{
      margin-left: 100px;
      margin-right: 60px;
      margin-top: 20px;
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
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="myaccount.php">MyAccount</a></li>
      <li><a href="logout.php">LogOut</a></li>
    </ul>
      </nav>
  </div>
<div id="rides">
<a href="yourrides.php" class="btn">Your Rides</a>
<br>
<a href="uploadride.php" class="btn">Upload Ride</a>
<br>
<a href="viewrides.php" class="btn">View Availables Rides</a>
</div>
</body>
</html>
<?php

session_start();

    include("connection.php");
    include("functions.php");

    $roll_no = check_login($con);


?>