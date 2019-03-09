 <!DOCTYPE html>
 <html>
 <head>
    <style>
	body
	{
		margin: 0px;
		font-family: sans-serif;
	}
	a
	{
		text-decoration: none;
		
	}
    div
	{
		padding: 20px;
		background-color: black;
		color: white;
		   
	}
	</style>
 </head>
 <body>
    <center>
        <div>Wholesaler Panel</div>
    </center>
 
 
 
 
 
 
 <?php
    session_start();
    include("authenticate.php");
	$emai_ad = $pass =  "";
	$email_ad = $_POST["email"];
	$pass =	$_POST["pass"];
	//echo $email_ad . $pass;
	$temp1 = "SELECT email_address FROM wholesaler_credential WHERE email_address='$email_ad'";
    $email_ad_fire = mysqli_query($conn,$temp1);
	$email_ad_fire_result = mysqli_fetch_all($email_ad_fire,MYSQLI_NUM);
	$temp2 = "SELECT password FROM wholesaler_credential WHERE password='$pass'";
	$pass_fire = mysqli_query($conn,$temp2);
	$temp3 = "SELECT * FROM wholesaler_credential WHERE email_address='$email_ad'";
	$username_fire = mysqli_query($conn,$temp3);
	$username_fire_result = mysqli_fetch_all($username_fire,MYSQLI_NUM);
	//print_r($username_fire_result);
	//echo $username_store;
	if(mysqli_num_rows($email_ad_fire) && mysqli_num_rows($pass_fire))
	{
		$username_store = $username_fire_result[0][0];
		$_SESSION["w_user"] = $username_store;
		echo "<center><h2>Login Successfully</h2></center>";
		echo "<center><h2><a href=wholesaler_panel.php>Enter Dashboard</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Login Failed</h2></center>";
		echo "<center><h2><a href=wholesaler_login.php>Back to Login</a></h2></center>";
		
	}
 ?>
 </body>
 </html>