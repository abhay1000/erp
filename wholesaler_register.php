<!DOCTYPE html>
<html>
 <head>
    <style>
	body
	{
		margin: 0px;
		font-family: sans-serif;
	}
	a 
	{
		text-decoration: none;
	}
       div
	   {
		   padding: 20px;
		   background-color: black;
		   color: white;
		   
	   }
	   table
	   {
		   padding: 40px;
		   border: 2px solid orange;
		   border-radius: 5px;
	   }
	   .form-design
	   {
		   padding-top:50px;
		   padding-bottom:50px;
		   
	   }
	   tr,td
	   {
		   padding: 10px;
	   }
	   .button-padding
	   {
		   outline: 0px;
		   padding: 10px;
		   border: 0px;
		   
	   }
	   .active-icon
	   {
		   background-color: grey;
	   }
	   .inactive-icon
	   {
		   background-color: #00cc00;
	   }
    </style>
 </head>
 <body alink="black" vlink="black">
 <center>
    <div>Wholesaler Login</div>
 </center>
 
 
 <form class="form-design" action="wholesaler_register.php" method="post">
  <center>
    <table>
	<tr>
	            <td class="active-icon"><center><b><a href="wholesaler_login.php">Login</a></b></center></td>
				<td class="inactive-icon"><center><b>Register</b></center></td>
	</tr>
     <tr>
				 <td>Username:</td>
				 <td><input type="text" name="username"/></td>
	 </tr>
	 <tr>
				 <td>Email Address:</td>
				 <td><input type="email" name="email"/></td>
	 </tr>
	 <tr>
		 <td>Password:</td>
		 <td><input id="pass" type="password" name="pass" ></td>
	 </tr>
	 <tr>
		 <td>Retype-Password:</td>
		 <td><input oninput="check()" onmouseleave="recheck()" id="repass" type="password"></td>
	 </tr>
	 <tr>
		 <td>Mobile No:</td>
		 <td><input type="tel" maxlength="10" name="mobile"></td>
	 </tr>
	 <tr>
	  <td colspan="2"><input id="submitf" style="width:350px;" class="button-padding" value="Register" type="submit"></td>
	 </tr>
	</table>
  </center>
 </form>
 
 
 <?php
    include("authenticate.php");
	$username = $email = $pass = $mobile = "";
	$username = $_POST["username"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$mobile = $_POST["mobile"];
	$add_wholesaler = "INSERT INTO wholesaler_credential(username,email_address,password,mobile_no) VALUES('$username','$email','$pass','$mobile')";
    $add_wholesaler_fire = mysqli_query($conn,$add_wholesaler);
 ?>
 
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
 
 
 </body>
</html>