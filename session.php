<?php
error_reporting(0);

session_start();

$mysqli = mysqli_connect("localhost","root","","new");

$error = "";

if(isset($_POST['submit'])){

$result = mysqli_query($mysqli,"SELECT * FROM session WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");

$row=mysqli_fetch_array($result);
if(is_array($row)) {
	$_SESSION["ID"] = $row['ID'];
	} else {
	$error = "Invalid Username or Password!";
	}

}

if(!empty($_POST["logout"])) {
	$_SESSION["id"] = "";
	session_destroy();
}

?>
<html>
<head>
	<title></title>
</head>
<body>
<?php if(empty($_SESSION["ID"])) { ?>
<form method="POST">
<table>
	<tr>
	<td>
	<?php
	echo $error;
	?>
	</td>
	</tr>
	<tr>
	<td>
	 email:
	</td>
	<td>
		<input type="text" name="email"/>
	</td>
	</tr>
	<tr>
	<td>
	password:
	</td>
	<td>
		<input type="password" name="password"/>
	</td>
	</tr>
	<tr>
	<td>
		<input type="submit" name="submit" value="sign in"/>
	</td>
	</tr>
</table>
</form>
<?php 
} else { 
$result = mysqlI_query($mysqli,"SELECT * FROM session WHERE ID='" . $_SESSION["ID"] . "'");
$row  = mysqli_fetch_array($result);
?>
<form method="post">
	<h1> Welcome , <?php echo "Hello "; ?>You have successfully log in </h1>
	<tr>
		<td> <input type="submit" name="logout" value="LOGOUT"></td>
	</tr>
</form>
<?php } ?>

</body>
</html>