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
	

    
	<center><h1>Sign In</h1> </center>

	<svg height="20" width="2000"><line x1="0" y1="0" x2="10000" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" /></svg>

</body>


<center><div class="inputdivboxes">	
	<body>
	<center><p class="inputheader"> Make a Post.</p>
	<fieldset> 
	
	<form action= uploadpost.php method="get" >
  <p><label>Post Title: <input type="int" name="postTitle" size="20" maxlength="55" /> </label></p> 
  <textarea name="posttext" id="fileToUpload"
 style="height:100px;width:450px">Write your post here.</textarea>
<center><label>houseID: <select name="houseID">  <option value="1">Air</option>  
				<option value="2">Fire</option>  <option value="3">Earth</option> <option value="4">Water</option></select></label></center> <value=<?php  $_GET['houseID']?> /></label></center>
<!--Allows the user to input a post into the database. The get function automatically displays the houseID that was retreived on the login page-->
  <input type="Submit" value="Upload" name="submit">
 
	
	
	</fieldset>
		</form>
	</div>
	
	<center><div class="inputdivboxes">	
	<body>
	
	<center><p class="inputheader"> Add House Points.</p>
		<form method = "get" action = insertpoints.php>
      <fieldset>
	  
		<p><center><label>HouseID: <input type="int" name="houseID" size="20" maxlength="55" value=<?php echo $_GET['houseID']?> /> </label></p> 
		<p><center><label>Housepoints: <input type="int" name="numberOfPoints" size="20" maxlength="55" /> </label></p> 
	  <p><center><label>Week Number: <input type="int" name="weekNumber" size="20" maxlength="55" /> </label></p> 
	  </fieldset>  <p align="center"><input type="submit" name="submit" value="Submit the Points" /></p> 
	   </form> 
	</body>
	</div>
	<!Allows the user to input housepoints into the database>
	
	
	
	
	
	</body>
	
	
</html>