﻿<?php
<<<<<<< HEAD
	require_once("php/scr/database.php");
        
        if(isset($_POST[$tables[0]])){
            if(isset($_POST["delete"])){
                require_once("php/scr/deleteInfo.php");
=======
	require_once($path."php/scr/database.php");
        
        if(isset($_POST[$tables[0]])){
            if(isset($_POST["delete"])){
                require_once($path."php/scr/deleteInfo.php");
>>>>>>> 2cc3d404ab306c00ec9f1bf46413d571cf07619b
                deleteEntry($pdo, $table_name, $tables, $_GET["id"]);
                header("Location: index.php");
            }
            else{
<<<<<<< HEAD
               require_once("php/scr/editInfo.php"); 
=======
               require_once($path."php/scr/editInfo.php"); 
>>>>>>> 2cc3d404ab306c00ec9f1bf46413d571cf07619b
               editEntry($pdo, $table_name, $tables, $_GET["id"]);
            }
        }

	$statement = $pdo->prepare("SELECT * FROM ".$table_name." WHERE ".$tables[0]."= '".$_GET["id"]."' LIMIT 1");

	$result = $statement->execute();
	$row = $statement->fetch();
        
        
        echo '<center><img class="card-img-top" src="'.$row[3].'" alt="'.$row[1].' Screenshot"></center>';
        
        echo '<form action="index.php?s=info&id='.$_GET["id"].'" method="post">';
        for($i = 0; $i < sizeof($tables); $i++){
            echo '<div class="row">';
                echo '<div class="col-sm-3"><button class="btn btn-default btn-lg btn-block">'.$tables[$i].'</button></div>';
                echo '<div class="col-sm-9"><input type="text" class="form-control input-lg" name="'.$tables[$i].'" value="'.$row[$i].'" ></div>';
            echo '</div>';
        }
        
        echo '<div class="row">';
            echo '<div class="col-sm-3"><button class="btn btn-default btn-lg btn-block">DELETE Entry</button></div>';
            echo '<div class="col-sm-9">';
                echo '<div class="checkbox input-lg">';
                    echo '<input type="checkbox" name="delete">';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        
        echo '<div class="row">';
            echo '<div class="col-sm-12"><input type="submit" value="Save changes" class="btn btn-primary btn-lg btn-block"></div>';
        echo '</div>';
        echo '</form>';
   
?>

