<!-- JQuery -->
<script src="js/jquery-3.1.1.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>

<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/main.css">

<?php
	//Tells Bootstrap, which Menulink should be marked as active
	function isactive($check){
		$currenturl = basename($_SERVER['REQUEST_URI'], '.php');
		$url = explode('=', $currenturl);
		
		if(isset($url[1]) && $check == $url[1]){
			return 'class="active"';
		}
	}
?>

<ul class="nav nav-tabs nav-justified">
  <li role="presentation" <?php echo isactive("home"); ?>><a href="index.php?s=home">Home</a></li>
  <li role="presentation" <?php echo isactive("add"); ?>><a href="index.php?s=add">Add</a></li>
  <li role="presentation" <?php echo isactive("options"); ?>><a href="index.php?s=options">Options</a></li>
</ul>