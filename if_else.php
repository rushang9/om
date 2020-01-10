<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
for ($i=1; $i<=5 ; $i++) 
{ 
	for ($j=1; $j<=5 ; $j++) 
	{ 
		if ($i==1 || $j==1 || $i==5 || $j==5) {

			echo" *";

		}
		else
		{
			echo"&nbsp;&nbsp;&nbsp";
		}
	} echo "<br>";
}
?>
</body>
</html>