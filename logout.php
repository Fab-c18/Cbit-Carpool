<?php

session_start();

 include("connection.php");
 include("functions.php");

unset($_SESSION['roll_no']);
header("location:signin.php");

?>
