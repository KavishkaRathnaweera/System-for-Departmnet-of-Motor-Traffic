<?php 

class DBconnection{
	private $host = "localhost";
	private $user = "root";
	private $psswd = "";
	private $dbName = "dmt";


	protected function connect(){
		//dsn variable set for create pdo 
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;

		//create pdo instance
		$pdo = new PDO($dsn,$this->user,$this->pwd);

		// set default fetch mode
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

		// return customise PDO object
		return $pdo;
	}
}