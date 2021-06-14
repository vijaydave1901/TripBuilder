<?php 
require_once("DBConfig.php");

class Database {
	public $Connection;
	
	function __construct(){
		$this->OpenConnection();
	}
	function __destruct(){
		$this->CloseConnection();
	}
	public function OpenConnection(){
		// Get constants values
		global $DB_HOST , $DB_USER , $DB_PASSWORD , $DB_NAME;
		
		try{
			$this->Connection = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",
			                            $DB_USER, $DB_PASSWORD);
			$this->Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected Successfully !";
		}catch(PDOException $e)
		{
			echo "Connection Failed: ".$e->getMessage();
		}
		
	}
	
	public function CloseConnection(){
		$this->Connection = null;
		//echo "Connection Closed ! ";
	}

	//QUESTION 1.1 (15 points) ===========================================================================
	public function QuerySelectAllRows($sql) {
		try{
			$res = $this->Connection->prepare($sql);
			$res->execute();
			
			$result = $res->fetchAll(PDO::FETCH_OBJ);
			return $result;
			
		}catch(PDOException $e)
		{
			echo "Failed: ".$e->getMessage();
		}
	}

	//QUESTION 1.1 (12.5 points) ===========================================================================
	public function QuerySelectRow($sql) {
		try{
			$res = $this->Connection->prepare($sql);
			$res->execute();
			
			$result = $res->fetch(PDO::FETCH_OBJ);
			return $result;
			
		}catch(PDOException $e)
		{
			echo "Failed: ".$e->getMessage();
		}		
		
	}
	private static $instance;

	public static function Get_Instance(){
		if(!isset(self::$instance)){
			self::$instance = new Database();
		}
		return self::$instance;
	}
	public function Get_Connection(){
		return $this->Connection;
	}

	//QUESTION 1.1 (12.5 points) ===========================================================================
	public function QueryUpdate($sql) {
		try{
			$this->Connection->exec($sql);
			return true;
		}catch(PDOException $e){
			echo "Failed ".$e->getMessage();
			return false;
		}			
	}

	public static function Execute_Query($query){

		try{
			$query1 = $query;
			$database = self::Get_Instance();
			$Connection = $database->Get_Connection();
			$statement = $Connection->prepare($query1);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $result;
			
		} catch(PDOException $e ){
			echo "Query Failed ". $e->getMessage();
		}
	}
}
?>