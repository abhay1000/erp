<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
    <?php
	 session_start();
	 echo $_SESSION["user"];
	 echo $_SESSION["p_id"];
	
	?>
 </body>
</html>