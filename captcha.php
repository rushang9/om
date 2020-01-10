<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
$aarr=range(99,9);
$barr=range(99, 9);
$rdm_a=array_rand($aarr);
$rdm_b=array_rand($barr);
$a=$aarr[$rdm_a];
$b=$barr[$rdm_b];
$r=$a+$b;
$cap=$a."+" .$b;
if(isset($_POST['b1'])){
if ($_POST['t1']==$_POST['t2']) {
	echo "<center>"."<h1 style='color:blue;'>"."Welcome" ."</h1>"."</center>";
}
else{
	echo "<center>"."<h1 style='color:red;'>"."enter valid captcha" ."</h1>"."</center>";
}
}
?>
<body>
<center>


<form method="POST">
<?php
echo $cap."="; 
?>
	<input type="hidden" name="t1" value="<?php echo $r?>">
	<input type="text" name="t2"><br>
	<input type="submit" name="b1" value="match">
</form>
</center>
</body>
</html>