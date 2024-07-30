<?php 
	
	$houseID = $_GET['houseID'];	
    $weekNumber = $_GET['weekNumber'];
	$numberOfPoints = $_GET['numberOfPoints'];
		DEFINE('DB_USER','root');
		DEFINE('DB_PASSWORD','');
		DEFINE('DB_HOST','localhost');
		DEFINE('DB_NAME','housewebsites');
		/* connects to the database*/
		
		$dbc =@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect');
		$q="INSERT INTO `housepoints`(`houseID`, `weekNumber`, `numberOfPoints`) VALUES ('$houseID','$weekNumber','$numberOfPoints')"; 
		
	$r = @mysqli_query($dbc,$q);
	
		
	if ($r)
	{
		echo "Points Uploaded.";
		
		
	}
	
	else
	{
		echo "Post error";
	}
	/*An error check the determines whether or not the points have been uploaded */
?> 
<html>
<a style="text-decoration:none"  href="Points.php">Go back?</a>
</html>