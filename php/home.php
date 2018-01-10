<form class="form-horizontal" method="post" action="index.php?s=home">
	<div class="row">
		<div class="col-sm-12">
			<input type="text" class="form-control input-lg" name="search" placeholder="Search..." autofocus>
		</div>
	</div>
</form>

<?php
<<<<<<< HEAD
	require_once("php/scr/database.php");
        
        if(isset($_POST["search"])){
                require_once("php/scr/search.php");
=======
	require_once($path."php/scr/database.php");
        
        if(isset($_POST["search"])){
                require_once($path."php/scr/search.php");
>>>>>>> 2cc3d404ab306c00ec9f1bf46413d571cf07619b
                $statement = searchEverything($pdo, $table_name, $tables);
        }
        else{
            $statement = $pdo->prepare("SELECT * FROM ".$table_name." ORDER BY ".$tables[1]);
        }
        

	$result = $statement->execute();
	echo '<div class="row">';
	for($i = 1; $row = $statement->fetch(); $i++) {
		if($i/3 == 0){ echo '<div class="row">'; }
<<<<<<< HEAD
			echo '<div class="col-sm-4 card" style="background-image: url(\''.$row[3].'\')">';
				echo '<a href="index.php?s=info&id='.$row[0].'">';
						echo '<img src="img/bg.png" class="card-img-overlay"></img>';
						echo '<h4 class="card-title">'.$row[1].'</h4>';
						echo '<p class="card-text">'.$row[2].'</p>';
=======
<<<<<<< HEAD
			echo '<div class="col-sm-4 card" style="background-image: url(\''.$row[3].'\')">';
				echo '<a href="index.php?s=info&id='.$row['SteamID'].'">';
						echo '<img src="img/bg.png" class="card-img-overlay"></img>';
						echo '<h4 class="card-title">'.$row[1].'</h4>';
						echo '<p class="card-text">'.$row[2].'</p>';
=======
			echo '<div class="col-sm-4 card">';
				echo '<a href="index.php?s=info&id='.$row['SteamID'].'">';
					echo '<img class="card-img-center" src="'.$row['SteamPicture'].'" alt="'.$row['SteamName'].' Screenshot">';
					echo '<div class="card-img-overlay">';
						echo '<img src="img/bg.png"></img>';
						echo '<h4 class="card-title">'.$row['SteamName'].'</h4>';
						echo '<p class="card-text">'.$row['SteamText'].'</p>';
					echo '</div>';
>>>>>>> eb80de38d51c7c5aa0a4a1918b68824700bb4ecc
>>>>>>> 2cc3d404ab306c00ec9f1bf46413d571cf07619b
				echo '</a>';
			echo '</div>';
		if($i/3 == 0){ echo "</div>"; }
	}
	
	
	if($i/3 != 0){ echo "</div>"; }

?>