<script type="text/javascript">
	//Updates the current list of Steam games. It's about 2MB, so we don't want to download it every time, when this site is loaded
	function updategamelist()
	{
	   var file="php/scr/updategamelist.php"; 	//Name of file that should be loaded
	   var loading="php/scr/loading.php";		//Loading Image
	   $("#notification").load(loading).fadeIn("slow");
	   $("#notification").load(file).fadeIn("slow");

	}
</script>

<div class="form-group">
	<div class="col-sm-12">
	  <button type="submit" onClick="updategamelist();" class="btn btn-default btn-lg btn-block">Update game list from Steam</button>
	</div>
</div>

<br /><br />

<div id="notification"></div>