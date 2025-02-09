<?php
/**
* ROUTES
* Responsavel por chamar as rotas do site
*/

if(!isset($strAlertaSisitema)){ $strAlertaSisitema = null; }
if(!isset($arrRecursos)){ $arrRecursos = array(); }

$urlRoute = isset($_GET['url']) ? $_GET['url'] : 'home';
$objRoute = new Route($urlRoute);

if(is_file(PATH_MODULO.$objRoute->getArrUrl(0)."/request.php")){
	require_once(PATH_MODULO.$objRoute->getArrUrl(0)."/request.php");
}

if(!is_file($objRoute->getView())){
	$objRoute->setView(PATH.$objRoute->getArrUrl(0).".php");
}

/* caso não localize a view */
if(!is_file($objRoute->getView())){
	$objRoute->setView(PATH."404.php");
}