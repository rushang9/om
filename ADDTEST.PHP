
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<?php
$mysqli = new mysqli("localhost","root","","project");

$result = $mysqli->query("SELECT sub_id,sub_name FROM sub_add");


?>
<body>
<form align="right">
<input type="submit" name="submit" value="LOG OUT" id="button">
	<input type="submit" name="submit" value="HOME" id="button">
</form>
<div  style="margin-left:360px;">
<form>
	<table>
	<h1>ADD TEST</h1>
	<tr>
	<td>
		SUB_ID:
		</td>
		<td>
		<select>
			
		</select>
		</td>
		</tr>
		<tr>
		<td>
		Enter Testname:
		</td>
		<td>
		<input type="text" name="">
		</td>
		</tr>
			<tr>
		<td>
		Enter Total Question:
		</td>
		<td>
		<input type="text" name="">
		</td>
		</tr>
	
		<tr>
		<td colspan="2" align="center">
			<input type="submit" name="submit" value="ADD" id="button">
		</td>
		</tr>
	</table>
</form>
</div>
<br><br><br><br><br><br><br><br><br><br>

</body>
<?php

error_reporting(0);

$sub = $_POST['sub'];
$etn = $_POST['test'];
$etq = $_POST['no'];

if(isset($_POST['submit']))
{
$mysqli = new mysqli("localhost","root","","project");

$result = $mysqli->query("INSERT INTO test_add(sub_id,test_name,total_question) VALUES('".$sub."','".$etn."','".$etq."')");

if($result){
	echo "Record Saved";
}
else{
	echo "Record not Saved";
}

}

?>
</html>