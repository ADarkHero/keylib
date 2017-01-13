<?php
	$name = $_POST["name"];
	$type = $_POST["type"];
	
	require_once($path."php/scr/database.php");		//Connect to database
	
	//Search Steam JSON File for specific name
	if($type == "Steam"){
		include $path.'php/scr/addtodb/steam.php';
	}

	
	
	
	
	/******************************
		User Notifications
	******************************/
	if($type == "Steam"){
		if(isset($result) && $result){
			echo '<button type="button" class="btn btn-success">'.$foundapp.' ('.$foundappid.') was successfully written to the database!</button>';
		}
		else{
			echo '<button type="button" class="btn btn-danger">Game already in database or not found on Steam!</button>';
		}
	}
	else{
		echo '<button type="button" class="btn btn-warning">I am error!</button>';
	}
	
?>

