<?php 
		
    $houseID = $_GET['houseID'];
	$posttext = $_GET['posttext'];
	$postTitle = $_GET['postTitle'];
		DEFINE('DB_USER','root');
		DEFINE('DB_PASSWORD','');
		DEFINE('DB_HOST','localhost');
		DEFINE('DB_NAME','housewebsites');
		/* connects to the database*/
		
		
		$dbc =@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect');
		$q="INSERT INTO postings( houseID, posttext, postTitle) VALUES ('$houseID','$posttext','$postTitle')"; 
		
		
	$r = @mysqli_query($dbc,$q);
	
	if ($r)
	{
		echo "Post was Successful.";
		
		
	}
	
	else
	{
		echo "Post error";
	}
	/*An error check the determines whether or not the post has been uploaded */
?>  
<html>
<a style="text-decoration:none"  href="index.php">view post?</a>
<!allows the user to view the points that were posted>
</html>