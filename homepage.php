<?php
session_start();
$mysqli=mysqli_connect("localhost","root","","project");
session_destroy();
header("location:LOGIN.php");

?>
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
<center>
<div>
<form>
<table>
<td><br>
    <input type="submit" name="sign in" value="ADD SUB" id="button"><br><br><br>
    <input type="submit" name="sign in" value="ADD TEST" id="button"><br><br><br>
    <input type="submit" name="sign in" value="ADD QUESTION" id="button"><br><br>
    </td>
    </tr>
    <tr>
    	<td></td>
    </tr>
    </table>
    </form>
    </div>
    </center>
<br><br><br><br><br><br><br><br><br>
</body>
</html>