<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
	$form['k'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['o'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
	$form['r'] = isset($_REQUEST['raty']) ? $_REQUEST['raty'] : null;	
}

function validate(&$form,&$infos,&$msgs,&$hide_intro){
	if ( ! (isset($form['k']) && isset($form['o']) && isset($form['r']) ))	return false;	
	
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	if ( $form['k'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['o'] == "") $msgs [] = 'Nie podano oprocentowania';
	if ( $form['r'] == "") $msgs [] = 'Nie podano rat';

	if ( count($msgs)==0 ) {
		if (! is_numeric( $form['k'] )) $msgs [] = 'Kwota nie jest liczbą';
		if (! is_numeric( $form['o'] )) $msgs [] = 'Oprocentowanie nie jest liczbą';
		if (! is_numeric( $form['r'] )) $msgs [] = 'Raty nie sa liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	$form['k'] = floatval($form['k']);
	$form['o'] = floatval($form['o']);
	$form['r'] = floatval($form['r']);
	
	$result = $form['k'] * (1 + $form['o'] / 100) / $form['r'];
}

$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.html');