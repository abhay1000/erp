<?php
include("authenticate.php");
$p_id_email = $_POST["p_id_email"];
//echo $p_id_email;
$delivery_list = "UPDATE tracking_status SET status='On the Way For Delivery' WHERE p_id_email='$p_id_email'";
$delivery_list_fire = mysqli_query($conn,$delivery_list);
$delivery = "UPDATE tracking_list SET status_delivery='Out of Delivery' WHERE p_id_email='$p_id_email'";
$delivery_fire = mysqli_query($conn,$delivery);
echo "Delivery";
?>