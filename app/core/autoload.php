<?php
/**
* AUTOLOAD
* Responsavel por chamar todas as controllers dentro dos modulos.
*/

// controller do core
require_once("controller.php");

// controller dos módulos
$objPonteiro  = opendir(PATH_SISTEMA."modulos/");
while($strItem = readdir($objPonteiro)){
	if(is_dir(PATH_SISTEMA."modulos/".$strItem)){
		if($strItem != '.' AND $strItem != '..'){
			if(is_file(PATH_SISTEMA."modulos/".$strItem."/controller.php")){
				require_once(PATH_SISTEMA."modulos/".$strItem."/controller.php");
			}
		}
	}
}