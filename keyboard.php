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
			    <img src="keyboard/razer_ornata.jpg"/>
				<h2>Razer Ornato Chroma</h2>
                <h2 class="price">RS 6,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="keyboard/razer_cynosa.jpg"/>
				<h2>Razer Cynosa Chroma</h2>
				<h2 class="price">RS 4,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="keyboard/razer_blackwidow_mercury.jpg"/>
				<h2>Raxer BlackWidow Mrcury</h2>
				<h2 class="price">RS 10,000/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="keyboard/asus_rog_claymore_cherry.jpg"/>
				<h2>Asus Rog Claymore Cherry</h2>
                <h2 class="price">RS 16,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="keyboard/asus_rog_gk2000.jpg"/>
				<h2>Asus Rog GK2000</h2>
				<h2 class="price">RS 17,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="keyboard/asus_rog_claymore_core.jpg"/>
				<h2>Asus Rog Claymore Core</h2>
				<h2 class="price">RS 12,000/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="keyboard/reddragon_k558_anala.jpg"/>
				<h2>Reddragon K558 ANALA</h2>
                <h2 class="price">RS 3,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="keyboard/corsair_k55.jpg"/>
				<h2>Corsair K55</h2>
				<h2 class="price">RS 3,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="keyboard/alienware_AW768.jpg"/>
				<h2>Alienware AW769</h2>
				<h2 class="price">RS 5,000/-</h2>
			</div>
		</center>
	</div>
</div>




</body>
</html>