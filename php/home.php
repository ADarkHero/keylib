﻿<form class="form-horizontal" method="post" action="index.php?s=home">
	<div class="row">
		<div class="col-sm-12">
			<input type="text" class="form-control input-lg" name="search" placeholder="Search..." autofocus>
		</div>
	</div>
</form>

<?php
	require_once("php/scr/database.php");
        
        if(isset($_POST["search"])){
                require_once("php/scr/search.php");
                $statement = searchEverything($pdo, $table_name, $tables);
        }
        else{
            $statement = $pdo->prepare("SELECT * FROM ".$table_name." ORDER BY ".$tables[1]);
        }
        

	$result = $statement->execute();
	echo '<div class="row">';
	for($i = 1; $row = $statement->fetch(); $i++) {
		if($i/3 == 0){ echo '<div class="row">'; }
			echo '<div class="col-sm-4 card" style="background-image: url(\''.$row[3].'\')">';
				echo '<a href="index.php?s=info&id='.$row[0].'">';
						echo '<img src="img/bg.png" class="card-img-overlay"></img>';
						echo '<h4 class="card-title">'.$row[1].'</h4>';
						echo '<p class="card-text">'.$row[2].'</p>';
				echo '</a>';
			echo '</div>';
		if($i/3 == 0){ echo "</div>"; }
	}
	
	
	if($i/3 != 0){ echo "</div>"; }

?>