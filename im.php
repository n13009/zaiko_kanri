!-- change only --!
<?php $fh = file("zaiko.csv"); ?>
<html><head><title>inventory management</title></head><body>
<form method="post" action="<?= $_SERVER['SCRIPT_NAME'] ?>">
itemNumber<select name="itemNumber">
<?php for($i = 0; $i < count($fh); $i++){
		print '<option value="' . $i . '">' .($i+1) . "</option>";
} ?> </select><br/>
productName<input type="text" name="productName" required /><br/>
stock<input type="text" name="stock" required /><br/>
<input type="submit"/>
<a href="zaiko.php">main page</a></form><br/></body></html>
<?php
$fh = file("zaiko.csv");
for($i = 0; $i < count($fh); $i++){
		print $fh[$i] . "<br/>";
}
$f = file("zaiko.csv");
if(isset($_POST['itemNumber'])){
		$fh = fopen("zaiko.csv","w+");
		flock($fh, LOCK_SH);
		array_splice($f,$_POST['itemNumber'],1,($_POST['itemNumber']+1).",".$_POST['productName'].",".$_POST['stock']."\n");
		foreach($f as $value){
				fwrite($fh,$value);
		}
		flock($fh, LOCK_UN);
		fclose($fh);
		header("Location: http://localhost/n13009/fp/zaiko/im.php");
}
?>
