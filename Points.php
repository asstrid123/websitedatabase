<html>






	<body>
	<link type= "text/css" rel="stylesheet" href= "stylepoints.css">
	<div>
		<h3><img class="resize" src="british%20international%20school%20of%20houston.png" alt="the logo"></h3>
	<!--This posts the school banner in the right hand corner-->

	<ul>
	<h2>
	<center>
	<a style="text-decoration:none" href="index.php"> Home</a>
	<a style="text-decoration:none"  href="Points.php">Points</a>
	<a style="text-decoration:none"  href="login.html">Admin Login</a>
	<!-- /*this allows the user to click from page to page -->
	</center>
	<h2>
	</ul>



	<center><h1>House Points</h1> </center>

	<svg height="20" width="2000"><line x1="0" y1="0" x2="10000" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" /></svg>
<?php//Draws a line under the header?>

</div>
<!--<p>View</p>-->
<div>

		<br/>
			<a  href="graphs1.php">View Graph</a>
		<br/>
</div>

<br/>

<div class="colorboxes blue"id= water></div>

<div class="colorboxes yellow" id= air></div>
<div class="colorboxes green" id= earth></div>
<div class="colorboxes red" id= fire></div>

<?php//gives the different colored div boxes?>



	<?php
		DEFINE('DB_USER','root');
		DEFINE('DB_PASSWORD','');
		DEFINE('DB_HOST','localhost');
		DEFINE('DB_NAME','housewebsites');
		$dbc =@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect');
		{
			/*database connection*/
			$q = "SELECT SUM(numberOfPoints) AS totalPoints,houseName FROM housePoints, house WHERE house.houseID= housePoints.houseID GROUP BY house.houseID ORDER BY house.houseID DESC";
			/*sql Statment that sums the total number of points. Retrieves the info from the database Housepoints. Sorts the points by house ID in descending order*/
			$table = @mysqli_query($dbc,$q);


		echo "<table border=1>";
			if($table)
			{
					/* while there is a connection to the database*/
				echo '<script>';
				echo 'var housePoints = [';
				while($row = mysqli_fetch_array($table, MYSQLI_ASSOC))
				{

					echo $row ['totalPoints'].",";
				}

					echo '];document.getElementById("water").innerHTML="<center><h3> Water</h3><center><h5>" + housePoints[0] +"</h5>";';
					echo'document.getElementById("earth").innerHTML="<center><h3> Earth</h3><center><h5>" + housePoints[1] +"</h5>";';
					echo'document.getElementById("fire").innerHTML="<center><h3> Fire</h3><center><h5>" + housePoints[2] +"</h5S>";';
					echo'document.getElementById("air").innerHTML="<center><h3> Air</h3><center><h5>"+ housePoints[3] +"</h5>";';
					echo '</script>';
			}

		}

	/*the javascript that takes the id from the div boxes and places html inside the statment to output the housepoints and the Title */


?>
</body>

</html>