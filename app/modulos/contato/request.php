<?php

/**
 * 
 * CONTATO
 * 
 **/

$strCodeModulo = "contato";
if($objRoute->getArrUrl(1) == $strCodeModulo){

	$strModulo = "Contato";
	$strUrlAdminModulo = URL_ADMIN.$strCodeModulo."/";
	$strPathModulo = PATH_MODULO."contato/";

	if($objRoute->getArrUrl(2) == 'gerenciar'){

		$strPagina = "Gerenciar";
		$arrContato = ControllerContato::listar('1 = 1 ORDER BY cod_contato DESC', null, array('cod_contato','dsc_nome','dsc_email', 'dsc_assunto'));

		$arrRecursos[] = 'data-table';
		$arrRecursos[] = 'sweet-alert';
		$objRoute->setView($strPathModulo."view/gerenciar.php");

	}

	if($objRoute->getArrUrl(2) == 'cadastrar'){

		$strPagina = "Cadastrar";

		$strNome = null;
		$strEmail = null;
		$strTelefone = null;
		$strAssunto = null;
		$strMensagem = null;

		if(isset($_POST['submitForm'])){

			$strNome = Controller::validaPost($_POST['strNome']);
			$strEmail = Controller::validaPost($_POST['strEmail']);
			$strTelefone = Controller::validaPost($_POST['strTelefone']);
			$strAssunto = Controller::validaPost($_POST['strAssunto']);
			$strMensagem = Controller::validaPost($_POST['strMensagem']);

			$objContato = new Contato();
			$objContato->setNome($strNome);
			$objContato->setEmail($strEmail);
			$objContato->setTelefone($strTelefone);
			$objContato->setAssunto($strAssunto);
			$objContato->setMensagem($strMensagem);
			$objContato->setVisualizado(0);

			$arrValidaAtributo = $objContato->validaAtributos('cadastrar');
			if($arrValidaAtributo === true){
				if(ControllerContato::cadastrar($objContato)){
					$strAlertaSisitema .= Controller::diversosAlert('Cadastro realizado com sucesso!', 'success');
				}else{
					$strAlertaSisitema .= Controller::diversosAlert(null, 'error');
				}
			}else{
				$strAlertaErro = null;
				foreach($arrValidaAtributo as $strMsgErro){
					$strAlertaErro .= $strMsgErro."<br>";
				}
				$strAlertaSisitema .= Controller::diversosAlert($strAlertaErro, 'danger');
			}
		}

		$arrRecursos[] = 'bootstrap-switch';
		$objRoute->setView($strPathModulo."view/cadastrar.php");

	}

	if($objRoute->getArrUrl(2) == 'detalhes'){

		$strPagina = "Detalhes";

		$intCod = Controller::validaGet($objRoute->getArrUrl(3));

		$objContato = ControllerContato::listar("cod_contato = :cod_contato", array(':cod_contato' => $intCod), null, "obj");
		if($objContato instanceof Contato){

			$strNome = $objContato->getNome();
			$strEmail = $objContato->getEmail();
			$strTelefone = $objContato->getTelefone();
			$strAssunto = $objContato->getAssunto();
			$strMensagem = $objContato->getMensagem();

			$objContato->setVisualizado(1);
			ControllerContato::visualizado($objContato);

			$objRoute->setView($strPathModulo."view/detalhes.php");

		}else{

			$objRoute->setView(PATH_ADMIN."404.php");

		}

	}

	if($objRoute->getArrUrl(2) == 'excluir'){
		$strPagina = "Excluir";
		// Exclusão por ajax -- _footer.php
		$intCod = Controller::validaGet($objRoute->getArrUrl(2));
		$objContato = ControllerContato::listar("cod_contato = :cod_contato", array(':cod_contato' => $intCod), array('cod_contato'), "obj");
		if($objContato instanceof contato){
			if(ControllerContato::excluir($objContato)){
				echo 1;
				die();
			}
		}
		echo 0;
		die();
	}

}


/* SITE */

if($objRoute->getArrUrl(0) == 'contato'){

	$strPagina = "Cadastrar";

	$arrResult = array();
	$strNome = null;
	$strEmail = null;
	$strTelefone = null;
	$strAssunto = null;
	$strMensagem = null;

	$arrResult[0] = 0;
	if(isset($_POST['strNome'])){

		$strNome = Controller::validaPost($_POST['strNome']);
		$strEmail = Controller::validaPost($_POST['strEmail']);
		$strTelefone = Controller::validaPost($_POST['strTelefone']);
		$strAssunto = Controller::validaPost($_POST['strAssunto']);
		$strMensagem = Controller::validaPost($_POST['strMensagem']);

		$objContato = new Contato();
		$objContato->setNome($strNome);
		$objContato->setEmail($strEmail);
		$objContato->setTelefone($strTelefone);
		$objContato->setAssunto($strAssunto);
		$objContato->setMensagem($strMensagem);
		$objContato->setVisualizado(0);

		$arrValidaAtributo = $objContato->validaAtributos('cadastrar');
		if($arrValidaAtributo === true){
			if(ControllerContato::cadastrar($objContato)){
				$arrResult[0] = 1;
				$strAlertaSisitema .= Controller::diversosAlert('Contato enviado com sucesso!', 'success');
			}else{
				$strAlertaSisitema .= Controller::diversosAlert(null, 'error');
			}
		}else{
			$strAlertaErro = null;
			foreach($arrValidaAtributo as $strMsgErro){
				$strAlertaErro .= $strMsgErro."<br>";
			}
			$strAlertaSisitema .= Controller::diversosAlert($strAlertaErro, 'danger');
		}
	}

	$arrResult[1] = $strAlertaSisitema;
	echo json_encode($arrResult);
	die();
	//$arrRecursos[] = 'bootstrap-switch';
	//$objRoute->setView(PATH."contato.php");

}