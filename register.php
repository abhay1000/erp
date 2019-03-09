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
	table,tr,th
	{
		color:grey;
		padding: 5px;
	}
	#submitf
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
			<li><a href="login.php">Sign in</a></li>
		 </ul>
		</div>
</center>


<center>
 <form action="register_forward.php" method="post">
    <table>
	    <tr>
		    <th colspan="2">Register</th>
		</tr>
	    <tr>
		      <th>Name</th>
		      <th><input type="text" name="username"/></th>
		</tr>
		 <tr>
		      <th>Email Address</th>
		      <th><input type="email" required name="email_address"/></th>
		</tr>
		<tr>
		      <th>Mobile No</th>
			  <th><input type="text" required maxlength="10" name="mobile_no"/></th>
		</tr>
		<tr>
		      <th>Password</th>
		      <th><input id="pass" name="pass" type="password"/></th>
		</tr>
		<tr>
		      <th>Retype Password</th>
		      <th><input oninput="check()" onmouseleave="recheck()" id="repass" type="password"/></th>
		</tr>
		<tr>		
			   <th colspan="2"><input id="submitf" type="submit" value="CREATE ACCOUNT" /></th>
		</tr>
	</table>
 </form>
 <!--round corner with padding 10px-->
 
 <button id="submitf"><a href="login.php">Login Here</a></button>
</center>

    
<script>
  function check()
  {
	  var a = document.getElementById("pass");
	  var b = document.getElementById("repass");
	  var c = document.getElementById("submitf");
      if(a.value==b.value)
	  {
		
	  }
	  else
	  {
		  b.style.borderColor = "red";
		  b.style.outline ="0px";  
		  c.type = "text";
	  }  
  }
  function recheck()
  {
	 var a = document.getElementById("pass");
	 var b = document.getElementById("repass");
	 var c = document.getElementById("submitf"); 
	  if(a.value==b.value)
	  {
		c.type = "submit"
		b.style.borderColor = "#EEEEEE";
	  }
	  else
	  {
		  b.style.borderColor = "red";
		  b.style.outline ="0px"; 
       		  
	  }  
	  
	  
	  
  }
</script>
?>

</body>
</html>