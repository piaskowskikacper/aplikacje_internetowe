<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->msc = getFromRequest('msc');
		$this->form->opr = getFromRequest('opr');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->msc ) && isset ( $this->form->opr ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->msc == "") {
			getMessages()->addError('Nie podano czasu trwania kredytu');
		}
		if ($this->form->opr == "") {
			getMessages()->addError('Nie podano wysokości oprocentowania');
		}

		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->msc )) {
				getMessages()->addError('Ilość miesięcy nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->opr )) {
				getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
			}

		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	// public function process(){
	public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = floatval($this->form->kwota);
			$this->form->msc = floatval($this->form->msc);
			$this->form->opr = floatval($this->form->opr);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji


			$this->result->result = ($this->form->kwota / $this->form->msc) * (($this->form->opr/100)+1);

			
			getMessages()->addInfo('Wykonano obliczenia.');

			try{
		
				$database = new \Medoo\Medoo([
			
					'type' => 'mysql',
					'host' => 'localhost',
					'database' => 'kalkulator',
					'username' => 'root',
					'password' => '',
				
					// [optional]
					'charset' => 'utf8',
					'collation' => 'utf8_polish_ci',
					'port' => 3306,
					'option' => [
						\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
						\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
						]
					]);
							
							$database->insert("kalkulator", [
					"kwota" => $this->form->kwota,
					"lat" => $this->form->msc,
					"procent" => $this->form->opr,
					"rata" => $this->result->result,
					"data" => date("Y-m-d H:i:s")
				]);
						
				}
				catch (\PDOEXception $ex){
					getMessages()->addError("Blad bazy: ".$ex->getMessages());
				}



		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
