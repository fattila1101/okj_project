<?php
class Connect
{
	protected $host;
	protected $dbname;
	protected $user;
	protected $pwd;
	protected $conn;

	function __construct($dbname)
	{
		$this->host="localhost";
		$this->dbname=$dbname;
		$this->user="root";
		$this->pwd="";
	}

	function getConnection()
	{
		try
		{
			$this->conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pwd);
			$this->conn->exec("SET NAMES 'UTF8'");
		}
		catch(PDOException $e)
		{
			die("<h1>Adatbázis hiba!</h1>");
		}
	}
}

?>