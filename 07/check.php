<?php
	use app\transfer\User;

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	$user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;

	if ( ! (isset($user) && isset($user->login) && isset($user->role)) ){
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->generateView();
		
		exit();
	}
?>