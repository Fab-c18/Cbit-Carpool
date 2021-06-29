<?php

session_start();

    include("connection.php");
    include("functions.php");
    

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $roll_no=$_POST['roll_no'];
        $password=$_POST['password'];
        if(!empty($roll_no) && !empty($password) && is_numeric($roll_no) && (strlen((string) $roll_no)==12))
        {

        $query= "select * from UserInfo where roll_no = '$roll_no' limit 1";
        $result= mysqli_query($con,$query);
        $pass=sha1($password);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] == $pass)
                {
                    $_SESSION['roll_no']= $user_data['roll_no'];
                    header("Location: rides.php");
                    die;
                }
                else
                {
                    echo "Incorrect Password!";
                }

            }
            else
            {
                echo "User Not registered with us ,Please Sign Up.";
                
            }
        }
        }
        else
        {
            echo "Enter correct Roll Number(1601XXXXXXXX) / Password.";
        }
        

        
       
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta charset="utf-8">
    <meta name="description" content="CBIT CAR POOL">
    <meta name="keyword" content="car pool">
    <meta name="website" content="cbit car pool website">
    <meta name="view port" content="width=device-width initial-scale=1.0">
   <!-- <meta http-equiv="refresh" content="3">!-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
<style>
		.box form{
			position: relative;
			z-index: 1;
			width: 100%;
			height: 450px;
			/*margin-left: 250px;*/
			text-align: center;
			background-image: url(images/33.png);
			background-repeat: none;
			background-size: cover;
			background-position: right;
			padding-top: 100px;
		}
		.box p{
			background-color: transparent;
			margin-top: 20px;
		}
		input[type='text'],
		input[type='password']
		{
			background-color: transparent;
			width: 30%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border:1px solid #ccc;
			border-radius: 15px;
			box-sizing: border-box;
			font-weight: 30px;
		}
		input[type='submit']
		{
			width: 20%;
			background-color: #4caf50;
			color: white;
			padding: 14px 20px;
			border:none;
			margin-top: 10px;
			border-radius: 4px;
			cursor: pointer;
		}
		label{
			font-family:URW Chancery L, cursive;
			font-size: 25px;
			background-color: transparent;
			width: 240px;
			display: inline-block;
			text-align: right;
		}
		#box{
			background-color: transparent;
			margin-top: 30px;
		}
		.box a{
			background-color: transparent;
		}
		.box a:hover{
			color: black;
		}
		input[type='submit']:hover{
			color: black;
		}
		#text{
			margin-right: 150px;
			padding-right: 30px;
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
	<div class="box">
			<form method="POST">
				<div id="box">
				<label for="username">Roll No.</label>
				<input id="text"type="text" name="roll_no" placeholder="rollno.">
				<br>
				<label for="password">Password</label>
				<input id="text"type="password" name="password" placeholder="contains atleast 8 characters">
				<br>
				<br>
				<input type="submit" name="submit" value="Submit">
				<p>Not a member? <a href="signup.php">SignUp</a></p>
			</div>
			</form>
	</div>
</body>
</html>