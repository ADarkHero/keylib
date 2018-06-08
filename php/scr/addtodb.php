<?php
    $name = trim($_POST["name"]);
    $type = trim($_POST["type"]);

    require_once("php/scr/database.php");		//Connect to database

    //What's the entry type?
    include 'php/scr/addtodb/'.strtolower($type).'.php';





    /******************************
            User Notifications
    ******************************/
    if(isset($result) && $result){
        echo '<a href="index.php?s=info&id='.$entryid.'"><button type="button" class="btn btn-success">';
        echo $entryname.' ('.$entryid.') was successfully written to the database!</button></a>';
    }
    else{
        echo '<button type="button" class="btn btn-danger">Already in database or not found!</button>';
    }	
?>

