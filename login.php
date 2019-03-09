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
	table,tr,th
	{
		padding: 5px;
	}
    a
	{
		text-decoration: none;
	}
	#pad-box
	{
		border: 0px;
		padding: 5px;
		width: 300px;
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
				<li><a href="login.php">Sign In</a></li>
			 </ul>
		</div>
</center>
<br/>
<center>
   <h2 style="color:grey;">Login</h2>
</center>
<center>
  <form action="login_forward.php" method="post">
    <table>
        <tr>
		    <th colspan="2">Login</th>
		</tr>
		<tr>
		    <th style="color:grey;">Email Address</th>
            <th><input type="email" name="email"/></th>			
		</tr> 
		<tr>
		    <th style="color:grey;">Password</th>
            <th><input type="password" name="pass"/></th>			
		</tr>
		<tr>
		    <th colspan="2"><input id="pad-box" type="submit" value="Login"/></th>
		</tr>
		<tr>
		    <th colspan="2"><button id="pad-box"><a href="register.php">Register Now</a></button></th>
		</tr>
    </table>
  </form>
</center>
</body>
</html>