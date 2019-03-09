<!DOCTYPE html>
<html>
 <head>
     <style>
	    body
		{
			margin: 0px;
			font-family:sans-serif;
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
			border: 2px solid black;
		}
	 
	 
	 
	 
	 
	 
	 </style>
 
 
 
 
 
 </head>
 <body alink="white" vlink="white">
 <div class="nav">
  <center><h2><a href="admin_panel.php">Admin Panel</a></h2></center>
 </div>
 
<!--fetch wholesaler data-->
<?php
 include("authenticate.php");
 $wholesaler_disp = "SELECT * FROM wholesaler_credential";
 $wholesaler_disp_fire = mysqli_query($conn,$wholesaler_disp);
 $wholesaler_disp_fire_result = mysqli_fetch_all($wholesaler_disp_fire,MYSQLI_NUM);
 //print_r($cust_disp_fire_result);
 $count = mysqli_num_rows($wholesaler_disp_fire);
?>
 

 
 
 
 
 
 <hr>
 <h2 class="left-pad text-align">Wholesaler Detail</h2>
 <hr>

  <center>
    <table>
	  <tr>
	    <th>Sr.No</th>
	    <th>Username</th>
        <th>Email Address</th>
		<th>Password</th>
		<th>Mobile No</th>
		<th>Balance</th>
	  </tr>
	  
	  
	  <?php
	    $x=1;
		for($i=0;$i<$count;$i++)
		{
			echo "<tr>";
			echo "<td>$x</td>";
			for($j=0;$j<=4;$j++)
			{
				echo "<td>";
				echo $wholesaler_disp_fire_result[$i][$j];
				echo "</td>";
			}
			echo "</tr>";
			$x++;
			
		}
	  
	  
	  ?>
	 
	</table>
 </center>
 
 
 
 
 
 </body>
</html>