<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    $roll=$_GET['rno'];
    
    
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

        <label for="current">Enter current password:</label>
        <input type="password"  name="current" >
        <label for="new">Enter New Password:</label>
        <input type="password" name="new" >
        
        <input type="submit" name="submit" value="Change">
      </form>
      <?php

        if(isset($_POST['submit']))
        {
                $current=$_POST['current'];
                $new=sha1($_POST['new']);
              
                if(!empty($current) && !empty($new) && $user_data['password']==sha1($current) )
                {
                    $query="UPDATE UserInfo SET password='$new'where roll_no='$roll' ";
                    mysqli_query($con,$query);


                    echo " <script type='text/javascript'>alert('Password Changed Successfully!');
                    window.location='myaccount.php';
                    </script>";
                
                    
                    
                    die;

                }
                else
                {
                    if(empty($current))
                    {
                        echo "Enter Current Password";
                    }
                    if(empty($new))
                    {
                        echo "Enter New Password";
                    }
                    if($user_data['password']!=$current)
                    {
                        echo "Incorrect 'Current Password!!'";
                    }
                    

                }
                
        }
?>

    </div>
    
</body>
</html>

