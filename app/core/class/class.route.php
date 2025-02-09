<?php
class Route {
	private $strView;
	private $arrUrl;
	public function __construct($urlRoute){
		if(Controller::validaGet($urlRoute)){
			$arrUrl = explode('/', $urlRoute);
			if(isset($arrUrl)){
				$this->arrUrl = $arrUrl;
			}
			
		}
	}
	/**
	 * Setters
	 */
	public function setView($strView){
		$this->strView = $strView;
	}
	/**
	 * Getters
	 */
	public function getArrUrl($pos){
		if(isset($this->arrUrl[$pos])){
			return $this->arrUrl[$pos];
		}
		return false;
	}
	public function getView(){
		return $this->strView;
	}
}