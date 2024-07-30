






<?php
	
	//Contains the variables from the earlier GET function in the login form
		DEFINE('DB_USER','root');
		DEFINE('DB_PASSWORD','');
		DEFINE('DB_HOST','localhost');
		DEFINE('DB_NAME','housewebsites');

		$nickname = $_REQUEST['nickname']; 
		$house = $_REQUEST['house'];
	
		setcookie('nickname', $nickname, time() + (86400 * 30), "/");
		setcookie('house',$house, time() + (86400 * 30), "/");
		
		header("location: index.php");
		
		//connects database
		

	
	  /* if(isset($_COOKIE["nickname"]))
	   {
			echo "Hi " . $_COOKIE["nickname"];
	   } 
	   else
	   {
			echo "Welcome Guest!";
	   }*/
	?>