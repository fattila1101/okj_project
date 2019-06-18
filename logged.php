<?php
session_start();
require_once 'class/connect.php';
require_once 'class/select.php';
require_once 'class/price.php';
require_once 'class/show.php';

$select=new Select();
$array=$select->selectUpload();

if(isset($_POST["logout"]))
{
	session_destroy();
	header("location: index.php");
}
$search_click=false;
if(isset($_POST["search"]))
{
	$search_click=true;
	$price=$_POST["price"];
	$search=new Price();
	$array2=$search->priceShow($price);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/logged.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			<form class="text-center w-25 p-4" method="post" action="">
				<div class="form-group">
					<?php
						if(isset($_SESSION["logged"]))
						{
							echo "Üdvözöllek ".$_SESSION["name"];
						}
						else
						{
							header("location: index.php");
						}
					?>
					<input type="submit" name="logout" value="Kilépés" class="btn btn-danger">
				</div>
				<div class="form-group">
					<select class="form-control" id="select">
						<?php
							foreach($array as $item)
								echo "<option>$item[category]</option>";
						?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" name="price" class="form-control" placeholder="Min ár...">
				</div>
				<div class="form-group">
					<input type="submit" name="search" value="Keresés" class="btn btn-warning">
				</div>
				<div id="content">
					<table class="table-active table-striped">
					<?php
						if($search_click)
						{
							foreach($array2 as $item2)
							{
							?>		
									<tr><td rowspan="6"><img src="img\<?php echo $item2[6]; ?>" style="width: 150px;"></td><td></td></tr>
									<tr><td><strong>Cím:</strong><?php echo $item2[1]; ?></td></tr>
									<tr><td><strong>Szerző:</strong><?php echo $item2[2]; ?></td></tr>
									<tr><td><strong>Kiadás éve:</strong><?php echo $item2[3]; ?></td></tr>
									<tr><td><strong>Ár:</strong><?php echo $item2[4]; ?></td></tr>	
									<tr><td><strong>Kategróia:</strong><?php echo $item2[5]; ?></td></tr>
							<?php
							}
						}
					?>
					</table>
				</div>
			</form>
		</div>
	</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/empty.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>