<?php
include("authenticate.php");
$p_id_email = $_POST["p_id_email"];
//echo $p_id_email;
$transist = "UPDATE tracking_status SET status='Transisted',status_3='Completed' WHERE p_id_email='$p_id_email'";
$transist_fire = mysqli_query($conn,$transist);
$transist_list = "UPDATE tracking_list SET status_transist='Transisted to Nearby Facility' WHERE p_id_email='$p_id_email'";
$transist_list_fire = mysqli_query($conn,$transist_list);
echo "Transisted";


?>