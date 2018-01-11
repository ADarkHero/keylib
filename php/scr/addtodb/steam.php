<?php
	$path = "games/gamelist.json";			//Read JSON File
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
				$statement = $pdo->prepare("INSERT INTO steam (".$tables[0].", ".$tables[1].", ".$tables[2].", ".$tables[3].") 
				VALUES (?, ?, ?, ?)");
				$result = $statement->execute([$foundappid, $foundapp, $steam["description"], $imagepath]);
				
				break;	//First game found is taken
			}
		}
	}
	
        
        
        //Read stuff from Steam DB
	function getFromSteamByID($id){
		//This link is used to read out data from steam. To make it work, we need the appid of the specific game(s)
		$apibase = "http://store.steampowered.com/api/appdetails?appids=";
		$api = $apibase.$id;
		
		$steam = file_get_contents($api);	//Link to API with all game names+IDs
		$json = json_decode($steam, true);
		
		if($json[$id]["success"] == "true" && $json[$id]["data"]["type"] == "game"){	//Is it a game?
		
			$game["description"] = $json[$id]["data"]["short_description"];
			
			$game["picture"] = $json[$id]["data"]["header_image"];
			
			return $game;
		
		}
		return "false";
	}
?>