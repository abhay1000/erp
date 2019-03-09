<?php
include("authenticate.php");
$q = $_POST["wholesaler_name"];
$order_validate_check = "SELECT * FROM tracking_status WHERE wholesaler_name='$q'";
$order_validate_check_fire = mysqli_query($conn,$order_validate_check);
$order_validate_check_fire_result = mysqli_fetch_all($order_validate_check_fire,MYSQLI_NUM);
$p_id_email = $order_validate_check_fire_result[0][2];
//print_r($order_validate_check_fire_result);
$order_validate_cfr = $order_validate_check_fire_result[0][9];
if($order_validate_cfr!='Confirm')
{
		$order_await_confirm = "UPDATE tracking_status SET status='Confirm',status_1='Completed',status_2='In Progress',status_3='In Progress',status_wholesaler='Confirm' WHERE wholesaler_name='$q'";
		$order_await_confirm_fire = mysqli_query($conn,$order_await_confirm);
		$tracking_insert = "INSERT INTO tracking_list(status_wholesaler,p_id_email) VALUES('Order Confirm By Seller','$p_id_email')";
		$tracking_insert_fire = mysqli_query($conn,$tracking_insert);
		echo "Confirmed";
}
else
{
	echo "Confirm";
}
?>