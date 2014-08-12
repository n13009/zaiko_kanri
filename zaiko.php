<html><head><title>zaiko kanri system</title></head><body>
<a href="add.php">add</a>
<a href="im.php">inventory management</a>
<br/>Item Number,Product Name,Stock<br/>
<?php
$fh = file("zaiko.csv");
for($i = 0; $i < count($fh); $i++){
		print $fh[$i] . "<br/>";
}
?>
</body></html>
