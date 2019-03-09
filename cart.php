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
		 text-align: center;
	 }
 </style>
</head>
<body color="grey" bgcolor="black" alink="grey" vlink="grey">
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
	<li><a href="<?php
	session_start();
	if(isset($_SESSION["user"]))
	{
		
	}
    else
	{
        echo "login.php";
	}
	?>">
	<b>
	<?php
	   if(isset($_SESSION["user"]))
	   {
		 echo "Hi," . $_SESSION["user"];
	   }
	   else
	   {
	     echo "Sign in";
	   }
	?>
	</b>
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

<!--cart fetcher-->
<?php
  include("authenticate.php");
  if(isset($_SESSION["user"]))
  {
    $user = $_SESSION["user"];
	$temp1 = "SELECT * FROM cart WHERE email_address='$user'";
	$cart_add1 = mysqli_query($conn,$temp1);
	$qcart_add1 = mysqli_fetch_all($cart_add1,MYSQLI_NUM);
	/*print_r($cart_add1);*/
  }
 ?>

 <center>
 <table>
    <?php
	if(isset($_SESSION["user"]))
	{
       echo "<tr>";
	     echo "<th colspan=4><h4>CART</h4></th>";
	   echo "</tr>";
	   echo "<tr>";
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
				$count = mysqli_num_rows($cart_add1);
				$fcount = mysqli_field_count($conn);
				$x=0;
				for($i=0;$i<$count;$i++)
				{
					$image = $qcart_add1[$x][0];
					echo "<tr>";
					echo "<td>";
					echo "<img src=$image>";
					echo "</td>";
					for($j=1;$j<=3;$j++)
					{
						echo "<td>";
						echo $qcart_add1[$i][$j];
						echo "<td>";
						
					}
					echo "</tr>";
					$x++;
				}
	}
	?>
 </table>
 </center>
</body>
</html>