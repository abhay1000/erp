<!DOCTYPE html>
<html>
<head>
 <title>ONLINE GAMING SYSTEM</title>
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
	img.hea-res,img.key-res,img.con-res,img.gra-res,img.mot-res,img.gam-res
	{
		width: 100%;
		height:auto;
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
	<li>
		<a href="cart.php">Cart
				<b>
				     
				</b>
		</a>
	</li>
	<!--<li><a href="login.php">Sign in</a></li>-->
	<li><a href="<?php
	session_start();
	if(isset($_SESSION["user"]))
	{
		
	}
    else
	{
        echo "login.php";
	}
	?>">
	<b>
	<?php
	   if(isset($_SESSION["user"]))
	   {
		 echo "Hi," . $_SESSION["user"];
	   }
	   else
	   {
	     echo "Sign in";
	   }
	?>
	</b>
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

<!--php code-->











<div>
    <a href="game.php"><img class="gam-res" src="game.jpg"/></a>
</div>
<div>
    <a href="headphone.php"><img class="hea-res" src="headphone.jpg"/></a>
</div>
<div>
    <a href="controller.php"><img class="con-res" src="controller.jpg"/></a>
</div>
<div>
    <a href="keyboard.php"><img class="key-res" src="keyboard.jpg"/></a>
</div>
<div>
    <a href="graphics.php"><img class="gra-res" src="graphics.jpg"/></a>
</div>
<div>
    <a href="motherboard.php"><img class="mot-res" src="motherboard.jpg"/></a>
</div>
</body>
</html>