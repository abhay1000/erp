<?php
 include("authenticate.php");
 $arr_day = $_POST["arrival_day"];
 $p_id_email = $_POST["p_id_email"];
 $arrival_day_update = "UPDATE tracking_status SET arrived_by='$arr_day' WHERE p_id_email='$p_id_email'";
 $arrival_day_update_fire = mysqli_query($conn,$arrival_day_update);
 echo "Arrival";




?>