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
	table,tr,th,td
	{
		border: 2px solid black;
	}
	.text-align
	{
			text-align: center;
	}
	.inline-block
	{
		display: inline-block;
	}
	.center-plate
	{
		text-align: center;
	}	
	</style>
 </head>
 <body alink="white" vlink="white">
    <div class="nav">
        <center><h2><a href="wholesaler_panel.php">Wholesaler Panel</a></h2></center>
    </div>
	
	<hr>
     <h2 class="left-pad text-align">Product List</h2>
    <hr>
	
	<?php
	 include("authenticate.php");
	 session_start();
	  include("authenticate.php");
	 $product_list_disp = "SELECT * FROM descriptor WHERE wholesaler_name='$_SESSION[w_user]'";
	 $product_list_disp_fire = mysqli_query($conn,$product_list_disp);
	 $product_list_disp_fire_result = mysqli_fetch_all($product_list_disp_fire,MYSQLI_NUM);
	 //print_r($product_list_disp_fire_result);
	 $count = mysqli_num_rows($product_list_disp_fire);	
	?>
	
	
	
  <center>
    <table>
	  <tr>
	    <th>Sr.No</th>
	    <th>Product Name</th>
        <th>Price</th>
		<th>Product id</th>
		<th>Wholesaler Name</th>
		<th>Stock</th>
	  </tr>
	  
	 
	  <?php
	    $x=1;
		for($i=0;$i<$count;$i++)
		{
			echo "<tr>";
			echo "<td>$x</td>";
			for($j=8;$j<=19;$j++)
			{
		     if($j==8 || $j==9 || $j==16 || $j==17 || $j==18 )
			 {
				echo "<td>";
				echo $product_list_disp_fire_result[$i][$j];
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