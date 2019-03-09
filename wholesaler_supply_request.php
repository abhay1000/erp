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
       <center><h2><a href="wholesaler_panel.php">Wholesaler Panel</a></h2></center>
     </div>
	 
	  <hr>
        <h2 class="left-pad text-align">Request List</h2>
      <hr>
	  
	  <?php
	  session_start();
	    include("authenticate.php");
	    $request_list = "SELECT * FROM request_list WHERE wholesaler_name='$_SESSION[w_user]'";
		$request_list_fire = mysqli_query($conn,$request_list);
		$request_list_fire_result = mysqli_fetch_all($request_list_fire,MYSQLI_NUM);
		$count = mysqli_num_rows($request_list_fire);
	    //print_r($request_list_fire_result);
	    
		
	  
	  
	  
	  
	  ?>
	  
	  
	  
	  
	  
	  
	  
 <center>
    <table>
	  <tr>
	    <th>Sr.No</th>
	    <th>Product Name</th>
        <th>Product Quantity</th>
		<th>Product Price</th>
		<th>Wholesaler Name</th>
		<th>Status</th>
		<th>Supply</th>
	  </tr>
	  <form action="wholesaler_supply_request.php" method="post">
	  <?php
	    
	  $x=1;
		for($i=0;$i<$count;$i++)
		{
			echo "<tr>";
			echo "<td style=text-align:center;>$x</td>";
			for($j=0;$j<=4;$j++)
			{
				echo "<td style=text-align:center;>";
				echo $request_list_fire_result[$i][$j];
				echo "</td>";
				
			}
			echo "<td><input name=confirmation type=submit value=Supply></td>";
			echo"</tr>";
			$x++;
		}
	  ?> 
	  </form>
	 </table>	 
 </center>
 
 <?php
	 include("authenticate.php");
	 if(isset($_POST["confirmation"]))
	 {
			 $supply = "UPDATE request_list SET status='Completed' WHERE wholesaler_name='$_SESSION[w_user]'";
			 $supply_fire = mysqli_query($conn,$supply);
			 $stock_quantity = $request_list_fire_result[0][1];
			 $update_descriptor = "UPDATE descriptor SET stock='$stock_quantity' WHERE wholesaler_name='$_SESSION[w_user]'";
			 $update_descriptor_fire = mysqli_query($conn,$update_descriptor);
			
	 }
	 
	 ?>
 
 
 
 </body>
</html>