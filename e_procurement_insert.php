<?php
 include("authenticate.php");
 $c_name = $_POST["c_name"];
 $v_name = $_POST["v_name"];
 $p_name = $_POST["p_name"];
 $quantity = $_POST["quantity"];
 $total_amount = $_POST["total_amount"];
 echo "Send Succesfully";


 $quotation_insert = "INSERT INTO quotation_list(company_name,vendor_name,product_name,quantity,total_amount) VALUES('$c_name','$v_name','$p_name','$quantity','$total_amount')";
 $quotation_insert_fire = mysqli_query($conn,$quotation_insert);

?>