<?php  
        
	$artist = strtolower(str_replace( " ", "+", $name));         //Artist names on lastfm don't have spaces -> they have plus signs
        //Read JSON
        $path = "http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=".$artist."&api_key=0f999c8a25cc621b47fb98d2b413cbd2&format=json";		
	$file = file_get_contents($path, "w+");
	$json = json_decode($file, true);		//Decode JSON FILE
	
        //Read variables from json
        do{
            $entryid = rand(100000000, 999999999);
            $sql = "SELECT count(*) FROM ".$table_name." WHERE ".$tables[0]." = ".$entryid;
            $rowcount = $pdo->query($sql)->fetchColumn(); 
        }while($rowcount > 0);  //Check, if id is already existing
        $entryname = $json["artist"]["name"];   //Fixes upper- and lowercasing
        $description = htmlspecialchars($json["artist"]["bio"]["summary"]);
        
        
        //Download image
        $imagepath = "img/last.fm/".$entryid.".jpg";
        if(file_exists($imagepath)){
            $iswritable = ( is_writable($imagepath) ) ? TRUE : chmod($imagepath, 0755);  //Overwrite file, if it already exists
        }
        file_put_contents($imagepath, fopen($json["artist"]["image"]["5"]["#text"], 'r'));	//Save Picture locally
        
        

        //Write artist to database
        $statement = $pdo->prepare("INSERT INTO ".$table_name." (".$tables[0].", ".$tables[1].", ".$tables[2].", ".$tables[3].") 
        VALUES (?, ?, ?, ?)");
        $result = $statement->execute([$entryid, $imagepath, $entryname, $description]);

?>