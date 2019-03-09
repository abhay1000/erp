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
	/*product display*/
	div.container
	{
		background-color: white;
	}
	div.container-box
	{
		display: inline-block;
		padding: 10px;
		color: #0066c0;
	}
	.price
	{
		color: black;
	}
	@media only screen and (max-width: 750px) {
		div.container-box 
	    {
			display: block;
		}
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
	<li><a href="">Portal</a></li>
	<li><a href="order.php">Order</a></li>
	<li><input type="text"></li>
	<li><a href="cart.php">Cart</a></li>
	
	<!--<li><a href="login.php">Sign in</a></li>-->
	<li><a href="login.php">
	<?php
	   session_start();
	   if(isset($_SESSION["user"]))
	   {
		echo "Hi," . $_SESSION["user"];
	   }
	   else
	   {
	     echo "Sign in";
	   }
	?>
	</a></li>
	<li><a href="logout.php">
	<?php
	if(isset($_SESSION["user"]))
	{
		echo "Logout";
	}
	?>
	</a><li>
 </ul>
</div>
</center>
<!--product display-->

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="controller/sony_ps4_jetblack.jpg"/>
				<h2>SONY PS4 JetBlack</h2>
                <h2 class="price">RS 4,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="controller/xbox_wireless_controller.jpg"/>
				<h2>Xbox Wireless Controller</h2>
				<h2 class="price">RS 4,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="controller/steam_controller.jpg"/>
				<h2>Steam Controller</h2>
				<h2 class="price">RS 5,500/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="controller/razer_wolverine.jpg"/>
				<h2>Razer Wolverine Chroma</h2>
                <h2 class="price">RS 12,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="controller/htc_vive.jpg"/>
				<h2>HTC Vive Controller</h2>
				<h2 class="price">RS 12,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="controller/logitech_g_shifter.jpg"/>
				<h2>Logitech G Driving Force</h2>
				<h2 class="price">RS 4,000/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="controller/sades_c200.jpg"/>
				<h2>SADES C200</h2>
                <h2 class="price">RS 2,800/-</h2>
			</div>
			<div class="container-box">
			    <img src="controller/zd_c.jpg"/>
				<h2>ZD-C[2.4G] WG</h2>
				<h2 class="price">RS 2,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="controller/zd_n_pro.jpg"/>
				<h2>ZD-N[PRO]</h2>
				<h2 class="price">RS 1,300/-</h2>
			</div>
		</center>
	</div>
</div>




</body>
</html>