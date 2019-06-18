<?php
class Price extends Connect
{
	function __construct()
	{
		parent::__construct("books");
		parent::getConnection();
	}

	function priceShow($price)
	{
		$array;
		$res=$this->conn->prepare("select * from books_info where price>?");
		$res->bindparam(1,$price);
		$res->execute();
		while($row=$res->fetch())
			$array[]=$row;
		return $array;
	}
}
?>