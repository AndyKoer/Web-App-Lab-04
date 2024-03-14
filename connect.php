<?php

	$connect = new mysqli("localhost", "root", "", "jbustore_db");
	
	
	
	
			if($connect->connect_errno)
			{
			
				die('Could not answer: ' . $connect->connect_errno);
			}


?>
