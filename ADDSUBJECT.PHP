<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<form align="right">
<input type="submit" name="submit" value="LOG OUT" id="button">
	<input type="submit" name="submit" value="HOME" id="button">
</form>
<div  style="margin-left:360px;">
<form method="POST">
	<table>
	<h1>ADD SUBJECT</h1>
	<tr> <span style="color:red;">  </span></tr>
		<tr>
		<td>
		Enter Subject:
		</td>
		<td>
		<input type="text" name="sub">
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
<?php
	//$error="";
	$sub=$_POST['sub'];
	$mysqli=mysqli_connect("localhost","root","","project");

	if (isset($_POST['submit'])) {
		$result=mysqli_query($mysqli,"INSERT INTO subject(subject_name)
			VALUES('".$sub."')");


		

		if($result)
		{
			echo "Record Saved";
		}
		else
		{
			echo "Record Not saved";
		}
}
 ?>
</body>
</html>