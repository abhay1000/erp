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
			    <img src="game/battlefield1.jpg"/>
				<h2>EA Battlefield 1 PS4</h2>
                <h2 class="price">RS 2,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="game/cod_ww2.jpg"/>
				<h2>COD WW2 PS4</h2>
				<h2 class="price">RS 2,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="game/cod_iw.jpg"/>
				<h2>COD Infinite Warfare</h2>
				<h2 class="price">RS 1,500/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="game/pes2017.jpg"/>
				<h2>Pro Evolution 2017 PS4</h2>
                <h2 class="price">RS 2,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="game/gtav.jpg"/>
				<h2>Grand Vice City V</h2>
				<h2 class="price">RS 2,200/-</h2>
			</div>
			<div class="container-box">
			    <img src="game/battlefield4.jpg"/>
				<h2>Battlefield 4 PS4</h2>
				<h2 class="price">RS 1,500/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="game/witcher3.jpg"/>
				<h2>Witcher 3 Hunt PS4</h2>
                <h2 class="price">RS 3,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="game/overwatch.jpg"/>
				<h2>Overwatch PS4</h2>
				<h2 class="price">RS 3,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="game/db_xenoverse.jpg"/>
				<h2>Dragon Ball Xenoverse</h2>
				<h2 class="price">RS 1,500/-</h2>
			</div>
		</center>
	</div>
</div>




</body>
</html>