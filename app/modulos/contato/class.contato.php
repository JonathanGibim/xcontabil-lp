<?php

class Contato {

	private $intCod;
	private $strNome;
	private $strEmail;
	private $strTelefone;
	private $strAssunto;
	private $strMensagem;
	private $intVisualizado;

	public function __construct(){
	}

	/**
	 * GETTERS
	 */
	public function getCod(){ return $this->intCod; }
	public function getNome(){ return $this->strNome; }
	public function getEmail(){ return $this->strEmail; }
	public function getTelefone(){ return $this->strTelefone; }
	public function getAssunto(){ return $this->strAssunto; }
	public function getMensagem(){ return $this->strMensagem; }
	public function getVisualizado(){ return $this->intVisualizado; }

	/**
	 * SETTERS
	 */
	public function setCod($intCod){ $this->intCod = $intCod; }
	public function setNome($strNome){ $this->strNome = $strNome; }
	public function setEmail($strEmail){ $this->strEmail = $strEmail; }
	public function setTelefone($strTelefone){ $this->strTelefone = $strTelefone; }
	public function setAssunto($strAssunto){ $this->strAssunto = $strAssunto; }
	public function setMensagem($strMensagem){ $this->strMensagem = $strMensagem; }
	public function setVisualizado($intVisualizado){ $this->intVisualizado = $intVisualizado; }

	/**
	 * VALIDA OS ATRIBUTOS DO OBJETO
	 * @param string $acao 
	 * @return array ou true
	 */
	public function validaAtributos($acao = null){

		$arrErro = array();
		if(!Controller::validaVar($this->getNome(), 'min', 3)){
			$arrErro[] = "- O nome deve conter no mínimo 3 caracteres";
		}
		if(!Controller::validaVar($this->getEmail(), 'email')){
			$arrErro[] = "- O e-mail informado está em formato inválido";
		}
		if(!Controller::validaVar($this->getMensagem(), 'min', 3)){
			$arrErro[] = "- A mensagem deve conter no mínimo 3 caracteres";
		}
		if(count($arrErro)>0){
			return $arrErro;
		}

		return true;
	}

}