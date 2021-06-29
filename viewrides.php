<?php

session_start();

    include("connection.php");
    include("functions.php");

    $roll_no = check_login($con);
    $q="select * from rides_data";
    $r=mysqli_query($con,$q);


?>
<!DOCTYPE html>
<html>
<style>
table {
    
  border-collapse: collapse;
  width: 100%;
  border-spacing: 0;
  width:760px; line-height:40px;
   
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}


table tr:first-child th:first-child {
  border-top-left-radius: 6px;
}


table tr:first-child th:last-child {
  border-top-right-radius: 6px;
}

table tr:last-child td:first-child {
  border-bottom-left-radius: 6px;
}

table tr:last-child td:last-child {
  border-bottom-right-radius: 6px;
}

 


</style>
<head>
	<title>Available Rides:</title>
    <meta charset="utf-8">
    <meta name="description" content="CBIT CAR POOL">
    <meta name="keyword" content="car pool">
    <meta name="website" content="cbit car pool website">
    <meta name="view port" content="width=device-width initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="3">!-->
	<link rel="shortcut icon" type="images/jpg" href="images/icon.jpg">
	<link rel="stylesheet" href="css/styles.css">
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
    <br>
		
			<h1 style="color:green; text-align:center; font-family: 'Nunito', sans-serif;font-size:25px;" >Available Rides:</h1>
		
	</div>
	<center>
    <br>
    <table  >

    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Car Name</th>
        <th>Car Number</th>
        <th>Area</th>
        <th>Price</th>
        <th>Start Time</th>
        <th>Seats</th>
    </tr>
    <?php
        while($rows=mysqli_fetch_assoc($r))
        {
    ?>
            <tr>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['phone_no']; ?></td>
                <td><?php echo $rows['car_name']; ?></td>
                <td><?php echo $rows['car_no']; ?></td>
                <td><?php echo $rows['area']; ?></td>
                <td><?php echo $rows['price']; ?></td>
                <td><?php echo $rows['start_time']; ?></td>
                <td><?php echo $rows['seats']; ?></td>

            </tr>
    <?php
        }
    ?>

</table>
</center>
</div>


</body>
</html>
