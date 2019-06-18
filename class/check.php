<?php
class Check extends Connect
{
	function __construct()
	{
		parent::__construct("users");
		parent::getConnection();
	}

	function userCheck($user)
	{
		$res=$this->conn->prepare("select name from data where name=?");
		$res->bindparam(1,$user);
		$res->execute();
		$row=$res->fetch();
		if($row>0)
			return true;
	}	
}
?>