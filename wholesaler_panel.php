<!DOCTYPE html>
<html>
  <head>
    <style>
	 body
	{
		margin: 0px;
		font-family:sans-serif;
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
	}
	.center-plate
	{
		text-align: center;
	}
    </style>
  </head>
  <body>
    <div class="nav">
        <center><h2>Wholesaler Panel</h2></center>
    </div>
	
	
	
	 <?php
	 include("authenticate.php");
	 session_start();
	 include("authenticate.php");
	 $product_list_disp = "SELECT * FROM descriptor WHERE wholesaler_name='$_SESSION[w_user]'";
	 $product_list_disp_fire = mysqli_query($conn,$product_list_disp);
	 $product_list_count = mysqli_num_rows($product_list_disp_fire);
    $supply_request = "SELECT * FROM request_list WHERE wholesaler_name='$_SESSION[w_user]'";
    $supply_request_fire = mysqli_query($conn,$supply_request);
    $supply_request_count = mysqli_num_rows($supply_request_fire);
	?>
	<div>
    <center>		
			<div class="inline-block">
			<a href="wholesaler_product.php">
			 <h2 class="center-plate">Product</h2>
			 <h2 class="center-plate"><?php echo $product_list_count; ?></h2>
			</a>
			</div>
			
			<div class="inline-block">
			<a href="wholesaler_order.php">
			 <h2 class="center-plate">Order</h2>
			 <h2 class="center-plate"><?php echo $product_list_count; ?></h2>
			</a>
			</div>
			
			<div class="inline-block">
			 <a href="wholesaler_supply_request.php">
			 <h2 class="center-plate">Supply Request</h2>
			 <h2 class="center-plate"><?php echo $supply_request_count; ?></h2>
			 </a>
			</div>
		</center>			
    </div>
  
  
  
  
  
  
  </body>
</html>