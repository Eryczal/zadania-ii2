<?php
	require_once dirname(__FILE__) .'/../config.php';

	if(isset($messages)) {
		if(count($messages) > 0) {
			echo "<ol class='err'>";
			foreach($messages as $msg) {
				echo "<li>$msg</li>";
			}
			echo "</ol>";
		}
	}

	if(isset($rata)) {
		echo "<div class='res'>Rata wynosi: " . number_format($rata, 2, ",", "") . "zł</div>";
	}
?>