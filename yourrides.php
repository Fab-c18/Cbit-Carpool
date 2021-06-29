<?php

session_start();

    include("connection.php");
    include("functions.php");

    $user_data=check_login($con);
    $q="select * from rides_data where roll_no = {$user_data['roll_no']} ";
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

tr:nth-child(even){background-color: #FFFACD}
tr:nth-child(odd){background-color: #FFFFE0}

th {
  background-color: #FFA500;
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
	<title>Your Rides:</title>
    <meta charset="utf-8">
    <meta name="description" content="CBIT CAR POOL">
    <meta name="keyword" content="car pool">
    <meta name="website" content="cbit car pool website">
    <meta name="view port" content="width=device-width initial-scale=1.0">
     <!-- <meta http-equiv="refresh" content="3">!-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
</head>
<body>
    <div class="header">
		<nav>
	    <img id="img"src="images/LOGO.jpg" alt="logo">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="rides.php">Rides</a></li>
					<li><a href="signin.php">Sign In</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="myaccount.php">My Account</a></li>
				</ul>
			</nav>
		</div>
        <br>
        <br>
		
			<h1 style="color:green; text-align:center; font-family: 'Nunito', sans-serif;font-size:25px;" >Your Rides:</h1>
		
	</div>
	<center>
    <br>
    <table  >

    <tr>
        <th>Car Name</th>
        <th>Car Number</th>
        <th>Area</th>
        <th>Price</th>
        <th>Start Time</th>
        <th>Seats</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
        while($rows=mysqli_fetch_assoc($r))
        {
    
            echo '<tr>';
            echo    '<td>'  .$rows['car_name']. '</td>';
            echo    '<td>'  .$rows['car_no']. '</td>';
            echo    '<td>'  .$rows['area']. '</td>';
            echo    '<td>'  .$rows['price']. '</td>';
            echo    '<td>'  .$rows['start_time']. '</td>';
            echo   '<td>'  .$rows['seats']. '</td>';
            echo    "<td> <a  href = \"update.php? cname=$rows[car_name] & cno=$rows[car_no] & area=$rows[area] & price=$rows[price] & time=$rows[start_time] & seats=$rows[seats]\"><input style=\"background-color: #7FFF00;border-radius: 8px;font-size: 15px; \"  type='submit' value='Update'></a></td>" ;

             echo    "<td> <a href = \"delete.php? cname=$rows[car_name] & cno=$rows[car_no] & area=$rows[area] & price=$rows[price] & time=$rows[start_time] & seats=$rows[seats]\"><input style=\"background-color: #FF0000;border-radius: 8px;font-size: 15px;color:white; \" type='submit' value='delete'></a></td>" ;


            echo '</tr>';
    
        }
    ?>

</table>
</center>
</div>


</body>
</html>
