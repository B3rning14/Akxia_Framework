<?php
	$content = "";
	$title = "";

	include 'inc/functions.php';

	$page_name = "index";
	if(isset($_GET["page"]))
	{
		$page_name = $_GET["page"];
		if(!@file_exists('pages/'.$page_name.'.php'))
			$page_name = "404";
	}

	ob_start();
	include 'pages/'.$page_name.'.php';
	$content = ob_get_contents();
	ob_get_clean();

	include 'inc/design.html';
?>