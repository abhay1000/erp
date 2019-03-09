<?php
include("authenticate.php");
$p_id_email = $_POST["p_id_email"];
$package = "UPDATE tracking_status SET status='Packaged',status_2='Completed' WHERE p_id_email='$p_id_email'";
//echo $package;
$package_fire = mysqli_query($conn,$package);
$package_tracking_list = "UPDATE tracking_list set status_package='Package by Facility' WHERE p_id_email='$p_id_email'";
$package_tracking_list_fire = mysqli_query($conn,$package_tracking_list);
echo "Packaged";


?>