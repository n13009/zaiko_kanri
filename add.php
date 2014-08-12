<html><head><title>add</title></head><body>
<form method="post" action="<?= $_SERVER['SCRIPT_NAME'] ?>">
productName<input type="text" name="productName" required/><br/>
stock<input type="text" name="stock" required/><br/>
<input type="submit" name="add"/>
<a href="zaiko.php">main page</a><br/>
</form>
<?php
$f = file("zaiko.csv");
for($i = 0; $i < count($f); $i++){
		print $f[$i] . "<br/>";
}
$fh = fopen("zaiko.csv","a");
flock($fh, LOCK_SH);
if(isset($_POST['stock'])){
		fwrite($fh, (count($f)+1).",". $_POST['productName'] .",". $_POST['stock']."\n");
		header("Location: http://localhost/n13009/fp/zaiko/add.php");
}
flock($fh, LOCK_UN);
fclose($fh);
?>
