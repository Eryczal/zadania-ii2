<?php
	require_once dirname(__FILE__) .'/../../config.php';

	session_start();

	$role = isset($_SESSION["role"]) ? $_SESSION["role"] : "";
	
	if(empty($role)) {
		header("Location: "._APP_URL."/app/security/login.php");

		exit();
	}
?>