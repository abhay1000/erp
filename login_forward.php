<!DOCTYPE html>
<html>
 <head>
    <style>
	body
	{
		margin: 0px;
        color: grey;		
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
					<li><a href="Order.php">Order</a></li>
					<li><input type="text"></li>
					
					<li><a href="cart.php">Cart</a></li>
					
					<!--<li><a href="login.php">Sign in</a></li>-->
					<li><a href="login.php">Sign In</a></li>
				 </ul>
				</div>
	</center>
	
<?php
				$email = $pass = "";
				if(isset($_POST["email"]))
				{

					   $email = $_POST["email"];
					   $pass = $_POST["pass"];
				}
				include("authenticate.php");
				//echo $email. $pass;

				$temp1 = "SELECT email_address FROM credentials WHERE email_address='$email'";
				$emaila = mysqli_query($conn,$temp1);

				//mysqli_result Object ( [current_field] => 0 [field_count] => 1 [lengths] => [num_rows] => 2 [type] => 0 )
				//num_rows means number of row which match the query value
				//field_count is a column 

				$temp2 = "SELECT password FROM credentials WHERE password='$pass'";
				$passw = mysqli_query($conn,$temp2);

                /*
				print_r($emaila);
				echo "<br>";
				print_r($passw);
				*/


				if(mysqli_num_rows($emaila) && mysqli_num_rows($passw))
				{
					session_start();
					$_SESSION["user"] = $email; 
					
					echo "<center><h2>Login Successful</h2></center>";
					echo "<center><h2><a href=index.php>Enter Dashboard</a></h2></center>";
				}
				else
				{
					echo "<center><h2>Login Failed</h2></center>";
					echo "<center><h2><a href=login.php>Login Again</a></h2></center>";
					
					
				}
				




?>
 </body>
</html>