<?php
	require_once dirname(__FILE__).'/../config.php';

	include _ROOT_PATH.'/app/security/check.php';

	function getParams(&$k,&$o,&$r){
		$k = isset($_POST["kwota"]) ? $_POST["kwota"] : null;
		$o = isset($_POST["oprocentowanie"]) ? $_POST["oprocentowanie"] : null;
		$r = isset($_POST["raty"]) ? $_POST["raty"] : null;	
	}

	function validate(&$k,&$o,&$r,&$messages) {
		if(!(isset($k) && isset($o) && isset($r))) {
			return false;
		}
	
		if($k == "") {
			$messages[] = "Nie podano kwoty kredytu.";
		}
	
		if($o == "") {
			$messages[] = "Nie podano oprocentowania.";
		}
	
		if($r == "") {
			$messages[] = "Nie podano ilości rat.";
		}

		if(count($messages) > 0) return false;
	
		if(!is_numeric($k)) {
			$messages[] = "Kwota kredytu nie jest liczbą.";
		} elseif($k < 1) {
			$messages[] = "Kwota kredytu musi być większa od 0.";
		}
		
		if(!is_numeric($o)) {
			$messages[] = "Oprocentowanie nie jest liczbą.";
		}

		if(!is_numeric($r)) {
			$messages[] = "Ilość rat nie jest liczbą.";
		} elseif($r < 1) {
			$messages[] = "Ilość rat musi być większa od 0.";
		}

		if(count($messages) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	function process(&$k,&$o,&$r,&$messages,&$rata) {
		$k = intval($k);
		$o = floatval($o);
		$r = intval($r);

		$rata = $k * (1 + $o / 100) / $r;
	}

	$k = null;
	$o = null;
	$r = null;
	$messages = [];
	$rata = null;

	getParams($k, $o, $r);
	if(validate($k, $o, $r, $messages)) {
		process($k, $o, $r, $messages, $rata);
	}
	include 'calc_view.php';
?>