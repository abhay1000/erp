<!DOCTYPE html>
<html>
 <head>
    <style>
	body
	{
		color: grey;
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
 <ul> 
    <li><a href="index.php">Home</a></li>
	<li><a href="portal.php">Portal</a></li>
	<li><a href="order.php">Order</a></li>
	<li><input type="text"></li>
	<li><a href="cart.php">Cart</a></li>
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
	</a></li>
 </ul>
</div>
</center>

 <?php
  include("authenticate.php");
    if($_POST["srno"]!=0)
	{
		  if(isset($_SESSION["user"]))
		  {
			$srno ="";
		    $user = $_SESSION["user"];
            $srno = $_POST["srno"];
        	$asrno = $srno - 1;
        	/*echo $asrno;*/		  
	      $order_list = "SELECT * FROM buy_list WHERE email_address='$user'";
	      $order_list_fire = mysqli_query($conn,$order_list);
	      $order_list_fire_result = mysqli_fetch_all($order_list_fire,MYSQLI_NUM);
		  /*echo $_SESSION["p_id"];*/
		  /*update descriptor*/
		  if(!empty($_POST["srno"]))
		  {
		  $olp_id = $order_list_fire_result[$asrno][4];
		  
		  $descrip_fetch = "SELECT * FROM descriptor WHERE product_id='$olp_id'";
		  /*echo $descrip_fetch;*/
		  $q_descrip_fetch = mysqli_query($conn,$descrip_fetch);
		  $f_q_descrip_fetch = mysqli_fetch_all($q_descrip_fetch,MYSQLI_NUM);
		  }
		  /*print_r($order_list_fire_result);*/
	/*print_r($cart_add1);*/
    if(!empty($_POST["srno"]))
	{
	$update_quantity = $order_list_fire_result[$asrno][2] + $f_q_descrip_fetch[$asrno][18];
	
	/*echo $update_quantity;*/
	$uep_id = $order_list_fire_result[$asrno][4];
	/*echo $uep_id;*/
	$update_descriptor = "UPDATE descriptor SET stock='$update_quantity' WHERE product_id='$uep_id'";
	/*echo $update_descriptor;*/
	$update_descriptor_fire = mysqli_query($conn,$update_descriptor);
	$pid_email = $order_list_fire_result[$asrno][6];
    $delete_order = "DELETE FROM buy_list WHERE p_id_email='$pid_email'";
	/*echo $delete_order;*/
	$delete_order_fire = mysqli_query($conn,$delete_order);
	
				if($delete_order_fire=='1')
				{
				  echo "<center><h2>Order Delete Successfully</h2></center>";	
				}
				else
				{
				  echo "<center><h2>Order Delete Failed</h2></center>";
				}
	}
	
	}
	}
	
	
 
 
 ?>
</body>
<html>