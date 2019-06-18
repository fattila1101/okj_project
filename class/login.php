<?php
class Login extends Connect
{
	function __construct()
	{
		parent::__construct("users");
		parent::getConnection();
	}

	function userLogin($user,$pwd)
	{
		$logged=false;
		$res=$this->conn->prepare("select name,password from data where name=? and password=?");
		$res->bindparam(1,$user);
		$res->bindparam(2,$pwd);
		$res->execute();
		$row=$res->fetch();
		if($row>0)
			$logged=true;
		return $logged;
	}

}

?>