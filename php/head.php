<!-- JQuery -->
<script src="js/jquery-3.1.1.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/main.css">

<?php
	//Base path
	$path = $_SERVER['DOCUMENT_ROOT']."/keylib/";
	
	//Tells Bootstrap, which Menulink should be marked as active
	function isactive($check){
		$currenturl = basename($_SERVER['REQUEST_URI'], '.php');
		$url = explode('=', $currenturl);
		
		if($check == $url[1]){
			return 'class="active"';
		}
	}
?>

<ul class="nav nav-tabs nav-justified">
  <li role="presentation" <?php echo isactive("home"); ?>><a href="index.php?s=home">Home</a></li>
  <li role="presentation" <?php echo isactive("add"); ?>><a href="index.php?s=add">Add</a></li>
  <li role="presentation" <?php echo isactive("options"); ?>><a href="index.php?s=options">Options</a></li>
</ul>