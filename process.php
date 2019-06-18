<table class="table-active table-striped">
<?php
session_start();
require_once 'class/connect.php';
require_once 'class/show.php';

$category=$_POST["category"];
$show=new Show();
$array=$show->showBooks($category);
foreach ($array as $item2)
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
?>
</table>