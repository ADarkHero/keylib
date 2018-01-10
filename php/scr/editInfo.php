<?php

    function editEntry($pdo, $table_name, $tables, $id){
            $sql = "UPDATE ".$table_name." SET ";
            for($i = 0; $i < sizeof($tables); $i++){
                    $sql = $sql.$tables[$i].'="'.$_POST[$tables[$i]].'", ';
            }
            $sql = substr($sql, 0, -2);	//Cut last , 
            $sql = $sql." WHERE ".$tables[0].'="'.$id.'"';

            $statement = $pdo->prepare($sql);

            $statement->execute();
    }
        
?>
