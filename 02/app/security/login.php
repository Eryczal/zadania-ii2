<?php
	require_once dirname(__FILE__).'/../../config.php';

	function getParamsLogin(&$form){
		$form["login"] = isset($_POST["login"]) ? $_POST["login"] : null;
		$form["pass"] = isset($_POST["password"]) ? $_POST["password"] : null;
	}

	function validateLogin(&$form, &$messages){
		if(!(isset($form["login"]) && isset($form["pass"]))) {
			return false;
		}

		if($form["login"] == "") {
			$messages[] = "Nie podano loginu";
		}
		if($form["pass"] == "") {
			$messages[] = "Nie podano hasła";
		}

		if(count($messages) > 0) return false;

		if($form["login"] == "admin" && $form["pass"] == "admin") {
			session_start();
			$_SESSION["role"] = "admin";
			return true;
		} elseif($form["login"] == "user" && $form["pass"] == "user") {
			session_start();
			$_SESSION["role"] = "user";
			return true;
		}
		
		$messages[] = "Niepoprawny login lub hasło";
		return false; 
	}

	$form = [];
	$messages = [];

	getParamsLogin($form);

	if(validateLogin($form, $messages)) {
		header("Location: "._APP_URL);
	} else { 
		include _ROOT_PATH.'/app/security/login_view.php';
	}
?>