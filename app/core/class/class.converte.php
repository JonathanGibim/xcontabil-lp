<?php

class Converte {

    public function __construct(){
    }

    public function converteVar($variavel, $tipo, $parametro = null){

        switch ($tipo) {

            case 'checkbox':
            return $this->checkboxOnOff($variavel);
            break;

            case 'code':
            return $this->code($variavel);
            break;

            default:
            return false;
            break;
        }

    }

    private function checkboxOnOff($variavel){
        if($variavel == 'on'){
            return 1;
        }
        return 0;
    }


    private function code($variavel){
        return strtolower(str_replace(" ", "-", preg_replace("/[^\w\s]/", "", iconv("UTF-8", "ASCII//TRANSLIT", $variavel))));
    }


}