<?php

function check_login($con)
{

   if(isset($_SESSION['roll_no']))
   {
       $id = $_SESSION['roll_no'];
       $query = "select * from UserInfo where roll_no = '$id' limit 1";
       $res = mysqli_query($con,$query);

       if($res && mysqli_num_rows($res) > 0)
       {

           $user_data = mysqli_fetch_assoc($res);
           return $user_data;
       }
       

   }
   else{

   header("location: signin.php");
   }
   die;
}


?>