<?php

class Sql extends PDO {

	private $conn;

	public function __construct(){

//		$this->conn = new PDO("oci:dbname=localhost/xe", "dbphp7", "teste123"); //conexão oracle
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");  //conexão php7
//        $this->conn = new PDO("sqlsrv:Database=dbphp7;server=GIVALDO-NB\SQLEXPRESS;ConnectionPooling=0", "root", "root");  //conexão sqlserver



	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParam($statement, $key, $value);
			
		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array 
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);

	}

}

?>