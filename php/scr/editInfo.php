<?php

    function editEntry($pdo, $table_name, $tables, $id){
            $sql = "UPDATE ".$table_name." SET ";
            for($i = 0; $i < sizeof($tables); $i++){
                    $sql = $sql.$tables[$i].'="'.trim(htmlspecialchars($_POST[$tables[$i]], ENT_QUOTES)).'", ';
            }
            $sql = substr($sql, 0, -2);	//Cut last , 
            $sql = $sql." WHERE ".$tables[0].'="'.$id.'"';

            $statement = $pdo->prepare($sql);

            $statement->execute();
    }
        
?>
