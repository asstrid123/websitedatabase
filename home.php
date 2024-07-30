<html>
	
<head>
	<link type= "text/css" rel="stylesheet" href= "style.css">


</head>

<body>

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
	

    
	<center><h1>House Anounncements</h1> </center>

	<svg height="20" width="2000"><line x1="0" y1="0" x2="10000" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" /></svg>

	<BR><a  style="color:black" href="directhouse.html">not you?</a>
	
<?php
			
			$nickname = $_COOKIE['nickname']; 
			$house = $_COOKIE['house']; 
			// $houseID = ($_REQUEST['houseID']);
			// $posttext = ($_REQUEST['posttext']);
			// $postTitle = ($_REQUEST['postTitle']);
			DEFINE('DB_USER','root');
			DEFINE('DB_PASSWORD','');
			DEFINE('DB_HOST','localhost');
			DEFINE('DB_NAME','housewebsites');
			$dbc =@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect');
			//Database Connection
	
			$q= "SELECT * FROM postings WHERE houseID='".$_COOKIE['house']."' ORDER BY dateCreated DESC";

			// Sql statement to select from the database postings and ordering the posts by date in descending order
	
			$result = @mysqli_query($dbc,$q);
			//mysqli requests the information
	
	
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{?>

	
				<center><div class = "post">
				<center><h4><?php echo $row['postTitle'];?></h4></center>
				<center><p><?php echo $row['posttext'];?></p></center>

				<sub><?php echo  $row['dateCreated'];?></sub>
				</div>
				</center>
			<?php
			}		
	?>
  
	
	
	
</body>	
	
	
</html>