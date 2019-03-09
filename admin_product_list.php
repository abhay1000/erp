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
		.hide
		{
			visibility: hidden;
		}
	 
	 
	 
	 
	 
	 
	 </style>
 
 
 
 
 
 </head>
 <body>
 <div class="nav">
  <center><h2><a href="admin_panel.php">Admin Panel</a></h2></center>
 </div>
 
<!--fetch wholesaler data-->
<?php
 include("authenticate.php");
 $product_list_disp = "SELECT * FROM descriptor";
 $product_list_disp_fire = mysqli_query($conn,$product_list_disp);
 $product_list_disp_fire_result = mysqli_fetch_all($product_list_disp_fire,MYSQLI_NUM);
 //print_r($product_list_disp_fire_result);
 $count = mysqli_num_rows($product_list_disp_fire);
?>
 

 
 
 
 
 
 <hr>
 <h2 class="left-pad text-align">Product List</h2>
 <hr>

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

 <hr>
 <h2 class="left-pad text-align">Request List</h2>
 <hr>

  <form action="admin_product_list_forward.php" method="post">
     <center>
	    <table>
		   <tr>
		    <th>Product Name</th>
			<th><input name="pname" type="text"</th>
		   </tr>
		   <tr>
		    <th>Product Quantity</th>
			<th><input name="pquant" type="text"</th>
		   </tr>
		   <tr>
		    <th>Product Price</th>
			<th><input name="pprice" type="text"</th>
		  </tr>
		  <tr>
		    <th>Wholesaler Name</th>
			<th><input name="wname" type="text"</th>
		  </tr>
		  <tr>
		    <th>Status</th>
			<th><input name="status" readonly value="Awaiting" type="text"</th>
		  </tr>
		  <tr>
		    <th colspan="2"><input type="submit"></th>
		  </tr>
		</table>
	 </center>
  </form>
  

 
 </body>
</html>