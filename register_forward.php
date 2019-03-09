<!DOCTYPE html>
<html>
 <head>
    <style>
	body
	{
		margin: 0px;	
	}
	div.nav
	{
		background-color: black;
		color: grey;	
	}
    ul
	{
		list-style-type: none;
	}
	li
	{
		display: inline-block;
		padding: 10px;
	}
	li.no-pad
	{
		padding: 0px;
	}
	table,tr,th
	{
		padding: 5px;
	}
    a
	{
		text-decoration: none;
	}
	</style>
 </head>
 <body bgcolor="black" alink="grey" vlink="grey">
    <center>
		<div class="logo">
			<img src="logo.jpg" width="150"/>
		</div>
    </center>
    <center>
		<div class="nav">
			 <ul> 
				<li><a href="index.php">Home</a></li>
				<li><a href="portal.php">Portal</a></li>
				<li><a href="order.php">Order</a></li>
				<li><input type="text"></li>	
				<li><a href="cart.php">Cart</a></li>
				<li><a href="login.php">Sign In</a></li>
			 </ul>
		</div>
    </center>
	
	<?php
          include("authenticate.php");
          $name = $email_address = $mobile_no = $pass = "";
          $name = $_POST["username"];
          $email_address = $_POST["email_address"];
          $mobile_no = $_POST["mobile_no"];
          $pass = $_POST["pass"];
		  
          /*echo $name . $email_address . $mobile_no . $pass;*/
		  /*sql use '$name' to convert into string format*/
		  $add_user = "INSERT INTO credentials(username,email_address,password,mobile_no) VALUES('$name','$email_address','$pass','$mobile_no')";
          if(mysqli_query($conn,$add_user))
		  {
			echo "<center><h2 style=color:grey;>Account Created Successfully</h2></center>";
			echo "<center><h2><a href=login.php>Login Here</h2></center>";
		  }
		  else
		  {
			echo "<center><h2 style=color:grey;>Account Existing  or Failed To Create</h2></center>";
			echo "<center><h2><a href=register.php>Register Again</a></h2></center>";
		  }
		  
		  
 ?>       
	
	
	
	
	
	
	
	
 </body>
</html>