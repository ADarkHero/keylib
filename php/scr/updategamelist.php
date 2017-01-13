<?php
	$gamelist = file_get_contents("http://api.steampowered.com/ISteamApps/GetAppList/v0001/");	//Link to API with all game names+IDs
	$file = fopen("../../games/gamelist.json", "w+");											//Open .json file to write
	fwrite($file, $gamelist);																	//Write the things from Steam to the file
	fclose($file);
?>

<button type="button" class="btn btn-success">The game list was refreshed!</button>