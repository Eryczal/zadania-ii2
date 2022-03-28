<?php
require_once dirname (__FILE__).'/../config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

switch ($action) {
	default :
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
}
