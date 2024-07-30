
<HTML>
	<BODY> 
		<TITLE> JavaScript Tutorial </TITLE>
		
		<?php
				DEFINE('DB_USER','root');
		DEFINE('DB_PASSWORD','');
		DEFINE('DB_HOST','localhost');
		DEFINE('DB_NAME','housewebsites');
		$dbc =@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect');
		
			/*database connection*/
			$q = "SELECT SUM(numberOfPoints) AS totalPoints,houseName FROM housePoints, house WHERE house.houseID= housePoints.houseID GROUP BY house.houseID ORDER BY house.houseID DESC";
		
		
		$result = @mysqli_query($dbc,$q);
		echo " <script>";
		echo "function drawGraph()";
			echo "{";
				
				
			echo " var yValues = [";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			
			{
				echo $row['totalPoints'].",";
			}
				
				echo	"];";
		?>
			var houseColors = ["blue","green","red","yellow"]
				var canvas = document.getElementById("myCanvas");
				var ctx = canvas.getContext("2d");
	
				ctx.moveTo(10,10);
				ctx.lineTo(10,390);
				
				ctx.moveTo(10,390);
				ctx.lineTo(390,390);
			
			// sets color and set parameters for the graph 
				
				var max=0;
			for (counter=0; counter<4; counter++)
			{
				if (yValues[counter]> max)
				{ 
					max= yValues[counter];
				
				}
				
				
				
			}	
			
				var scale = 380/max;	
		
				xpos = 10;
				
				
				for(x = 0; x<=3; x++)
				{
					ypos = 390-(yValues[x]*scale);
					ctx.fillStyle= houseColors[x];
					ctx.fillRect(xpos,ypos,95,yValues[x]*scale);
					xpos=xpos+95;
				}
				
			// draws and fills the color blocks	
				
				ctx.stroke();
			}
		</script>
		
		
		
		</HEAD>
	
	
		

	<body onload="drawGraph()">
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
	

    
	<center><h1>House Graph</h1> </center>

	<svg height="20" width="2000"><line x1="0" y1="0" x2="10000" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" /></svg>

</body>



	<style>
	
		h3 img.resize {
			width:400px;
		}
		
		h2{

			font-size: 20px;
			font-family:"Courier New";
			color: #ffffff ;
			
			
		}
		a:visited{
			color: #ffffff ;
		}
		section div, h2{
			background: #44B7C8 ;
			width:100%;
			margin: 20px;
			}
		
		h1 {
			font-family:"Courier New";
			
			}
	</style>
		
		
		
					
				
		<canvas id="myCanvas" width ="400" height = "400" style="border:1px solid #000000;"></canvas>
	</BODY>
</HTML>


	