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
	table
	{
		background-color: white;
		border: 3px solid green;
		border-radius: 3px;
		padding: 10px;
	}
	 input[type="submit"]
	 {
		 padding: 10px;
		 border: 0px;
		 outline: 0px;
		 
	 }
	 #active
	 {
		 color:green;
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
 
<center><h2>Tracking Status</h2></center>


<?php
include("authenticate.php");
 $p_id_email = "";
 $p_id_email = $_POST["p_id_email"];
 $get_order_list = "SELECT * FROM buy_list WHERE p_id_email='$p_id_email'";
 $get_order_list_fire = mysqli_query($conn,$get_order_list);
 $get_order_list_fire_result = mysqli_fetch_all($get_order_list_fire,MYSQLI_NUM);
 $its0 = $get_order_list_fire_result[0][0];
 $its1 = $get_order_list_fire_result[0][1];
 $vendor_name = "SELECT * FROM descriptor WHERE product_name='$its1'";
 $vendor_name_fire = mysqli_query($conn,$vendor_name);
 $vendor_name_fire_result = mysqli_fetch_all($vendor_name_fire,MYSQLI_NUM);
 $vendor_real_name = $vendor_name_fire_result[0][17];
 
 $insert_track_start = "INSERT INTO tracking_status(product_image,product_name,p_id_email,status,status_1,status_2,status_3,arrived_by,wholesaler_name,status_wholesaler) VALUES('$its0','$its1','$p_id_email','Awaiting','Awaiting','Awaiting','Awaiting','Awaiting','$vendor_real_name','Awaiting')";
 //echo $insert_track_start;
 $insert_track_start_fire = mysqli_query($conn,$insert_track_start);
 //echo $p_id_email;
 $tracker = "SELECT * FROM tracking_status WHERE p_id_email='$p_id_email'";
 //echo $tracker;
 $tracker_fire = mysqli_query($conn,$tracker);
 $tracker_fire_result = mysqli_fetch_all($tracker_fire,MYSQLI_NUM);
 /*tracking list*/
 
 $tracking_list = "SELECT * FROM tracking_list WHERE p_id_email='$p_id_email'";
 $tracking_list_fire = mysqli_query($conn,$tracking_list);
 $tracking_list_fire_result = mysqli_fetch_all($tracking_list_fire,MYSQLI_NUM);

	 
 
 
?>
<center> 
 <table>
    <tr>
	  <td><img src="<?php echo $tracker_fire_result[0][0]; ?>"/></td>
	  <td width="350"><?php echo $tracker_fire_result[0][1]; ?></td>
	</tr>
	<tr>
	  <td><h2>Expected Delivery:</h2></td>
	  <td><h2 id="active"><?php echo $tracker_fire_result[0][7]; ?></h2></td>
	</tr>
	<tr>
	  <td><h2>Tracking Details</h2></td>
	</tr>
	<tr>
	  <td><h2>Level</h2></td>
	  <td><h2>Status</h2></td>
	  <!--<td><h2 id="active"><?php echo $tracker_fire_result[0][3]; ?></h2></td>-->
	</tr>	
	<tr>
	  <td><h2>Confirm</h2></td>
	  <td><h2 id="active"><?php echo $tracker_fire_result[0][4]; ?></h2></td>
	</tr>
	<tr>
	  <td></td>
	  <td colspan="2">
	  <h2 id="active" <?php if(mysqli_num_rows($tracking_list_fire)=='0'){ echo "style=display:none;"; } ?>><?php if(mysqli_num_rows($tracking_list_fire)!='0') { echo $tracking_list_fire_result[0][0]; } ?></h2>
	  </td>
	</tr>
	
	<tr>
	  <td><h2>Package</h2></td>
	  <td><h2 id="active"><?php echo $tracker_fire_result[0][5]; ?></h2></td>
	</tr>
	<tr>
	  <td></td>
	  <td colspan="2"><h2 id="active" <?php if(mysqli_num_rows($tracking_list_fire)=='0'){ echo "style=display:none;"; } ?>><?php if(mysqli_num_rows($tracking_list_fire)!='0') { echo $tracking_list_fire_result[0][1]; } ?></h2></td>
	</tr>
	
	<tr>
	  <td><h2>Transist</h2></td>
	  <td><h2 id="active"><?php echo $tracker_fire_result[0][6]; ?></h2></td>
	</tr>
	<tr>
	  <td></td>
	  <td colspan="2"><h2 id="active" <?php if(mysqli_num_rows($tracking_list_fire)=='0'){ echo "style=display:none;"; } ?>><?php if(mysqli_num_rows($tracking_list_fire)!='0') { echo $tracking_list_fire_result[0][2]; } ?></h2></td>
	</tr>
	
	<tr>
	  <td><h2>Delivery</h2></td>
	  <td><h2 id="active" <?php if(mysqli_num_rows($tracking_list_fire)=='0'){ echo "style=display:none;"; } ?>><?php if(mysqli_num_rows($tracking_list_fire)!='0') { echo $tracking_list_fire_result[0][3]; } ?></h2></td>
	</tr>
	
 </table>
</center>
 
 
 
 </body>
</html>