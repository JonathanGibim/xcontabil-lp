<?php

class ContatoDao  {

	private $pdo;
	private $tabela;

	public function __construct() {
		$this->pdo = Conexao::getPdo();
		$this->tabela = "contato";
	}

	/**
	 * Insere o registro no BD
	 * @param obj $objContato 
	 * @return int
	 */
	public function cadastrar($objContato){

		try{

			$query = " INSERT INTO ".$this->tabela." ( dsc_nome, dsc_email, dsc_telefone, dsc_assunto, dsc_mensagem, int_visualizado, dat_inc ) VALUES ( :dsc_nome, :dsc_email, :dsc_telefone, :dsc_assunto, :dsc_mensagem, :int_visualizado, :dat_inc ) ";

			$stmt = $this->pdo->prepare($query);
			$stmt->bindValue(":dsc_nome", $objContato->getNome());
			$stmt->bindValue(":dsc_email", $objContato->getEmail());
			$stmt->bindValue(":dsc_telefone", $objContato->getTelefone());
			$stmt->bindValue(":dsc_assunto", $objContato->getAssunto());
			$stmt->bindValue(":dsc_mensagem", $objContato->getMensagem());
			$stmt->bindValue(":int_visualizado", $objContato->getVisualizado());
			$stmt->bindValue(":dat_inc", date("Y-m-d H:i:s"));

			if($stmt->execute()){
				$intCod = $this->pdo->lastInsertId();
				$objContato->setCod($intCod);
				return $intCod;
			}

		} catch (Exception $e) {
			Controller::debug($e);
		}

	}


	/**
	* Visualização do registro
	 * @param obj $objContato 
	 * @return bol
	 */
	public function visualizado($objContato){

		try{

			$query = " UPDATE ".$this->tabela." SET int_visualizado = :int_visualizado WHERE cod_contato = :cod_contato ";

			$stmt = $this->pdo->prepare($query);
			$stmt->bindValue(":cod_contato", $objContato->getCod());
			$stmt->bindValue(":int_visualizado", $objContato->getVisualizado());

			if($stmt->execute()){
				return true;
			}

		} catch (Exception $e) {
			Controller::debug($e);
		}

	}

	/**
	* Exclusão logica do registro
	 * @param obj $objContato 
	 * @return bol
	 */
	public function excluir($objContato){

		try{

			$query = " UPDATE ".$this->tabela." SET dat_exc = :dat_exc WHERE cod_contato = :cod_contato ";

			$stmt = $this->pdo->prepare($query);
			$stmt->bindValue(":cod_contato", $objContato->getCod());
			$stmt->bindValue(":dat_exc", date('Y-m-d H:i:s'));

			if($stmt->execute()){
				return true;
			}

		} catch (Exception $e) {
			Controller::debug($e);
		}

	}

	/**
	 * Lista osnresultados de acordo com paratmetros e campos tipo ou registros excluidos.
	 * @param str $strParametro 
	 * @param str $arrParamValor 
	 * @param str $arrCampos 
	 * @param str $strRetorno 
	 * @param bool $blnExc 
	 * @return arr|int
	 */
	public function listar($strParametro = null, $arrParamValor = null, $arrCampos = null, $strRetorno = null, $blnExc = false){

		try{

			$queryAdd = null;

			$strColunas = "cod_contato, dsc_nome, dsc_email, dsc_telefone, dsc_assunto, dsc_mensagem, int_visualizado";

			if(is_array($arrCampos)){
				$strColunas = implode(', ', $arrCampos);
			}

			if(!$blnExc){
				$queryAdd .= " WHERE ( cod_log_exc IS NULL AND dat_exc IS NULL ) ";
			}

			if(!empty($strParametro)){
				$queryAdd .= isset($queryAdd) ? " AND " : " WHERE ";
				$queryAdd .= $strParametro;
			}

			$query = " SELECT ".$strColunas." FROM ".$this->tabela.$queryAdd;

			$stmt = $this->pdo->prepare($query);

			if(is_array($arrParamValor)){
				foreach ($arrParamValor as $key => $value) {
					$stmt->bindValue($key, $value);
				}
			}

			$stmt->execute();

			if($strRetorno == "int"){

				return $stmt->rowCount();

			}else{


				$arrFetchAll = $stmt->fetchAll(PDO::FETCH_ASSOC);

				if($arrFetchAll){
					$arrObjetos = array();
					foreach ($arrFetchAll as $arrDados) {
						$objContato = new Contato();
						if(array_key_exists('cod_contato', $arrDados)){ $objContato->setCod($arrDados['cod_contato']); }
						if(array_key_exists('dsc_nome', $arrDados)){ $objContato->setNome($arrDados['dsc_nome']); }
						if(array_key_exists('dsc_email', $arrDados)){ $objContato->setEmail($arrDados['dsc_email']); }
						if(array_key_exists('dsc_telefone', $arrDados)){ $objContato->setTelefone($arrDados['dsc_telefone']); }
						if(array_key_exists('dsc_assunto', $arrDados)){ $objContato->setAssunto($arrDados['dsc_assunto']); }
						if(array_key_exists('dsc_mensagem', $arrDados)){ $objContato->setMensagem($arrDados['dsc_mensagem']); }
						if(array_key_exists('int_visualizado', $arrDados)){ $objContato->setVisualizado($arrDados['int_visualizado']); }
						$arrObjetos[] = $objContato;
					}

					if($strRetorno == "obj"){
						return $arrObjetos[0];
					}

					return $arrObjetos;
					
				}

			}

			return false;

		} catch (Exception $e) {
			Controller::debug($e);
		}

	}

}