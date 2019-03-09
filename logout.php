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
	<li><a href="order.php">Order</a></li>
	<li><input type="text"></li>
	
	<li><a href="cart.php">Cart</a></li>
	
	<!--<li><a href="login.php">Sign in</a></li>-->
	<li><a href="login.php">Sign In</a></li>
 </ul>
</div>
</center>

<?php
    
	session_start();
	session_unset();
    session_destroy();
	
	/*echo $_SESSION["email"];*/
 ?>




</body>
</html>