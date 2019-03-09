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
	
	<li>Cart</li>
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
	 if(!isset($_SESSION["email"]))
	 {
		echo "";
	 }
	 else
	 {
		echo "Logout"; 
	 }
	?>
	</a>
	</li>
 </ul>
<!--product display-->
<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="graphics/evga_gtx_1080_ti.jpg"/>
				<h2>EVGA GTX 1080 TI</h2>
                <h2 class="price">RS 45,400/-</h2>
			</div>
			<div class="container-box">
			    <img src="graphics/evga_gtx_1050.jpg"/>
				<h2>EVGA GTX 1050</h2>
				<h2 class="price">RS 10,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="graphics/evga_gtx_1060.jpg"/>
				<h2>EVGA GTX 1060</h2>
				<h2 class="price">RS 21,00/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img width="218" src="graphics/msi_gtx_1050.jpg"/>
				<h2>MSI GTX 1050</h2>
                <h2 class="price">RS 14,000/-</h2>
			</div>
			<div class="container-box">
			    <img width="218" src="graphics/msi_gt_710.jpg"/>
				<h2>MSI GT 710</h2>
				<h2 class="price">RS 3,300/-</h2>
			</div>
			<div class="container-box">
			    <img src="graphics/msi_gt_730.jpg"/>
				<h2>MSI GT 730</h2>
				<h2 class="price">RS 6,300/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="graphics/asus_gtx_1080.jpg"/>
				<h2>ASUS GTX 1080</h2>
                <h2 class="price">RS 40,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="graphics/zotac_gtx_1080.jpg"/>
				<h2>ZOTAC GTX 1080</h2>
				<h2 class="price">RS 33,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="graphics/gigabyte_gtx_1080.jpg"/>
				<h2>GIGABYTE GTX 1080</h2>
				<h2 class="price">RS 34,000/-</h2>
			</div>
		</center>
	</div>
</div>





</body>
</html>