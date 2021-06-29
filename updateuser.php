<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    $roll=$_GET['rno'];
    $na=$_GET['n'];
    $pno=$_GET['pno'];
    
?>
<?php

        if(isset($_POST['submit']))
        {
                $name=$_POST['name'];
                $phoneno=$_POST['phone'];
              
                if(!empty($name) && !empty($phoneno))
                {
                    $query="UPDATE UserInfo SET name='$name',phone_no='$phoneno' where roll_no='$roll' ";
                    mysqli_query($con,$query);


                    echo " <script type='text/javascript'>alert('User Data Updated Successfully!');
                    window.location='myaccount.php';
                    </script>";
                
                    
                    
                    die;

                }
                else
                {
                    if(empty($name))
                    {
                        echo "Enter Name";
                    }
                    if(empty($phoneno))
                    {
                        echo "Enter Phone Number";
                    }

                }
                
        }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Account</title>
    <meta charset="utf-8">
    <meta name="description" content="CBIT CAR POOL">
    <meta name="keyword" content="car pool">
    <meta name="website" content="cbit car pool website">
    <meta name="view port" content="width=device-width initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="3">!-->
	<link rel="shortcut icon" type="images/jpg" href="images/icon.jpg">
    <link rel="stylesheet" href="css/styles.css">
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
      cursor:pointer;
    }
    label
    {
      width: 240px;
      display: inline-block;
      text-align: right;
    }
    .container
    {
      position: relative;
			z-index: 1;
            margin-left:250px;
            margin-top:50px;
			text-align: center;
			background-color: transparent;
			padding-top: 80px;
			margin-right: 500px;
    }
    input[type='submit']:hover{
			color: black;
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
      <form method="POST">
        <label for="name">Name</label>
        <input type="text" value="<?php echo "$na" ?>" name="name" >
        <label for="phone">Phone Number</label>
        <input type="text" value="<?php echo "$pno" ?>" name="phone" >
        
        <input type="submit" name="submit" value="Update">
      </form>
    </div>
    
</body>
</html>

