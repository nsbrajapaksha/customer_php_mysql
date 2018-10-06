<?php	
	$server = "localhost";      //name of the server
	$username = "root";              //username of the server
	$password = "";
	$database = "cus_app";       //name of database

	try {
		$connection = mysqli_connect($server, $username, $password, $database);
		if ($connection) {
			//echo "Database connection was successfull";
		}
		
	} catch (Exception $errmsg) {
		echo $errmsg -> getMessage();
	}

?>