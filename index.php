<?php
if(isset($_COOKIE["nickname"]))
	   {
				header("location: home.php");
	   } 
	   else
	   {
				header("location: directhouse.html");
	   }
?>