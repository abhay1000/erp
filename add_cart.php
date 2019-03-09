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
	<li><a href="order.php">Order</a></li>
	<li><input type="text"></li>
	<li><a href="cart.php">Cart</a></li>
	<!--<li><a href="login.php">Sign in</a></li>-->
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



<?php
					 include("authenticate.php");
					 $user = $_SESSION["user"];
					 $product_id = $_SESSION["p_id"];
					 /*descrip fetcher*/
						 $descrip_fetch = "SELECT * FROM descriptor WHERE product_id='$product_id'";
						 $q_descrip_fetch = mysqli_query($conn,$descrip_fetch);
						 $f_q_descrip_fetch = mysqli_fetch_all($q_descrip_fetch,MYSQLI_NUM);
						 //print_r($f_q_descrip_fetch);
					 $product_image = $f_q_descrip_fetch[0][15];
					 $product_name = $f_q_descrip_fetch[0][8];
					 $product_quantity = $_POST["quantity"];
					 $product_price = $f_q_descrip_fetch[0][9];
					 $p_id_mail = $product_id. '_' .$user;
					 $add_cart_query = "INSERT INTO cart(product_image,product_name,product_quantity,product_price,email_address,p_id_mail) VALUES('$product_image','$product_name','$product_quantity','$product_price','$user','$p_id_mail')";
					 echo "<br>";
					 //echo $add_cart_query;
					 //$add_cart_query_fire = mysqli_query($conn,$add_cart_query);
					 if(mysqli_query($conn,$add_cart_query))
					 {
						 echo "<center><h2>Cart Added Successfully</h2></center>";
					 }
					 else
					 {
						echo "<center><h2>Cart Exist...Failed</h2></center>";
					 }
?>



</body>
</html>