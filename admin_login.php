<!DOCTYPE html>
<html>
    <head>
	    <style>
		body
		{
			margin: 0px;
			font-family: sans-serif;
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
		   background-color: #0066ff;
	   }		
		</style>
	</head>
<body>
	 <center>
        <div>Admin Panel</div>
     </center>
	
	<form id="form_check" class="form-design" action="admin_login_forward.php" method="post">
   <center>
    <table>
	<tr>
	            <td colspan="2" class="active-icon"><center><b>Admin Login</b></center></td>
	</tr>
     <tr>
				 <td>Email Address:</td>
				 <td><input name="email" type="email"/></td>
	 </tr>
	 <tr>
		 <td>Password:</td>
		 <td><input name="pass" type="password"></td>
	 </tr>
	 <tr>
	  <td colspan="2"><input style="width:350px;" class="button-padding" value="Log In" type="submit"></td>
	 </tr>
	</table>
  </center>
 </form>	
</body>
</html>