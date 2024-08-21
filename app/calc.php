<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';


function getParams(&$form){

	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['msc'] = isset($_REQUEST['msc']) ? $_REQUEST['msc'] : null;
	$form['opr'] = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;

}


function validate(&$form,&$infos,&$msgs,&$hide_intro){

	if ( ! (isset($form['kwota']) && isset($form['msc']) && isset($form['opr']) )) return false; 

	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	if ($form['kwota'] == "") $msgs [] = 'Nie podano kwoty';
	if ($form['msc'] == "") $msgs [] = 'Nie podano czasu trwania kredytu';
	if ($form['opr'] == "") $msgs [] = 'Nie podano oprocentowania';

	if (count($msgs)==0){
		if (! is_numeric($form['kwota'])) $msgs [] = 'Kwota nie jest liczbą całkowitą';
		if (! is_numeric($form['msc'])) $msgs [] = 'Ilość miesięcy nie jest liczbą całkowitą';
		if (! is_numeric($form['opr'])) $msgs [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}

	if (count($msgs)>0) return false;
	else return true;
	
}


function process(&$form,&$infos,&$msgs,&$result){

	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

	$form['kwota'] = floatval($form['kwota']);
	$form['msc'] = floatval($form['msc']);
	$form['opr'] = floatval($form['opr']);

	$result = (($form['kwota']/$form['msc']))*(($form['opr']/100)+1);

}

$form = null;
$infos = array();
$msgs = array();
$result = null;

getParams($form);
if(validate($form,$infos,$msgs,$hide_intro)) {
	process($form,$infos,$msgs,$result)	;
}


$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Zadanie - szablony');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$msgs);
$smarty->assign('infos',$infos);


$smarty->display(_ROOT_PATH.'/app/calc_view.tpl');
// $smarty->display(_APP_URL.'/app/calc_view.tpl');