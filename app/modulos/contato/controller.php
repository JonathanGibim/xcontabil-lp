<?php

/* CLASSES DO MODULO */
require_once(PATH_SISTEMA."modulos/contato/class.contato.php");
require_once(PATH_SISTEMA."modulos/contato/class.contatoDao.php");

Class ControllerContato{

	public function cadastrar($objContato){
		$objContatoDao = new ContatoDao();
		return $objContatoDao->cadastrar($objContato);
	}
	public function visualizado($objContato){
		$objContatoDao = new ContatoDao();
		return $objContatoDao->visualizado($objContato);
	}
	public function excluir($objContato){
		$objContatoDao = new ContatoDao();
		return $objContatoDao->excluir($objContato);
	}
	public function listar($strParametro = null, $arrParamValor = null, $arrCampos = null, $strRetorno = null, $blnExc = false){
		$objContatoDao = new ContatoDao();
		return $objContatoDao->listar($strParametro, $arrParamValor, $arrCampos, $strRetorno, $blnExc);
	}

}