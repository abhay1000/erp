<!DOCTYPE html>
<html>
 <head>
     <style>
	    body
		{
			margin: 0px;
			font-family:sans-serif;
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
 <body>
 <div class="nav">
  <center><h2>Admin Panel</h2></center>
 </div>
 
<!--fetch cust data-->
<?php
 include("authenticate.php");
 $cust_disp = "SELECT * FROM credentials";
 $cust_disp_fire = mysqli_query($conn,$cust_disp);
 $cust_disp_fire_result = mysqli_fetch_all($cust_disp_fire,MYSQLI_NUM);
 //print_r($cust_disp_fire_result);
 $count = mysqli_num_rows($cust_disp_fire);
?>
 

 
 
 
 
 
 <hr>
 <h2 class="left-pad text-align">Customer Detail</h2>
 <hr>

  <center>
    <table>
	  <tr>
	    <th>Sr.No</th>
	    <th>Username</th>
        <th>Email Address</th>
		<th>Password</th>
		<th>Mobile No</th>
		<th>Address</th>
		<th>Balance</th>
	  </tr>
	  
	  
	  <?php
	    $x=1;
		for($i=0;$i<$count;$i++)
		{
			echo "<tr>";
			echo "<td>$x</td>";
			for($j=0;$j<=5;$j++)
			{
				echo "<td>";
				echo $cust_disp_fire_result[$i][$j];
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