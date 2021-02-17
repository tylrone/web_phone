<?php 
	//start session
	session_start();
	//load file config.php
	include "config.php";
	//load file model
	include "model/model.php";
	include "remove_unicode.php";
	//lay bien $controller truyen tu url
	$controller = isset($_GET["controller"])?$_GET["controller"]:'';
	//noi them cac tham so de bien $controller thanh duong dan thuc -> nham muc dich load MVC tuong ung
	$file_controller = "controller/frontend/controller_$controller.php";
	//load file template
	if(file_exists($file_controller))
		include "view/frontend/layout_detail.php";	
	else
		include "view/frontend/layout.php";
?>