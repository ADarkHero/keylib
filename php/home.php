<?php
	require_once($path."php/scr/database.php");

	$statement = $pdo->prepare("SELECT * FROM steam ORDER BY SteamName");

	$result = $statement->execute();
	echo '<div class="row">';
	for($i = 1; $row = $statement->fetch(); $i++) {
		if($i/3 == 0){ echo '<div class="row">'; }
			echo '<div class="col-sm-4 card">';
				echo '<a href="index.php?s=info&id='.$row['SteamID'].'">';
					echo '<img class="card-img-center" src="'.$row['SteamPicture'].'" alt="'.$row['SteamName'].' Screenshot">';
					echo '<div class="card-img-overlay">';
						echo '<img src="img/bg.png"></img>';
						echo '<h4 class="card-title">'.$row['SteamName'].'</h4>';
						echo '<p class="card-text">'.$row['SteamText'].'</p>';
					echo '</div>';
				echo '</a>';
			echo '</div>';
		if($i/3 == 0){ echo "</div>"; }
	}
	
	
	if($i/3 != 0){ echo "</div>"; }

?>