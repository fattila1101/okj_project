<?php
session_start();
require_once 'class/connect.php';
require_once 'class/login.php';
require_once 'class/reg.php';
require_once 'class/check.php';
require_once 'class/length.php';

$db=new Connect("users");
$db->getConnection();

$log_click=false;
if(isset($_POST["log"]))
{
	$log_click=true;
	$logged=false;
	$name=trim($_POST["name"]);
	$pwd=trim(sha1($_POST["pwd"]));
	$login=new Login();
	if($login->userLogin($name,$pwd))
	{
		$_SESSION["logged"]=true;
		$_SESSION["name"]=$name;
		header("location: logged.php");
	}
	else
		$logged=false;
}

$reg_click=false;
$reserved=false;
$short=false;
if(isset($_POST["reg"]))
{
	$reg_click=true;
	$name=trim($_POST["name"]);
	$pwd=trim($_POST["pwd"]);
	$reg=new Reg();
	$check=new Check();
	$lenght=new Length();
	if(!$lenght->pwdLength($pwd))
		$short=true;
	else
	{
		if($check->userCheck($name))
			$reserved=true;
		else
		{
			$reg->userReg($name,sha1($pwd));
			$reg_success=true;
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center align-items-center vh">
			<form class="text-center w-25" method="post" action="">
				<div class="error text-danger font-weight-bold">
					<?php
						if($log_click && !$logged)
							echo "Hibás belépési adat(ok)!";
						if($short)
							echo "Jelszó hossz min.6";
						if($reserved)
							echo "Foglalt név!";
						if($reg_click && !$reserved && !$short)
							echo "<span class='text-success'>Sikeres regisztráció!</span>";
					?>
				</div>
				<div class="form-group">
					<input type="text" name="name" class="form-control" id="name" placeholder="Név..."> 
				</div>
				<div class="form-group">
					<input type="password" name="pwd" class="form-control" id="pwd" placeholder="Jelszó...">
				</div>
				<div class="form-group">
					<input type="submit" name="log" class="btn btn-warning" value="Belépés">
					<input type="submit" name="reg" class="btn btn-danger" value="Regisztrálás">
				</div>
			</form>
		</div>
	</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/empty.js"></script>
</body>
</html>