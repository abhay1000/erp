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
	#redc
	{
		color: red;
		padding: 10px;
	}
	#blackc
	{
		background-color: black;
	}
	#blackw
	{
		color:black;
	}
	#bg-white
	{
		background-color: white;
	}
	.inline-block
	{
		display: inline-block;
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
<body bgcolor="black" alink="grey" vlink="grey">

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

<!--news display-->
<div id="bg-white">
						<center>
									<div id="bg-white">
									       <h2 id="redc">NEWS</H2>
									       <img width="630" src="news/news1.jpg" />
									       <h1><a href="news/news1.php">Skyrim mod Enderal has its own Steam page</a></h1>
									</div>
						</center>
						<center>
										<div id="bg-white">
												 <div id="blackc" width="400" class="inline-block">
													<img height="180" src="news/news2.jpg"/>
													<h2><a href="news/news2.php">Hand of Fate 2 patch makes<br/> significant improvements <br>to combat</a></h2>
												 </div>
												 <div id="blackc" class="inline-block">
													<img src="news/news3.jpg"/>
													<h2><a href="news/news3.php">Lo-fi horror game Paratopic <br/>gains a Definitive Cut,<br/> comes to Steam</a></h2>
												 </div>
										</div>
						</center>
						<center>
									<div style="width: 630px;">
									<hr>
									<h2 id="blackw" style="font-family: Roboto Condensed,sans-serif;">LATEST NEWS</h2>
									<hr>
									</div>
						</center>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news4.jpg"/>
												</div>
												<div style="padding:5px;" width="300" class="inline-block">
												<h2><a href="news/news4.php">Rockstar explains why Red Dead<br> Redemption 2 has a single protagonist</a></h2>
												<h4 >By Fraser Brown </h4>
												<h4>"This is Arthur Story"</h4>
												<br>
												</div>
											</div>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news5.jpg"/>
												</div>
												<div style="padding:5px;" width="300" class="inline-block">
												<h2><a href="news/news5.php">Fortnite is getting the Monopoly<br/>treatment</a></h2>
												<h4 >By Fraser Brown </h4>
												<h4>Last Car Standing.</h4>
												<br>
												</div>
											</div>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news6.jpg"/>
												</div>
												<div style="padding:5px;" width="300" class="inline-block">
												<h2><a href="news/news6.php">Prey: Mooncrash update celebrates<br/>Arkane's favorite roguelikes and<br/> roguelites</a></h2>
												<h4 >By Jody Macgregor</h4>
												<h4>Including Darkest Dungeon and Rogue<br>Legacy.</h4>
												
												</div>
											</div>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news7.jpg"/>
												</div>
												<div style="padding:5px;" width="300" class="inline-block">
												<h2><a href="news/news7.php">Rebel Galaxy Outlaw, a 'sort-of-prequel'<br/> to space combat sim Rebel Galaxy, out in<br/> 2019</a></h2>
												<h4 >By Samuel Horti</h4>
												<h4>Dogfights and dice</h4>
												
												</div>
											</div>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news8.jpg"/>
												</div>
												<div style="padding:5px;" width="300" class="inline-block">
												<h2><a href="news/news8.php">Sega Mega Drive shoot-'em-up Steel<br/>Empire launches on PC next week</a></h2>
												<h4 >By Samuel Horti </h4>
												<h4>Side-scrolling steampunk shooter.</h4>
												<br>
												</div>
											</div>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news9.jpg"/>
												</div>
												<div style="padding:5px;" width="300" class="inline-block">
												<h2><a href="news/news9.php">Musical adventure Wandersong takes the<br/> stage later this month</a></h2>
												<h4 >By Samuel Horti</h4>
												<h4>Save the world by holding a true</h4>
												<br>
												</div>
											</div>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news10.jpg"/>
												</div>
												<div style="padding:5px;" width="300" class="inline-block">
												<h2 style="margin-top:5px;"><a href="news/news10.php">Blade Symphony's massive Harmonious<br/>Prelude update goes live later this month</a></h2>
												<h4 >By Samuel Horti</h4>
												<h4>New game modes,fighting styles,and on <br/>engine upgrade.</h4>
											    <br/>
												</div>
											</div>
											<div style="margin:0 30% 0 30%;">
												<div class="inline-block">
													  <img src="news/news11.jpg"/>
												</div>
												<div style="padding:5px;" width="3300" class="inline-block">
																<h2 style="margin-top:5px;"><a href="news/news11.php">Batman: Arkham developer Rocksteady<br/> hiring for 'highly anticipated<br/>AAA' game</a></h2>
																<h4 >By Samuel Horti</h4>
																<h4>New job postings suggest an <br/>announcement could be imminent.</h4>
												</div>
											</div>
											
						
</div>


</body>
</html>