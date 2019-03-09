<!DOCTYPE html>
<html>
   <head> 
    <style>
	    body
		{
			margin: 0px;
			font-family:sans-serif;
		}
	     div.nav
	    {
				color:white;
				background-color: black;
				padding:5px;
	    }
		a
	    {
	    	text-decoration: none;
	    }
	</style>
   </head>
   <body>
    
	<div class="nav">
         <center><h2>Admin Panel</h2></center>
    </div>
   <?php
    include("authenticate.php");
    $pname = $pquant = $pprice = $wname = $status = "";
	$pname = $_POST["pname"];
	$pquant = $_POST["pquant"];
	$pprice = $_POST["pprice"];
	$wname = $_POST["wname"];
	$status = $_POST["status"];
	//echo $pname . $pquant . $pprice . $wname . $status;
	$request_list = "INSERT INTO request_list(product_name,product_quantity,product_price,wholesaler_name,status) VALUES('$pname','$pquant','$pprice','$wname','$status')";
	if(mysqli_query($conn,$request_list))
	{
		echo "<center><h2>Request Added</h2></center>";
		echo "<center><h2><a href=admin_request_list.php>Request List</a></h2>";
	}
	else
	{
		echo "<center><h2>Request Already Exist</h2></center>";
		echo "<center><h2><a href=admin_request_list.php>Request List</a></h2>";
	}

  ?>
   
   
   </body>
</html>