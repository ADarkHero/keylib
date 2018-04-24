<form class="form-horizontal" method="post" action="index.php?s=add">
  <div class="form-group">
	<div class="col-sm-12">
	  <input type="text" class="form-control input-lg" name="name" placeholder="What do you want to add?" autofocus>
	</div>

	<div class="col-sm-12">
		<select class="form-control input-lg" name="type">
		  <option>Steam</option>
		  <option>Last.FM</option>
		  <option>Other</option>
		  <!-- <option>Other</option> -->
		</select>
	</div>

	<div class="col-sm-12">
	  <button type="submit" class="btn btn-default btn-lg btn-block">Submit!</button>
	</div>
  </div>
	 
</form>

<?php
//Checks if the User actually wants to add something
	if(isset($_POST["name"]) && $_POST["name"] != ""){
		include 'php/scr/addtodb.php';
	}

?>
