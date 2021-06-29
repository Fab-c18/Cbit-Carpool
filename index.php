<?php
session_start();

    include("connection.php");
    include("functions.php");

?>

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
	<!--<link rel="stylesheet" href="style.css">!-->
    <style>
     #para p{
			position: absolute;
			line-height: 2em;
	        box-sizing: content-box;
	        margin-top: 100px;
	        margin-left: 450px;
			float:right;
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
	<div class="container">
		<h1>GET ON A RIDE!</h1>
	    <a href="rides.php" class="btn">Rides</a>
	    <img src="images/0317car-.gif" width="100%" height="800px">
	</div>
	<div class="content">
		<h2 style="text-align:center;">CBIT CAR POOL SYSTEM</h2>
        <div id="para">
		<p>Carpooling (also car-sharing, ride-sharing and lift-sharing) is the sharing of car journeys so that more than one person travels in a car, and prevents the need for others to have to drive to a location themselves.</p>
			<p>By having more people using one vehicle, carpooling reduces each person's travel costs such as: fuel costs, tolls, and the stress of driving. Carpooling is also a more environmentally friendly and sustainable way to travel as sharing journeys reduces air pollution, carbon emissions, traffic congestion on the roads, and the need for parking spaces. Authorities often encourage carpooling, especially during periods of high pollution or high fuel prices. Car sharing is a good way to use up the full seating capacity of a car, which would otherwise remain unused if it were just the driver using the car.
			<a href="about.php">More Info -></a>
			</p>
        </div>
        	<img id="icon"src="images/37.png" alt="icon">
</body>
</html>