


<?php
	
	$userID = $_REQUEST['userID']; 
	$password = $_REQUEST['password']; 
	//Contains the variables from the earlier GET function in the login form
		DEFINE('DB_USER','root');
		DEFINE('DB_PASSWORD','');
		DEFINE('DB_HOST','localhost');
		DEFINE('DB_NAME','housewebsites');

		$dbc =@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect');
		echo $userID." ";
		//connects database
		
		$q = "SELECT * FROM login WHERE userID='".$userID."'";
		//selects the data from login for the specific userr that has logged in
			
		
		
		$table = @mysqli_query($dbc,$q);
		$row= @mysqli_fetch_array($table, MYSQLI_ASSOC);
	
	if ($row['password'] == NULL)
	{
		echo 'User ID and Password are Required';
	}
	// Ensures the user must enter a value
	
	elseif ($row['password'] == $password)
		
	// Validates password in the database is equal to the value entered
		{
		
			header("location: admin.php?houseID=".$row['houseID']);
		//if the password is valid the user is taken to the admin page
		
		}
	
	else
	{
		header("location: errormessage.html");
	}