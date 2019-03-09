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
<body bgcolor="black" align="grey" vlink="grey">


<!--database fetcher-->
<?php
			session_start();
			include("authenticate.php");
			//$_SESSION["p_id"] = "Bengoo G9000";
			$product_id = "";
			if(empty($_POST["product_id"]))
			{
				
			}
			else
			{
			$product_id = $_POST["product_id"];
			$_SESSION["p_id"] = $product_id;
			//$p_id = $_SESSION["p_id"];
			}
			/*echo $_SESSION[p_id];*/
			$descrip_fetch = "SELECT * FROM descriptor WHERE product_id='$_SESSION[p_id]'";
			$q_descrip_fetch = mysqli_query($conn,$descrip_fetch);
			$f_q_descrip_fetch = mysqli_fetch_all($q_descrip_fetch,MYSQLI_NUM);
			
?>
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
	<li><a href="login.php">
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



<div class="main">
<div class="container-aside">
 <img onclick="first()" onmouseover="first()" class="aside-holder" src="<?php echo $f_q_descrip_fetch[0][0]; ?>"/>
 <img onclick="second()" onmouseover="second()" class="aside-holder" src="<?php echo $f_q_descrip_fetch[0][1]; ?>"/>
 <img onclick="third()" onmouseover="third()" class="aside-holder" src="<?php echo $f_q_descrip_fetch[0][2]; ?>"/>
 <img onclick="fourth()" onmouseover="fourth()" class="aside-holder" src="<?php echo $f_q_descrip_fetch[0][3]; ?>"/>
 <img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
 <img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
 <img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
 <img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
 <img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
 <img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
</div>

<div class="container-main">
  <img id="main" width="679" height="661" src="<?php echo $f_q_descrip_fetch[0][4]; ?>"/>
</div>

<div class="container-content">
  <h2><?php echo $f_q_descrip_fetch[0][8]; ?></h2>
  <h2>Price:<?php echo $f_q_descrip_fetch[0][9]; ?></h2>
  <ul>
    <li><?php echo $f_q_descrip_fetch[0][10]; ?></li>
	<br/>
	<li><?php echo $f_q_descrip_fetch[0][11]; ?></li>
	<br/>
	<li><?php echo $f_q_descrip_fetch[0][12]; ?></li>
	<br/>
	<li><?php echo $f_q_descrip_fetch[0][13]; ?></li>
	<br/>
	<li><?php echo $f_q_descrip_fetch[0][14]; ?></li>
	<br/>
  </ul>
</div>

<div class="container-cart">
<form id="form_change" style="padding:10px;" action="" method="post">
<input style="width:0px;visibility:hidden;" name="product_cart_image"  value="<?php echo $f_q_descrip_fetch[0][15]; ?>" type="text">
<input style="width:0px;visibility:hidden;" name="product_name" value="<?php echo $f_q_descrip_fetch[0][8]; ?>" type="text">
 Quantity:<select style="padding: 10px;" name="quantity">
                <option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
		  </select>
	<br><br>
	<!--stock avaialbility-->
	<?php
	$stock_available = $f_q_descrip_fetch[0][18];
	if($stock_available!=0)
	{
		echo "<h2 style=color:green;>In Stock</h2>";
		
	}
	else
	{
		echo "<h2 style=color:red;>Out Of Stock</h2>";
	}
	
	
	
	
	?>
<input type="submit" onclick="getValForm()" <?php if(isset($_SESSION["user"])){ } else{ echo "disabled"; } ?> value="Add to Cart" style="border:2px solid grey;background-color:#f4d078;padding: 10px;width: 150px;">
<br/><br/>
<input type="submit" onclick="changeForm()" <?php if(isset($_SESSION["user"])){ } else{ echo "disabled"; } ?> value="Buy Now" style="border:2px solid grey;background-color:#f0a344;padding: 10px;width: 150px;">
</form>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
<img class="hide" src="/ogs/headphone/bengoo_tb1.jpg"/>
</div>
</div>

<!--animation-->
<script>
						function first()
						{
							var i = document.getElementById("main");
							i.src = "<?php echo $f_q_descrip_fetch[0][4]; ?>";	
						}
						function second()
						{
							var i = document.getElementById("main");
							i.src = "<?php echo $f_q_descrip_fetch[0][5]; ?>";	
						}
						function third()
						{
							var i = document.getElementById("main");
							i.src = "<?php echo $f_q_descrip_fetch[0][6]; ?>";
						}
						function fourth()
						{
							var i = document.getElementById("main");
							i.src = "<?php echo $f_q_descrip_fetch[0][7]; ?>";
						}
						<!--change form action url-->
						function getValForm()
						{
							var x = document.getElementById("form_change");
							x.action = "add_cart.php";
							
						}
						function changeForm()
						{
							var x = document.getElementById("form_change");
							x.action = "buy_list.php";
						}
</script>
</body>
</html>