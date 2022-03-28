<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
	private $msgs;
	private $infos;
	private $form;
	private $result;

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->k = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->o = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
		$this->form->r = isset($_REQUEST ['raty']) ? $_REQUEST ['raty'] : null;
	}

	public function validate() {
		if (! (isset ( $this->form->k ) && isset ( $this->form->o ) && isset ( $this->form->r ))) {
			return false;
		}
		
		if ($this->form->k == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->o == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		if ($this->form->r == "") {
			$this->msgs->addError('Nie podano liczby rat');
		}
		
		if (! $this->msgs->isError()) {
			if (! is_numeric ( $this->form->k )) {
				$this->msgs->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->o )) {
				$this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->r )) {
				$this->msgs->addError('Liczba rat nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->k = intval($this->form->k);
			$this->form->o = floatval($this->form->o);
			$this->form->r = intval($this->form->r);
			$this->msgs->addInfo('Parametry poprawne.');
				
			$this->result->result = $this->form->k * (1 + $this->form->o / 100) / $this->form->r;
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 06');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('page_header','Kontroler główny');
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
	}
}
