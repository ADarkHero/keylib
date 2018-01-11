<?php		
	//Zugangsdaten zur Datenbank
	$db_host = "localhost";
	$db_name = "keylib";
	$db_user = "root";
	$db_pass = "";
        $table_name = "steam";
	
	$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
	
        //Reads Column names of the table
        $statement = $pdo->prepare("DESCRIBE $table_name");
	$statement->execute();
	$tables = $statement->fetchAll(PDO::FETCH_COLUMN);
?>