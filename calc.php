<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
no1=<input type="text" name="no1"/>
<select name="op">
	<option name="+">+</option>
	<option name="-">-</option>
	<option name="*">*</option>
	<option name="/">/</option>
</select>
no2=<input type="text" name="no2"/>
<input type="submit" name="ans" value="ans"/>
</form>
</body>
<?php
error_reporting(0);
if ($_POST['op']=='+') {
  
	$ans=$_POST['no1']+$_POST['no2'];

}
elseif ($_POST['op']=="-") {

	$ans=$_POST['no1']-$_POST['no2'];
}
elseif ($_POST["op"]=="*") {

	$ans=$_POST['no1']*$_POST['no2'];
}
elseif ($_POST["op"]=="/") {

	$ans=$_POST['no1']/$_POST['no2'];
}
echo "Add = ".$ans;
?>

</html>