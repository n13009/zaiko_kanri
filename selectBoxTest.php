<?php
$fh = file("zaiko.csv");
?>
<html><head><title>SELECT BOX TEST</title></head><body>
<form method="post" action="<?= $_SERVER['SCRIPT_NAME'] ?>">
itemNumber<select name="itemNumber">
<?php for($i = 1; $i < count($fh); $i++){
		print '<option value="' . $i . '">' . $i . "</option>";
} ?>
</select>
<input type="submit"/>
</form>
</body></html>
<?php
if(isset($_POST['itemNumber'])){
		print $_POST['itemNumber'];
		//header("Location: http://localhost/n13009/fp/zaiko/selectBoxTest.php");
}
?>
//im.phpの$fh = fopen("--","w+") & foreachをifissetの中に入れる
