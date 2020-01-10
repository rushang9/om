<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor=c3c3c3>
<?php
error_reporting(0);
			$nameerror = $email= $passerror = "";
	
			if(isset($_POST['submit']))
			{
					if($_POST['name'] == "")
					{
						$nameerror = "Please enter valid name1";
					}
					if(!preg_match("/^[a-zA-z]*$/", $_POST['name']))
					{
						$nameerror = "Please enter valid name2";
					}


			if($_POST['email'] == "")
			{
				$email ="please enter pincode";
			}
			if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$email ="please enter valid email";
			}	
			if($_POST['password'] == "")
					{
						$passerror = "Please enter password";
					}
					if(!preg_match("/^[a-zA-z][0-9]*$/", $_POST['name']))
					{
						$passerror = "Please enter password in a-z,0-9";
					}
	
			}
			?>

<form method="POST">
<table>
	<tr>
	<td>
	name:
	</td>
	<td>
		<input type="text" name="name"/>*<?php echo $nameerror;?>
	</td>
	</tr>
	<tr>
	<td>
	 email:
	</td>
	<td>
		<input type="text" name="email"/>*<?php echo $email;?>
	</td>
	</tr>
	<tr>
	<td>
	password:
	</td>
	<td>
		<input type="password" name="password"/>*<?php echo $passerror;?>
	</td>
	</tr>
	<tr>
	<td>
		<a href=""><input type="submit" name="sign up" value="sign up"`/></a>
	</td>
	</tr>
</table>
</form>

</body>
</html>