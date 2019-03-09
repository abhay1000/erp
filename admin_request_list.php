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
	 
	  <hr>
        <h2 class="left-pad text-align">Request List</h2>
      <hr>
	  
	  <?php
	    include("authenticate.php");
	    $request_list = "SELECT * FROM request_list";
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
	  </tr>
	  
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
			echo"</tr>";
			$x++;
		}
	  ?> 
	 </table>
	 
	 
 </center>
 
 
 
 </body>
</html>