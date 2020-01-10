<?php 
session_start();
$mysqli=mysqli_connect("localhost","root","","project");

$error="";
if (isset($_POST['submit'])) {
	
$result=mysqli_query($mysqli,"SELECT * FROM login WHERE username='".$_POST["user_name"]."' and password='".$_POST["password"]."'");

$row=mysqli_fetch_array($result);
if (is_array($row)) {
	$_SESSION["id"] = $row["id"];

}
else{
	$error= "in valid username !";
}
}
if (!empty($_POST["logout"])) {
	$_SESSION["id"]="";
	session_destroy();
}

?>


<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<?php
if (empty($_SESSION["id"])) {
	
 ?>

<center>
<div>
<form method="POST">

<table>
<h1>

LOGIN
</h1>
<tr> <span style="color:red;"> <?php echo $error; ?> </span></tr>
<tr>
<td>
	<h3>user name:</h3>
</td>
<td>
	<input type="text" name="user_name">
</td>
</tr>
<tr>
<td>	
<h3>Password:</h3>
</td>
<td>
     <input type="password" name="password">
     </td>
</tr>
<tr align="left">
<td></td>
<tr>
</tr>
<td colspan="2" align="center">
    <a href="homepage.php"><input type="submit" name="submit" value="SIGN IN" id="button" ></a>
    </td>
</tr>
</table>
</form>
</div>
<?php } else {
	$result=mysqli_query($mysqli,"SELECT * FROM login WHERE id='".$_SESSION["id"]."' ");
	$row=mysqli_fetch_array($result);
?>
	
	
<form align="right">
<a href="logout.php"><input type="button" name="submit" value="LOG OUT" id="button"></a>
    <input type="submit" name="submit" value="HOME" id="button">
</form>

<center>
<div>
<form action="ADDSUBJECT.PHP">
<table>
 <td><br>
   <a href="ADDSUBJECT.PHP"><input type="submit" name="sign in" value="ADD SUB" id="button"></a><br></td></table>
    </form>
    <form action="ADDTEST.PHP">
<table>
 <td><br>
   <a href="ADDTEST.PHP"><input type="submit" name="sign in" value="ADD TEST" id="button"></a><br>
   </td>
   </table>
   </form>
   <form action="ENTERQUESTION.PHP">
<table>
 <td><br>
 <a href="ENTERQUESTION.PHP"><input type="submit" name="sign in" value="ADD QUESTION" id="button"></a><br><br>
   </td>
   </table>
   </form>

    </div>
    </center>
<br><br><br><br><br><br><br><br><br>
<?php
} 
?>
</body>
</html>