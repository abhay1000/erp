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
    .left-pad
		{
			padding-left: 10px;
			
		}
		.text-align
		{
			text-align: center;
		}
	.inline-block:hover
	{
		background-color: blue;
	}
	.center-plate
	{
		text-align: center;
	}
	table,tr,th,td
		{
			border: 2px solid white;
		}
	</style>
 </head>
 <body bgcolor="black" alink="white" vlink="white">
    <div class="nav">
        <center><h2><a href="admin_panel.php">Admin Panel</a></h2></center>
    </div>
	
	<hr>
        <h2 class="left-pad text-align">Order Tracker List</h2>
    <hr>
	<?php
	include("authenticate.php");
	//fetching order tracking status list
	$order_status = "SELECT * FROM tracking_status";
	$order_status_fire = mysqli_query($conn,$order_status);
	$order_status_fire_result = mysqli_fetch_all($order_status_fire,MYSQLI_NUM);
	$order_status_count = mysqli_num_rows($order_status_fire);
	?>
	<center>
	 <table>
	    <tr>
		  <th>Product</th>
		  <th>Product Name</th>
		  <th>p_id_email</th>
		  <th>Status</th>
		  <th>Status 1</th>
		  <th>Status 2</th>
		  <th>Status 3</th>
		  <th>Arrived By</th>
		  <th>Wholesaler Name</th>
		  <th>Arrival Day</th>
		  <th>Arrival Start</th>
		  <th>Package Start</th>
		  <th>Trasnsit Start</th>
		  <th>Delivery Start</th>
		  
		</tr>
	<?php
	    for($i=0;$i<$order_status_count;$i++)
		{
			echo "<tr>";
			 $image = $order_status_fire_result[$i][0];
			 echo "<td>";
			 echo "<img src=$image>";
			 echo "</td>";
			 for($j=1;$j<=8;$j++)
			 {
				 echo "<td>";
				 if($j==2)
				 {
					 $p_id_email = $order_status_fire_result[$i][$j];
					echo "<input type=text readonly id=p_id_email value=$p_id_email>"; 
				 }
				  else
				 {	 
				 echo $order_status_fire_result[$i][$j];
				 }
				 echo "</td>"; 
			 }
			 echo "<td>";
			 echo "<input id=arr_day type=text/>";
			 echo "</td>";
			 echo "<td>";
			 echo "<button id=arr_button onclick=textButton()>Arrival</button>";
			 echo "</td>";
			 echo "<td>";
			  echo "<button id=pac_button onclick=pacDoc()>Package</button>";
			 echo "</td>";
			 echo "<td>";
			 echo "<button id=trans_button onclick=transDoc()>Trasnsist</button>";
			 echo "</td>";
			 echo "<td>";
			 echo "<button id=deli_button onclick=deliDoc()>Delivery</button>";
			 echo "</td>";
			 
            echo "</tr>";		 
		}
	?>
	 </table>
	</center>
	
	
	<script>
	function pacDoc()
	{
		var xhttp = new XMLHttpRequest();
			var p_id_email = document.getElementById("p_id_email").value;
			xhttp.onreadystatechange = function() {
				if(this.readyState==4&this.status==200) {
					document.getElementById("pac_button").innerHTML = this.responseText;
				}
			};
			xhttp.open("POST","admin_order_package.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("p_id_email="+p_id_email);	
	}
	function transDoc()
	{
		var xhttp = new XMLHttpRequest();
			var p_id_email = document.getElementById("p_id_email").value;
			xhttp.onreadystatechange = function() {
				if(this.readyState==4&this.status==200) {
					document.getElementById("trans_button").innerHTML = this.responseText;
				}
			};
			xhttp.open("POST","admin_order_transist.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("p_id_email="+p_id_email);		
	}
	function deliDoc()
	{
		var xhttp = new XMLHttpRequest();
			var p_id_email = document.getElementById("p_id_email").value;
			xhttp.onreadystatechange = function() {
				if(this.readyState==4&this.status==200) {
					document.getElementById("deli_button").innerHTML = this.responseText;
				}
			};
			xhttp.open("POST","admin_order_delivery.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("p_id_email="+p_id_email);	
	}
	function textButton()
	{
		var xhttp = new XMLHttpRequest();
			var post_v = document.getElementById("arr_day").value;
			var p_id_email = document.getElementById("p_id_email").value;
			xhttp.onreadystatechange = function() {
				if(this.readyState==4&this.status==200) {
					document.getElementById("arr_button").innerHTML = this.responseText;
				}
			};
			xhttp.open("POST","admin_order_arrival.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("arrival_day="+post_v+"&p_id_email="+p_id_email);	
	}
	</script> 
 </body>
</html>