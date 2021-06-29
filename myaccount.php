<?php

            session_start();

                include("connection.php");
                include("functions.php");
                $user_data=check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Rides:</title>
    <meta charset="utf-8">
    <meta name="description" content="CBIT CAR POOL">
    <meta name="keyword" content="car pool">
    <meta name="website" content="cbit car pool website">
    <meta name="view port" content="width=device-width initial-scale=1.0">
   <!-- <meta http-equiv="refresh" content="3">!-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
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
    <br>
		
			<h1 style="color:green; text-align:center; font-family: 'Nunito', sans-serif;font-size:25px;" >My Account:</h1>

            
		
	</div>
    <div>

        <br><br>
        <p style="color:Purple; text-align:center; font-size:20px;">Roll Number : <?php echo "$user_data[roll_no]"; ?> </p>
        <br>
        <p style="color:Purple; text-align:center;  font-size:20px;">Name     : <?php echo "$user_data[name]"; ?> </p>
        <br>
        <p style="color:Purple; text-align:center;  font-size:20px;">Phone Number : <?php echo "$user_data[phone_no]"; ?> </p>
        <br>
        <center>
        <?php
               echo" <a href = \"updateuser.php? rno=$user_data[roll_no] & n=$user_data[name] & pno=$user_data[phone_no]\"><input style=\"background-color:#00FFFF;border-radius: 8px;font-size: 15px; \" type='submit' value='Update'></a>";
               echo" <a href = \"changepass.php? rno=$user_data[roll_no] \"><input style=\"background-color:#FF7F50;border-radius: 8px;font-size: 15px; \" type='submit' value='Change Password'></a>"
        ?>
        </center>
    </div>
	
</div>
</body>
</html>
