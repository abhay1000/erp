<!DOCTYPE html>
<html>
  <head>
    <style>
	   body
	   {
		   font-family: sans-serif;
	   }
	   table
	   {
		   border: 3px dashed red;
		   padding: 20px;
		   border-radius: 5px;  
	   }
	   tr,th
	   {
		   padding: 10px;
	   }
	   input,select
	   {
		   padding: 5px;
		   outline: 0px;
	   }
	</style>
  </head>
  <body>
    <center><h2>Quotation Form</h2></center>
	<center>
	    <table>
		    <tr>
			    <th>Company Name</th>
				<th><input id="company_name" type="text"/></th>
			</tr>
			<tr>
			    <th>Vendor Name</th>
				<th><input id="vendor_name" type="text"/></th>
			</tr>
			<tr>
			    <th>Product Name</th>
				<th>
				<select id="product_name" style="width:180px;" name="product_name">
			      <option value="BENGOO G9000 Stereo Gaming Headset for PS4, PC, Xbox One Controller, Noise Cancelling Over Ear Headphones with Mic, LED Light, Bass Surround, Soft Memory Earmuffs for Laptop Mac Nintendo Switch Games">BENGOO G9000 Stereo Gaming Headset for PS4, PC, Xbox One Controller, Noise Cancelling Over Ear Headphones with Mic, LED Light, Bass Surround, Soft Memory Earmuffs for Laptop Mac Nintendo Switch Games</option>
			      <option value="Corsair Void PRO Surround Gaming Headset - Dolby 7.1 Surround Sound Headphones for PC - Works with Xbox One, PS4, Nintendo Switch, iOS and Android - Carbon">Corsair Void PRO Surround Gaming Headset - Dolby 7.1 Surround Sound Headphones for PC - Works with Xbox One, PS4, Nintendo Switch, iOS and Android - Carbon</option>
			      <option value="HyperX Cloud Stinger Gaming Headset - Lightweight Design - Flip to Mute Mic - Memory Foam Ear Pads - Built in Volume Controls - Works with PC, PS4, PS4 PRO, Xbox One, Xbox One S (HX-HSCS-BK/NA)">HyperX Cloud Stinger Gaming Headset - Lightweight Design - Flip to Mute Mic - Memory Foam Ear Pads - Built in Volume Controls - Works with PC, PS4, PS4 PRO, Xbox One, Xbox One S (HX-HSCS-BK/NA)</option>
				  <option value="Logitech G430 7.1 DTS Headphone: X and Dolby Surround Sound Gaming Headset for PC, Playstation 4  On-Cable Controls  Sports-Performance Ear Pads  Rotating Ear Cups  Light Weight Design">Logitech G430 7.1 DTS Headphone: X and Dolby Surround Sound Gaming Headset for PC, Playstation 4  On-Cable Controls  Sports-Performance Ear Pads  Rotating Ear Cups  Light Weight Design</option>
				  <option value="ONIKUMA Gaming Headset - Headset Gaming Headphone for PS4, Xbox One (Adapter Need), Nintendo Switch (Audio) PC Gaming Headset with Crystal Clear Sound, LED Lights & Noise-canceling Microphone (K5-N)">ONIKUMA Gaming Headset - Headset Gaming Headphone for PS4, Xbox One (Adapter Need), Nintendo Switch (Audio) PC Gaming Headset with Crystal Clear Sound, LED Lights & Noise-canceling Microphone (K5-N)</option>
				  <option value="Razer Kraken 7.1 V2: 7.1 Surround Sound - Retractable Noise-Cancelling Mic - Lightweight Aluminum Frame - Gaming Headset Works with PC, PS4, Xbox One, Switch, Mobile Devices - Black">Razer Kraken 7.1 V2: 7.1 Surround Sound - Retractable Noise-Cancelling Mic - Lightweight Aluminum Frame - Gaming Headset Works with PC, PS4, Xbox One, Switch, Mobile Devices - Black</option>
				  <option value="SADES SA807 Gaming Headset Headphone Stereo Sound 3.5mm Wired with Mic for PC/New Xbox One/PS4">SADES SA807 Gaming Headset Headphone Stereo Sound 3.5mm Wired with Mic for PC/New Xbox One/PS4</option>
				  <option value="Sades SA920 3.5mm Wired Stereo Gaming Over Ear Headset with Microphone and Revolution Volume Control for Xbox One / Xbox 360 / PS4 / PC /Cell phones / iPad (Black/White)">Sades SA920 3.5mm Wired Stereo Gaming Over Ear Headset with Microphone and Revolution Volume Control for Xbox One / Xbox 360 / PS4 / PC /Cell phones / iPad (Black/White)</option>
				  <option value="V-MODA Crossfade M-80 Vocal On-Ear Noise-Isolating Metal Headphone (Shadow)">V-MODA Crossfade M-80 Vocal On-Ear Noise-Isolating Metal Headphone (Shadow)</option>
				</th>
			</tr>
			<tr>
			    <th>Quantity</th>
				<th><input id="quantity" value="500" readonly type="text"/></th>
			</tr>
			<tr>
			    <th>Total Amount(Rs)</th>
				<th><input id="total_amount" type="number"/></th>
			</tr>
			<tr>
				<th colspan="2"><button onclick="sendButton()" style="border:0px;padding: 10px;width:490px;">Send</button>
			</tr>
			<tr>
			 <th colspan="2"><h2 id="demo"></h2></a>
			</tr>
		</table>
	</center>
	
	
	<script>
	  function sendButton()
	{
		var xhttp = new XMLHttpRequest();
		var company_name = document.getElementById("company_name").value;
		var vendor_name = document.getElementById("vendor_name").value;
		var product_name = document.getElementById("product_name").value;
		var quantity = document.getElementById("quantity").value;
		var total_amount = document.getElementById("total_amount").value;
		
			xhttp.onreadystatechange = function() {
				if(this.readyState==4&this.status==200) {
					document.getElementById("demo").innerHTML = this.responseText;
				}
			};
			xhttp.open("POST","e_procurement_insert.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("c_name="+company_name+"&v_name="+vendor_name+"&p_name="+product_name+"&quantity="+quantity+"&total_amount="+total_amount);
				
	}
	</script>
	
	
	
	
	
	
	
  </body>
</html>