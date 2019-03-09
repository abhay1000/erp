<!DOCTYPE html>
<html>
 <head>
     <style>
	    body
		{
			margin: 0px;
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
 
<!--fetch data-->
<?php
 include("authenticate.php");
 $order_disp = "SELECT * FROM buy_list";
 $order_disp_fire = mysqli_query($conn,$order_disp);
 $order_disp_fire_result = mysqli_fetch_all($order_disp_fire,MYSQLI_NUM);
 //print_r($order_disp_fire_result);
 $count = mysqli_num_rows($order_disp_fire);
 //echo $count;

?>
 
 
 
 
 
 
 
 <hr>
 <h2 class="left-pad text-align">Order Detail</h2>
 <hr>
<center> 
 <table>
    <tr>
	    <th>Sr.No</th>
		<th>Product Name</th>
	    <th>Product Quantity</th>
	    <th style="text-align:center;">Product Price</th>
	    <th>Email Address</th>
	  
	</tr>
	
	
	<?php
	 /*<td></td>*/
	 $x=1;
	 for($i=0;$i<$count;$i++)
	 {
		 echo "<tr>";
		 echo "<td>$x</td>";
	 for($j=1;$j<=5;$j++)
	 {
		 if($j!=4)
		 {
					echo "<td>";
					echo $order_disp_fire_result[$i][$j];
					echo "</td>";
		 }
	 }
	 echo "</tr>";
	 $x++;
	 }
	
	
	
	
	
	?>
	
 
 </table>
</center>
 
 
 
 
 
 </body>
</html>