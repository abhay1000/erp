<!DOCTYPE html>
<html>
<head>
 <style>
    body
	{
		margin: 0px;
		font-family:sans-serif;
		color: white;
	}
	a
	{
		text-decoration: none;
	}
    div.nav
	{
		color:white;
		background-color: black;
		padding:5px;
	}
    .inline-block
	{
		display: inline-block;
		padding: 10px;
		border: 2px solid blue;
		border-radius: 15px;
		box-shadow: 5px 5px 2px grey;
	}
	.inline-block:hover
	{
		background-color: blue;
	}
	.center-plate
	{
		text-align: center;
	}
 </style>
</head>
<body bgcolor="black" alink="grey" vlink="grey">
<div class="nav">
 <center><h2>Admin Panel</h2></center>
</div>

<?php
    include("authenticate.php");
    /*order fetch*/
	 $order_disp = "SELECT * FROM buy_list";
	 $order_disp_fire = mysqli_query($conn,$order_disp);
	 $order_disp_fire_result = mysqli_fetch_all($order_disp_fire,MYSQLI_NUM);
	 //print_r($order_disp_fire_result);
	 $order_count = mysqli_num_rows($order_disp_fire);
	 //echo $count;
	 
	/*customer fetch*/
	 $cust_disp = "SELECT * FROM credentials";
     $cust_disp_fire = mysqli_query($conn,$cust_disp);
     $cust_disp_fire_result = mysqli_fetch_all($cust_disp_fire,MYSQLI_NUM);
     //print_r($cust_disp_fire_result);
     $cust_count = mysqli_num_rows($cust_disp_fire);
	 
	 /*wholesaler fetch*/
	 $wholesaler_disp = "SELECT * FROM wholesaler_credential";
     $wholesaler_disp_fire = mysqli_query($conn,$wholesaler_disp);
     $wholesaler_disp_fire_result = mysqli_fetch_all($wholesaler_disp_fire,MYSQLI_NUM);
     //print_r($cust_disp_fire_result);
     $wholesaler_count = mysqli_num_rows($wholesaler_disp_fire);

	 /*product_list fetch*/
	 $product_list_disp = "SELECT * FROM descriptor";
     $product_list_disp_fire = mysqli_query($conn,$product_list_disp);
     $product_list_disp_fire_result = mysqli_fetch_all($product_list_disp_fire,MYSQLI_NUM);
     //print_r($cust_disp_fire_result);
     $product_list_count = mysqli_num_rows($product_list_disp_fire);
	 
	 /*request_list fetch*/
	 $request_list_disp = "SELECT * FROM request_list";
	 $request_list_disp_fire = mysqli_query($conn,$request_list_disp);
	 $request_list_disp_fire_result = mysqli_fetch_all($request_list_disp_fire,MYSQLI_NUM);
	 $request_list_count = mysqli_num_rows($request_list_disp_fire);
	 
	 //order tracking fetch*/
	 






?>

<br/>

<div>
    <center>
			<div class="inline-block">
			<a href="admin_order_list.php">
			 <h2 class="center-plate">Orders</h2>
			 <h2 class="center-plate"><?php echo $order_count; ?></h2>
			</a>
			</div>
			
			<div class="inline-block">
			<a href="admin_customer_list.php">
			 <h2 class="center-plate">Customer</h2>
			 <h2 class="center-plate"><?php echo $cust_count; ?></h2>
			</a>
			</div>
			
			<div class="inline-block">
			<a href="admin_wholesaler.php">
			 <h2 class="center-plate">Wholesaler</h2>
			 <h2 class="center-plate"><?php echo $wholesaler_count; ?></h2>
			</a>
			</div>
			
			<div class="inline-block">
			<a href="admin_product_list.php">
			 <h2 class="center-plate">Product List</h2>
			 <h2 class="center-plate"><?php echo $product_list_count; ?></h2>
			</a>
			</div>
			
			<div class="inline-block">
			<a href="admin_request_list.php">
			 <h2 class="center-plate">Request</h2>
			 <h2 class="center-plate"><?php echo $request_list_count; ?></h2>
			 </a>
			</div>
			
			<div class="inline-block">
			<a href="admin_order_tracking.php">
			 <h2 class="center-plate">Order Tracking</h2>
			 <h2 class="center-plate"><?php echo $request_list_count; ?></h2>
			 </a>
			</div>
		</center>			
</div>





</body>
</html>