﻿<?php
	$path = $path."games/gamelist.json";			//Read JSON File
	$file = file_get_contents($path, "w+");
	$json = json_decode($file, true);				//Decode JSON FILE
	
	//Search Steam JSON File for specific name
	foreach($json["applist"]["apps"]["app"] as $applist) {	
		//Will we find our game?
		if(stripos($applist["name"], $name) !== false) {
			$foundapp = $applist["name"];
			$foundappid = $applist["appid"];
			
			$steam = getFromSteamByID($foundappid);	//Get Screenshots, Infotext etc.
			
			if($steam != "false"){
				$imagepath = "games/img/".$foundappid.".jpg";
				file_put_contents($imagepath, fopen($steam["picture"], 'r'));	//Save Screenshot locally
				
				//Write game to database
				$statement = $pdo->prepare("INSERT INTO steam (SteamID, SteamName, SteamPicture, SteamText, SteamCustom) 
				VALUES (?, ?, ?, ?, ?)");
				$result = $statement->execute([$foundappid, $foundapp, $imagepath, $steam["description"] , ""]);
				
				break;	//First game found is taken
			}
		}
	}
	
?>