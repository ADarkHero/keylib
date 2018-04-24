<?php  
    $entryname = $name;

    //Read variables from json
    do{
        $entryid = rand(1000000000, 9999999999);
        $sql = "SELECT count(*) FROM ".$table_name." WHERE ".$tables[0]." = ".$entryid;
        $rowcount = $pdo->query($sql)->fetchColumn(); 
    }while($rowcount > 0);  //Check, if id is already existing

    //Write artist to database
    $statement = $pdo->prepare("INSERT INTO ".$table_name." (".$tables[0].", ".$tables[1].", ".$tables[2].", ".$tables[3].") 
    VALUES (?, ?, ?, ?)");
    $result = $statement->execute([$entryid, "", $entryname, ""]);
?>