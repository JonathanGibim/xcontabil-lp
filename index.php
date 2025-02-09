<?php
/* Configurações do sistema */
require_once("app/core/config.php");

/* Carregamento de classes do sitema */
require_once("app/core/autoload.php");

/* Carregamento de rotas do sitema */
require_once("app/core/routes.php");

$arrRecursos = array();

/* Inicializacao */
$strNomeSite = "XContábil";
$strTitulo = "Gestão Contábil que Transforma Negócios!";
$strTagTitle = $strTitulo." - ".$strNomeSite;
$strTagDescription = $strTitulo." - ".$strNomeSite;
$strTagKeywords = $strTitulo." - ".$strNomeSite;

/* Carrega da view se possuir */
if(!empty($objRoute->getView())){
    require_once($objRoute->getView());
}