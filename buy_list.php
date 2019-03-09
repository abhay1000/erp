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
    ul.nav-bar
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
    
    div.main
	{
		background-color: white;
	}
    div.container-aside
	{
		display: inline-block;
		width: 40px;
		height: 100px;
		padding: 50px;
	}
	img.aside-holder
	{
		padding: 10px;
	}
	div.container-main
	{
		display: inline-block;
		width: 620px;
		padding: 10px;
	}
	div.container-content
	{
		display: inline-block;
		width: 36%;
		padding: 50px;
	}
    div.container-cart
	{
		display: inline-block;
		width: 10%;
		padding: 50px;
		
	}
    .hide
	{
		visibility: hidden;
	}
 </style>
</head>
<body bgcolor="black" alink="grey" vlink="grey">
<!--design-->
<center>
<div class="logo">
    <img src="logo.jpg" width="150"/>
</div>
</center>

<center>
<div class="nav">
 <ul class="nav-bar"> 
    <li><a href="index.php">Home</a></li>
	<li><a href="portal.php">Portal</a></li>
	<li><a href="<?php if(isset($_SESSION["user"])){ echo ""; }else { echo "order.php"; } ?>">Order</a></li>
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

<!--buy now module-->
<?php
                    include("authenticate.php");
					$user = $_SESSION["user"];
					 $product_id = $_SESSION["p_id"];
					 
					 /*descrip fetcher*/
						 $descrip_fetch = "SELECT * FROM descriptor WHERE product_id='$product_id'";
						 $q_descrip_fetch = mysqli_query($conn,$descrip_fetch);
						 $f_q_descrip_fetch = mysqli_fetch_all($q_descrip_fetch,MYSQLI_NUM);
						 $product_order_image = $f_q_descrip_fetch[0][15];
						 $product_name = $f_q_descrip_fetch[0][8];
						 $product_quantity = $_POST["quantity"];
						 $product_price = $f_q_descrip_fetch[0][9];
						 $wholesaler_name = $f_q_descrip_fetch[0][17];
						 $p_id_email = $product_id. '_' .$user;
						 //echo $product_quantity . $wholesaler_name;
						 //request list fetcher*/
						 $request_list =  "SELECT * FROM request_list WHERE wholesaler_name='$wholesaler_name'";
						 //echo $request_list;
						 $request_list_fire = mysqli_query($conn,$request_list);
						 $request_list_fire_result = mysqli_fetch_all($request_list_fire,MYSQLI_NUM);
						 //print_r($request_list_fire_result);
						 
						 if($product_quantity<=$f_q_descrip_fetch[0][18])
						 {
								 $buy_list = "INSERT INTO buy_list(product_order_image,product_name,product_quantity,product_price,p_id,email_address,p_id_email) VALUES('$product_order_image','$product_name','$product_quantity','$product_price','$product_id','$user','$p_id_email')";
								 $buy_list_fire = mysqli_query($conn,$buy_list);
								 
								 //order status
									        echo "<center>";
											if($buy_list_fire=='1')
											{
												 $stock_change = $f_q_descrip_fetch[0][18] -  $product_quantity; 
												 echo $stock_change;
												 $stock_update = "UPDATE descriptor SET stock='$stock_change' WHERE product_id='$product_id'";
												 /*echo $stock_update;*/
							                	 $stock_update_fire = mysqli_query($conn,$stock_update);
							 	                 /*echo "buylist" . "$buy_list_fire";*/
												 echo "<h1>Order Placed Successfully</h1>";
											}
											else
											{
												echo "<h1>Order Failed</h1>";
						                     	echo "<h2>OR</h2>";
						                    	echo "<h1>Order is Placed You can Updatel</h1>";
							                    echo "</center>";			
											}
						 }
						else
						{ 
					    //out of stock
						//if stock is there but not sufficient then send request list
						//
						//
						//
						                        echo "<center>";
							                    echo "<h1>Order Failed</h1>";
						                     	echo "<h2>OR</h2>";
						                    	echo "<h1>Order is Placed You can Update</h1>";
							                    echo "</center>";
							
							
						
						    
							if($f_q_descrip_fetch[0][18]=='0')
							{
								if($request_list_fire_result[0][4]=='Awaiting')
                                {
									//awaiting request list->value
									//update request list value
									$await_empty_quantity_change = $request_list_fire_result[0][1] + 50;
                                    $await_empty = "UPDATE request_list SET product_quantity='$await_empty_quantity_change' WHERE wholesaler_name='$wholesaler_name'";
									$await_empty_fire = mysqli_query($conn,$await_empty);
									/*print("1");
									print_r(mysqli_error_list($conn));*/
                                }
                                else
								{
									//delete completed request list
									//insert new request list 
                                    $delete_complete_empty = "DELETE * FROM request_list WHERE wholesaler_name='$wholesaler_name'";
									$delete_complete_empty_fire = mysqli_query($conn,$delete_complete_empty);
									$insert_complete_empty = "INSERT INTO request_list(product_name,product_quantity,product_price,wholesaler_name,status) VALUES('$product_name','50','$product_price','$wholesaler_name','Awaiting')";
									$insert_complete_empty = mysqli_query($conn,$insert_complete_empty);
									/*print("2");
									print_r(mysqli_error_list($conn));*/

								}							
													
							}
							//stock not sufficient
							else
							{
								if($request_list_fire_result[0][4]=='Awaiting')
                                {
									$await_full_quantity_change = $request_list_fire_result[0][1] + 50;
                                    $await_full = "UPDATE request_list SET product_quantity='$await_full_quantity_change' WHERE wholesaler_name='$wholesaler_name'";
									$await_full_fire = mysqli_query($conn,$await_full);
									/*print("3");
									print_r(mysqli_error_list($conn));*/
                                }
                                else
								{
									$complete_full_quantity_change = $request_list_fire_result[0][1] + 50;
									$delete_complete_full = "DELETE FROM request_list WHERE wholesaler_name='$wholesaler_name'";
									$delete_complete_full_fire = mysqli_query($conn,$delete_complete_full);
									print_r(mysqli_error_list($conn));
                                    $complete_full = "INSERT INTO request_list(product_name,product_quantity,product_price,wholesaler_name,status) VALUES('$product_name','$complete_full_quantity_change','$product_price','$wholesaler_name','Awaiting')";
									$complete_full_fire = mysqli_query($conn,$complete_full);
									/*print($delete_complete_full);
									print($delete_complete_full_fire);
									print($complete_full);
									print("4");
									print("<br>");
									print_r(mysqli_error_list($conn));*/
} } }						 
?>
</body>
</html>