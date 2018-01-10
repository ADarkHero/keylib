<?php

    function searchEverything($pdo, $table_name, $tables){
        $search = '%'.$_POST["search"].'%';	//Search term can be on the beginning, middle or end
        $sql = "SELECT * FROM ".$table_name." WHERE ";
        for($i = 0; $i < sizeof($tables); $i++){
                $sql = $sql.$tables[$i].' LIKE "'.$search.'" OR ';
        }
        $sql = substr($sql, 0, -3); //Cut last "OR"
        $statement = $pdo->prepare($sql);
        
        return $statement;
    }  
                
?>
