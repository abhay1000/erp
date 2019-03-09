<!DOCTYPE html>
<html>
 <head>
    <style>
	body
		{
			margin: 0px;
			font-family: sans-serif;
		}
		div
		{
		    padding: 20px;
            background-color: black;
            color: white;			
		}
	</style>
 </head>
 </body>
  <center>
        <div>Admin Panel</div>
     </center>
<?php
    include("authenticate.php");
	$email_ad = $pass = "";
	$email_ad = $_POST["email"];
	$pass = $_POST["pass"];
	//echo $email_ad . $pass;
	$temp1 = "SELECT email_address from admin WHERE email_address='$email_ad'";
	$email_ad_fire = mysqli_query($conn,$temp1);
	//print_r($email_ad_fire);
	$temp2 = "SELECT password from admin WHERE password='$pass'";
	$pass_fire = mysqli_query($conn,$temp2);
	//print_r($pass_fire);
   if(mysqli_num_rows($email_ad_fire) && mysqli_num_rows($pass_fire))
   {
      echo "<center><h2>Login Successful</h2><?center>";
	  echo "<center><h2><a href=admin_panel.php>Enter Dashboard</a></h2></center>";
   }
   else
   {

   }	   
 ?>
 </body>
</html>