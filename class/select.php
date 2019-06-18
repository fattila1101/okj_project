<?php
class Select extends Connect
{
	function __construct()
	{
		parent::__construct("books");
		parent::getConnection();
	}

	function selectUpload()
	{
		$array;
		$res=$this->conn->prepare("select distinct category from books_info order by category asc");
		$res->execute();
		while($row=$res->fetch())
			$array[]=$row;
		return $array;
	}

}
?>