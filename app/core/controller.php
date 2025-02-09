<?php

// CLASSES CORE
$objPonteiroCore  = opendir(PATH_SISTEMA."core/class/");
while($strItemCore = readdir($objPonteiroCore)){
	$arrItemCore = explode(".", $strItemCore);
	if($arrItemCore[0]=="class"){
        require_once(PATH_SISTEMA."core/class/".$strItemCore);
    }
}

Class Controller{

    /**
     * válida variaveis conforme o tipo de validaçao escolhido
     * @param str|int|array $variavel 
     * @param str $tipo 
     * @param str|int|null $parametro 
     * @return bol
     */
    public function validaVar($variavel, $tipo, $parametro = null){
    	$objValida = new Valida();
    	return $objValida->validaVar($variavel, $tipo, $parametro);
    }
    public function validaPost($variavel){
        $objValida = new Valida();
        return $objValida->validaVar($variavel, 'post');
    }
    public function validaGet($variavel){
        $objValida = new Valida();
        return $objValida->validaVar($variavel, 'get');
    }
    public function validaArray($variavel){
        $objValida = new Valida();
        return $objValida->validaVar($variavel, 'arr');
    }

    /**
     * converte variaveis conforme o tipo de conversão escolhido
     * @param str|int|array $variavel 
     * @param str $tipo 
     * @param str|int|null $parametro 
     * @return all
     */
    public function converteVar($variavel, $tipo, $parametro = null){
    	$objConverte = new Converte();
    	return $objConverte->converteVar($variavel, $tipo, $parametro);
    }

	/**
	 * Define os alertas do sistema.
	 * @param str $mensagem 
	 * @param str|null $tipo 
	 * @param str|null $titulo 
	 * @return string
	 */
	public function diversosAlert($mensagem, $tipo = null, $titulo = null){
		$objDiversos = new Diversos();
		return $objDiversos->Alert($mensagem, $tipo, $titulo);
	}

    /**
     * Debug BD
     * @param type $e 
     * @return string
     */
    public function debug($e){
        $objBd = new Debug();
        return $objBd->debug($e);
    }

}