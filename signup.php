<?php

session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name= $_POST['name'];
        $roll_no=$_POST['roll_no'];
        $password=$_POST['password'];
        $phone_no=$_POST['phone_no'];

        $ch= "select * from UserInfo where roll_no = '$roll_no' ";
        $r=mysqli_query($con,$ch);
        if(mysqli_num_rows($r) > 0)
        {
            echo "Roll number already Registered with us ,Please Login.";
        }
        else
        {

        if(!empty($name) && !empty($roll_no) && !empty($password) && !empty($phone_no) && is_numeric($roll_no) && is_numeric($phone_no) && (strlen((string) $roll_no)==12) && (strlen((string) $phone_no)==10) )
        {
            $query="insert into UserInfo (roll_no,name,phone_no,password) values ('$roll_no','$name','$phone_no',sha1('$password'))";
            mysqli_query($con,$query);

            header("location: signin.php");
            die;

        }
        else
        {
            if(empty($name) || empty($roll_no) || empty($password) || empty($phone_no) )
            {
                echo "Please fill in all the values. ";
            }
            if( (strlen((string) $roll_no)!=12) )
            {
                echo "Enter correct roll number.(12 digits - 16011XXXXXXX)";
            }
            if( (strlen((string) $phone_no)!=10) )
            {
                echo "Enter correct Phone number.";
            }
        }
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
    <meta name="description" content="CBIT CAR POOL">
    <meta name="keyword" content="car pool">
    <meta name="website" content="cbit car pool website">
    <meta name="view port" content="width=device-width initial-scale=1.0">
   <!-- <meta http-equiv="refresh" content="3">!-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" type="images/jpg" href="images/icon.jpg">
	<style>
		.container1 form {
			position: relative;
			z-index: 1;
			width: 50%;
			height: 550px;
            margin-left:350px;
			text-align: center;
			background-color: transparent;
			background-image: url(images/35.png);
			background-repeat: none;
			background-size: cover;
			padding-top: 20px;
		}
		.container1 p {
			background-color: transparent;
			margin-top: 20px;
		}
		.container a{
			background-color: transparent;
		}
		input[type='text'],
		input[type='password'],
		input[type='number']
		{
			width: 50%;
			padding: 12px 10px;
			margin: 8px 0;
			display: inline-block;
			border:1px solid #ccc;
			border-radius: 15px;
			box-sizing: border-box;
			background-color: transparent;
			text-color: #0000;
		}
		input[type='submit']
		{
			width: 20%;
			background-color: #4caf50;
			color: white;
			padding: 14px 20px;
			margin-left: 200px;
			margin-top: 10px;
			border:none;
			border-radius: 4px;
			cursor: pointer;
		}
		label{
			font-family:URW Chancery L, cursive;
			font-size: 25px;
			background-color: transparent;
			width: 220px;
			display: inline-block;
			text-align: right;
		}
		#signup a{
			background-color: transparent;
		}
		#signup a:hover{
			color: black;
		}
		input[type='submit']:hover{
			color: black;
		}
		#signup{
			margin-top: 50px;
			background-color: transparent;
		}
		#signup {
			color: #000000;
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
	<div class="container1">
			<form>
				<div id="signup">
				<label for="username">UserName</label>
				<input type="text" name="UserName" placeholder="username">
				<br>
				<label for="rollno.">RollNo.</label>
				<input type="number" name="RollNo." placeholder="rollno.">
				<br>
				<label for="phoneno.">PhoneNo.</label>
				<input type="number" name="PhoneNo." placeholder="+91">
				<br>
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="contains atleast 8 characters">
				<br>
				<label for="password2">ConfirmPassword</label>
				<input type="password" name="ConfirmPassword" placeholder="ConfirmPassword">
				<br>
				<input type="submit" name="submit" value="Submit">
				<p style="margin-left: 150px; margin-top:20px;">Already a member? <a href="sigin.php" style="background-color: transparent;">SignIn</a></p>
			</div>
			</form>
		</div>
</body>
</html>