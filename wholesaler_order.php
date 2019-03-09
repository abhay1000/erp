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
	     div.nav
	    {
				color:white;
				background-color: black;
				padding:5px;
	    }
		a
		{
			text-decoration: none;
		}
		.text-align
		{
			text-align: center;
		}
	    .left-pad
		{
			padding-left: 10px;
			
		}
		table,tr,th,td
		{
			border: 2px solid white;
		}
		#hide
		{
			display: none;
		}
		#check
		{
			padding: 10px;
			border:0px;
		}
		
		
	</style>
 </head>
 <body bgcolor="black" alink="white" vlink="white">
 <?php
    include("authenticate.php");
	session_start();
    $order_confirm = "SELECT * FROM tracking_status WHERE wholesaler_name='$_SESSION[w_user]'";
	$order_confirm_fire = mysqli_query($conn,$order_confirm);
	$order_confirm_fire_result = mysqli_fetch_all($order_confirm_fire,MYSQLI_NUM);
    $order_confirm_count = mysqli_num_rows($order_confirm_fire);
 ?>
     <div class="nav">
      <center><h2><a href="wholesaler_panel.php">Wholesaler Panel</a></h2></center>
     </div>
	 
	<hr>
     <h2 class="left-pad text-align">Order List</h2>
    <hr>
 
    <center>
	    <table>
		    <tr>
			    <th>Product</th>
				<th>Product_Name</th>
				<th>Status</th>
				<th>Arrived by</th>
				<th>Confirmation</th>
			</tr>
			<?php
			for($i=0;$i<$order_confirm_count;$i++)
			{
			 echo "<tr>";
			  $image = $order_confirm_fire_result[$i][0];
			  echo "<td>";
			  echo "<img src=$image>";
			  echo "</td>";
			  for($j=1;$j<=8;$j++)
			  {
				  if($j==1 || $j==3 || $j==7)
				  {
				  echo "<td>";
				  echo  $order_confirm_fire_result[$i][$j];
				  echo "</td>";
			       }	  
			   }
			   echo "<td>";
			   echo "<input id=hide type=text value=$_SESSION[w_user]>";
			   $check_confirm = $order_confirm_fire_result[$i][9];
			   echo "<button id=check onclick=loadDoc()>Confirm</button>"; 
			  echo "</td>";
             echo "</tr>";			 	
			}
			?>
		</table>
	</center>
 
 
     <script>
	    function loadDoc()
		{
			var xhttp = new XMLHttpRequest();
			var post_v = document.getElementById("hide").value;
			xhttp.onreadystatechange = function() {
				if(this.readyState==4&this.status==200) {
					document.getElementById("check").innerHTML = this.responseText;
				}
			};
			xhttp.open("POST","wholesaler_order_confirm.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("wholesaler_name="+post_v);
		}
	 </script>
 </body>
</html>