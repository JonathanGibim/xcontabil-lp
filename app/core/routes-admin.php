<?php
/**
* ROUTES
* Responsavel por chamar as rotas de admin
*/

if(!isset($strAlertaSisitema)){ $strAlertaSisitema = null; }
if(!isset($arrRecursos)){ $arrRecursos = array(); }

$urlRoute = 'admin/'.(isset($_GET['url']) ? $_GET['url'] : 'dashboard');
$objRoute = new Route($urlRoute);

require_once(PATH_MODULO."admin/request.php");
if(is_file(PATH_MODULO.$objRoute->getArrUrl(1)."/request.php")){
	require_once(PATH_MODULO.$objRoute->getArrUrl(1)."/request.php");
}

if(!is_file($objRoute->getView())){
	$objRoute->setView(PATH_MODULO."admin/view/".$objRoute->getArrUrl(1)."/".$objRoute->getArrUrl(2).".php");
}

/* caso não localize a view */
if(!is_file($objRoute->getView())){
	$objRoute->setView(PATH_ADMIN."404.php");
}