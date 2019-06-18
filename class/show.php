<?php
class Show extends Connect
{
	function __construct()
	{
		parent::__construct("books");
		parent::getConnection();
	}

	function showBooks($category)
	{
		$array;
		$res=$this->conn->prepare("select * from books_info where category like ?");
		$res->bindparam(1,$category);
		$res->execute();
		while($row=$res->fetch())
			$array[]=$row;
		return $array;
	}
}
?>