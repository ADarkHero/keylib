<?php		
	//Zugangsdaten zur Datenbank
	$db_host = "localhost";
	$db_name = "keylib";
	$db_user = "root";
	$db_pass = "";
	
	$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
	
	
	//Read stuff from Steam DB
	function getFromSteamByID($id){
		//This link is used to read out data from steam. To make it work, we need the appid of the specific game(s)
		$apibase = "http://store.steampowered.com/api/appdetails?appids=";
		$api = $apibase.$id;
		
		$steam = file_get_contents($api);	//Link to API with all game names+IDs
		$json = json_decode($steam, true);
		
		if($json[$id]["success"] == "true" && $json[$id]["data"]["type"] == "game"){	//Is it a game?
		
			$game["description"] = $json[$id]["data"]["short_description"];
			
			$game["pictures"] = $json[$id]["data"]["screenshots"];
			
			foreach($json[$id]["data"]["screenshots"] as $screenshots){
				if($screenshots["id"] == "1") {
					$game["picture"] = $screenshots["path_full"];
				}
				
			}
			
			return $game;
		
		}
		return "false";
	}
?>