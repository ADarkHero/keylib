<?php
	require_once($path."php/scr/database.php");

	$statement = $pdo->prepare("SELECT * FROM steam ORDER BY SteamName");

	$result = $statement->execute();
	echo '<div class="row">';
	for($i = 1; $row = $statement->fetch(); $i++) {
		if($i/3 == 0){ echo '<div class="row">'; }
			echo '<div class="col-sm-4" style="height: 500px;">';
				echo '<a href="index.php?s=info&id='.$row['SteamID'].'">';
					echo '<img class="card-img-top" src="'.$row['SteamPicture'].'" alt="Card image cap">';
					echo '<div class="card-block">';
						echo '<h4 class="card-title">'.$row['SteamName'].'</h4>';
						echo '<p class="card-text">'.$row['SteamText'].'</p>';
					echo '</div>';
				echo '</a>';
			echo '</div>';
		if($i/3 == 0){ echo "</div>"; }
	}

?>