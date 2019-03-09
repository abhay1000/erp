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
	/*input submit hide*/
	input.input-submit-hide
	{
		color:#0066c0;
		font-size: 1.0em;
		background-color: white;
		border: 0px;
		font-weight: bold;
		outline: 0px;
		
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

<form action="auto_descriptor.php" method="post">
<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="headphone/bengoo_g9000.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="Bengoo_G9000"/></h2>
                <h2 class="price">RS 1,900/-</h2>
			</div>
			<div class="container-box">
			    <img src="headphone/hyperx_hscs_bk.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="HYPERX_HSCS_BK"/></h2>
				<h2 class="price">RS 3,500/-</h2>
			</div>
			<div class="container-box">
			    <img src="headphone/corsair_void_pro.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="Corsair_Void_Pro"/></h2>
				<h2 class="price">RS 5,000/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="headphone/vmoda_crossfade_m80.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="V_MODA_Crossfade_M_80"/></h2>
                <h2 class="price">RS 9,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="headphone/onikuma_k5_n.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="ONIKUMA_K5_N"/></h2>
				<h2 class="price">RS 2,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="headphone/razer_kraken_7.1.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="Razer_Kraken_7.1"/></h2>
				<h2 class="price">RS 6,000/-</h2>
			</div>
		</center>
	</div>
</div>

<div class="container">
    <div class="box">
	    <center>
		    <div class="container-box">
			    <img src="headphone/logitech_g430.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="Logitech_G430"/></h2>
                <h2 class="price">RS 3,000/-</h2>
			</div>
			<div class="container-box">
			    <img src="headphone/sades_sa807.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="Sades_SA807"/></h2>
				<h2 class="price">RS 1,400/-</h2>
			</div>
			<div class="container-box">
			    <img src="headphone/sades_sa920.jpg"/>
				<h2><input class="input-submit-hide" name="product_id" type="submit"  value="Sades_SA920"/></h2>
				<h2 class="price">RS 2,000/-</h2>
			</div>
		</center>
	</div>
</div>

</form>



</body>
</html>