<?php
	require_once dirname(__FILE__).'/../config.php';

	$k = $_POST["kwota"];
	$o = $_POST["oprocentowanie"];
	$r = $_POST["raty"];

	if(!(isset($k) && isset($o) && isset($r))) {
		$messages[] = "Błędne wywołanie aplikacji. Brak jednego z parametrów.";
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

	if(empty($messages)) {
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
	}

	if(empty($messages)) {
		
		$k = intval($k);
		$o = floatval($o);
		$r = intval($r);

		$rata = $k * (1 + $o / 100) / $r;
	}
	include 'calc_view.php';
?>