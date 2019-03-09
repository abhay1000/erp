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
 <script>
 function loadDoc()
 {
	 var xhttp = new XMLHttpRequest();
	 xhttp.onreadystatechange = function() {
		 if(this.readyState == 4 && this.status == 200) {
			 document.getElementById("demp").innerHTML = this.responseTest;
		 }
	 };
	 xhttp.open("GET","add_cart.php",true);
	 xhttp.send();	 
 }
</script>
</head>
<body bgcolor="black" alink="grey" vlink="grey">

<?php
 /*
 session_start();
 include("authenticate.php");
 $product_id = "";
 $product_id = $_POST['product_id'];
 $_SESSION["p_id"] = $product_id;
 $descrip_fetch = "SELECT * FROM descriptor WHERE product_id='$product_id'";
 $q_descrip_fetch = mysqli_query($conn,$descrip_fetch);
 $f_q_descrip_fetch = mysqli_fetch_all($q_descrip_fetch,MYSQLI_NUM);
 /*print_r($f_q_descrip_fetch);*/

?>

<center>
<div class="logo">
    <img src="logo.jpg" width="150"/>
</div>
</center>

<center>
<div class="nav">
 <ul class="nav-bar"> 
    <li><a href="index.php">Home</a></li>
	<li><a href="">Portal</a></li>
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
<form style="padding:10px;">
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
<button id="b1" style="border:2px solid grey;background-color:#f4d078;padding: 10px;width: 150px;">Add to Cart</button>
<br/><br/>
<button style="border:2px solid grey;background-color:#f0a344;padding: 10px;width: 150px;">Buy Now</button>
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

<!--
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
</script>
-->
<!--ajax bg-->

<!--cart add-->
<?php
/*
 include("authenticate.php");
 

		 $quantity = $product_name = $product_cart_image = "";
				 $product_cart_image = $_POST['product_cart_image'];
				 $product_name = $f_q_descrip_fetch[0][8];
				 $quantity = $_POST['quantity'];
				 
		 
		 $user = $_SESSION["user"];
         $p_id_mail = $product_id. '_' .$user;
		 echo $p_id_mail;
		 $price = $f_q_descrip_fetch[0][9];
 $add_cart = "INSERT INTO cart(product_image,product_name,product_quantity,product_price,email_address,p_id_mail) VALUES('$product_cart_image','$product_name','$quantity','$price','$user','$p_id_mail')";
 echo $add_cart;
 //echo $f_q_descrip_fetch[0][9];
 //echo $product_id;
 echo $_SESSION["product_id"];
 if(mysqli_query($conn,$add_cart))
 {
	 
 }
 /*echo $product_cart_image . $product_name . $quantity;*/
?>
<div id="demo">ajax res</div>

</body>
</html>