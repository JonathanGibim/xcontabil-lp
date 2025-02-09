<?php

define("DEBUG", true);

if(!DEBUG){
	ini_set("display_errors",0);
	error_reporting(0);
}

define("NoME_DOMINIO", "xcontabil-lp");

// CONFIG LOCAL E PUBLICA
if($_SERVER['SERVER_NAME'] == 'localhost'){

	define("URL_DOMINIO", "sites.xweb.com.br/".NoME_DOMINIO);
	define("PATH", $_SERVER['DOCUMENT_ROOT']."/".URL_DOMINIO."/");
	define("URL", $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".URL_DOMINIO."/");

	// CONFIGURACOES DO BANCO DE DADOS
	define("DB_HOST", "localhost");
	define("DB_USUARIO", "root");
	define("DB_SENHA", "");
	define("DB_BANCO", "xweb-contato");

}else{

	define("URL_DOMINIO", "sites.xweb.com.br/".NoME_DOMINIO);
	define("PATH", $_SERVER['DOCUMENT_ROOT']."/".NoME_DOMINIO."/");
	define("URL", $_SERVER['REQUEST_SCHEME']."://".URL_DOMINIO."/");

	// CONFIGURACOES DO BANCO DE DADOS
	define("DB_HOST", "localhost");
	define("DB_USUARIO", "xwebcomb_sites");
	define("DB_SENHA", "NC0RB9SOrgla");
	define("DB_BANCO", "xwebcomb_sites");

}

// PATH E URL CONFIG
define("URL_DOMINIO_ADMIN", "admin");
define("URL_ADMIN", URL.URL_DOMINIO_ADMIN."/");
define("PATH_ADMIN", PATH.URL_DOMINIO_ADMIN."/");

define("PATH_SISTEMA", PATH."/app/");
define("PATH_MODULO", PATH."/app/modulos/");

define("URL_ATUAL", $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

// IDENTIFICACAO CLIENTE
define("NOME_SITE", "xestetica");
define("NOME_CLIENTE", "XWEB");
define("TITLE", "XWEB");
define("COD_SESSION", "XW");

// ESSE E O E-MAIL QUE RECEBER NOTIFICACOES SOBRE O SISTEMA
define("ADMIN_EMAIL", "contato@xweb.com.br");

// AUTENTICACAO/CONFIGURACAO DO ENVIO DE E-MAIL
define("MAIL_HOST", "mail.xweb.com.br");
define("MAIL_USUARIO", "autenticacao@xweb.com.br");
define("MAIL_SENHA", "XwebAut753*");
define("MAIL_PORTA", "587");
define("MAIL_TIPO", "");

// TRABALHA COM SESSSAO
session_start();

// DEFINE TIMEZONE SAO PAULO
date_default_timezone_set('America/Sao_Paulo');

?>