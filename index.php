<?php
	include 'php/head.php';	
	
?>
	
<div id="main">
	<?php
		if(isset($_GET["s"])){
			include 'php/'.$_GET["s"].'.php';
		}
		else{
			include 'php/home.php';
		}	

	?>
	
</div>
