<?php
class Reg extends Connect
{
	function __construct()
	{
		parent::__construct("users");
		parent::getConnection();
	}

	function userReg($user,$pwd)
	{
		$res=$this->conn->prepare("INSERT INTO data (name, password) VALUES (?,?)");
		$res->bindparam(1,$user);
		$res->bindparam(2,$pwd);
		$row=$res->execute();
		if($row>0)
			return true;
	}	
}
?>