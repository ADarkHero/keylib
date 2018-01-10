<?php

    function deleteEntry($pdo, $table_name, $tables, $id){
        $sql = "DELETE FROM ".$table_name." WHERE ".$tables[0]." =".$id;
        $statement = $pdo->prepare($sql);
        $statement->execute();
    }

?>
