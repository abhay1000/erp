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
			    <img src="motherboard/asus_rog_strix_b350f.jpg"/>
				<h2>ASUS ROG STRIX B350F</h2>
                <h2 class="price">RS 8,200/-</h2>
			</div>
			<div class="container-box">
			    <img src="motherboard/asus_rog_strix_b250g.jpg"/>
				<h2>ASUS ROG STRIX B250G</h2>
				<h2 class="price">RS 6,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="motherboard/asus_rog_rampage_lga2066.jpg"/>
				<h2>ASUS ROG LGA2066</h2>
				<h2 class="price">RS 45,000/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="motherboard/gigabyte_z370_aorus.jpg"/>
				<h2>GIGABYTE Z370 AORUS</h2>
                <h2 class="price">RS 17,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="motherboard/gigabyte_h370_aorus.jpg"/>
				<h2>GIGABYTE H370 AORUS</h2>
				<h2 class="price">RS 9,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="motherboard/gigabyte_x299_aorus.jpg"/>
				<h2>GIGABYTE X299 AORUS</h2>
				<h2 class="price">RS 14,000/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="motherboard/msi_z270m.jpg"/>
				<h2>MSI GAMING Z270M</h2>
                <h2 class="price">RS 9,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="motherboard/msi_m7.jpg"/>
				<h2>MSI GAMING M7</h2>
				<h2 class="price">RS 7,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="motherboard/msi_b450i.jpg"/>
				<h2>MSI GAMING B450I</h2>
				<h2 class="price">RS 8,200/-</h2>
			</div>
		</center>
	</div>
</div>




</body>
</html>