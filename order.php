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
	}
     tr,th,td
	 {
		 padding: 10px;
	 }
	 input[type="submit"]
	 {
		 padding: 10px;
		 border: 0px;
		 outline: 0px;
		 
	 }
	 #track
	 {
		 background-color: #f0c14b;
		 border:1px solid black;
		 border-radius: 5px;
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


<!--order fetcher-->
<?php
  include("authenticate.php");
		  if(isset($_SESSION["user"]))
		  {
		  $user = $_SESSION["user"];	  
	      $order_list = "SELECT * FROM buy_list WHERE email_address='$user'";
	      $order_list_fire = mysqli_query($conn,$order_list);
	      $order_list_fire_result = mysqli_fetch_all($order_list_fire,MYSQLI_NUM);
		  }
		  /*print_r($order_list_fire_result);*/
	/*print_r($cart_add1);*/
 ?>
<center><h2>Order</h2></center>
 <center>
 <table>
 <?php
 if(isset($_SESSION["user"]))
 {
	echo "<tr>";
	   echo "<th>Sr.No</th>";
	   echo "<th>Product</th>";
	   echo "<th>Product Name</th>";
	   echo "<th></th>";
	   echo "<th>Quantity</th>";
	   echo "<th></th>";
	   echo "<th>Price</th>";
	   echo "<th></th>";
	echo "</tr>";
 }
	?>
    <?php
	if(isset($_SESSION["user"]))
	{
				$count = mysqli_num_rows($order_list_fire);
				$fcount = mysqli_field_count($conn);
				$x=1;
				for($i=0;$i<$count;$i++)
				{
					$image = $order_list_fire_result[$i][0];
					echo "<tr>";
					echo "<td>$x</td>";
					echo "<td>";
					echo "<img src=$image>";
					echo "</td>";
					for($j=1;$j<=3;$j++)
					{
						echo "<td>";
						echo $order_list_fire_result[$i][$j];
						echo "<td>";						
					}	
                    echo "<form action=tracker_status.php method=post>";
					$p_id_email = $order_list_fire_result[$i][6];
					echo "<input style=display:none name=p_id_email type=text value=$p_id_email>";
					echo "<th>";
					echo "<input id=track value=Track type=submit>";
					echo "</th>";
                    echo "</form>";					
					echo "</tr>";
					$x++;
				}
				
	}
	?>
 </table>
 </center>

 
 <center><h2>Delete Order</h2>
 <form action="order_delete.php" method="post">
    <table>
	   <tr>
	    <th>Sr.No</th>
		<th><input name=srno type="text"></th>
	   </tr>
	   <tr>
	    
	    <th colspan="2"><input type="submit"></th>
	   </tr>
	</table>
 </center>
 
 
 
 
</body>
</html>