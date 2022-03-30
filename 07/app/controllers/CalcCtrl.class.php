<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
	private $form;
	private $result;

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->k = getFromRequest('kwota');
		$this->form->o = getFromRequest('oprocentowanie');
		$this->form->r = getFromRequest('raty');
	}

	public function validate() {
		if (! (isset ( $this->form->k ) && isset ( $this->form->o ) && isset ( $this->form->r ))) {
			return false;
		}
		
		if ($this->form->k == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->o == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		if ($this->form->r == "") {
			getMessages()->addError('Nie podano liczby rat');
		}
		
		if (! getMessages()->isError()) {
			if (! is_numeric ( $this->form->k )) {
				getMessages()->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->o )) {
				getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->r )) {
				getMessages()->addError('Liczba rat nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->k = intval($this->form->k);
			$this->form->o = floatval($this->form->o);
			$this->form->r = intval($this->form->r);
			getMessages()->addInfo('Parametry poprawne.');
				
			$this->result->result = $this->form->k * (1 + $this->form->o / 100) / $this->form->r;
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function generateView(){
		global $user;

		getSmarty()->assign('user',$user);
				
		getSmarty()->assign('page_title','Super kalkulator');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
