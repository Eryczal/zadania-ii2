<?php
    define('_SERVER_NAME', 'localhost');
    define('_SERVER_URL', 'http://'._SERVER_NAME);
    define('_APP_ROOT', '/zadania_php/03');
    define('_APP_URL', _SERVER_URL._APP_ROOT);
    define("_ROOT_PATH", dirname(__FILE__));
    
	function out(&$a) {
		if(isset($a)) {
			echo $a;
		}
	}
?>