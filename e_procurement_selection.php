<!DOCTYPE html>
<html>
 <head>
    <style>
    table,th
	{
		border: 2px solid grey;
		
	}
 
 
    </style>
 </head>
 <body>
    <center> 
	  <h2>Quotation List</h2>
	   <hr>
	  <h2>Selected Quotation</h2>
	  <hr>
	  <table>
	    <tr>
		  <th>Company Name</th>
		  <th>Vendor Name</th>
		  <th style="width:650px;">Product Name</th>
		  <th>Quantity</th>
		  <th>Total Amount</th>
		</tr>
		<?php
		include("authenticate.php");
		$quotation_selection = "SELECT *, MIN(total_amount) FROM quotation_list";
		$quotation_selection_fire =  mysqli_query($conn,$quotation_selection);
		
		$quotation_selection_fire_result = mysqli_fetch_all($quotation_selection_fire,MYSQLI_NUM);
		for($i=0;$i<1;$i++)
		{
			echo "<tr>";
			for($j=0;$j<=4;$j++)
			{
				echo "<th>";
				echo $quotation_selection_fire_result[$i][$j];
				echo "</th>";
			}	
			echo "</tr>";
		}
		?>
	  </table>
	</center>
  
  
  
  
  
  
  
 </body>
</html>