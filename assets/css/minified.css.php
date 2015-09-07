<?php 

	require("lessc.inc.php");
	$input = "../less/app.less";
	$less = new lessc($input);

	header("Content-Type: text/css");
	print $less->parse();
	
?>