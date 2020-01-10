<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor=c3c3c3>
<?php
error_reporting(0);
			$nameerror = $email= $passerror = "";
	
			if(isset($_POST['sign_up']))
			{
					if(empty($_POST['name']))
					{
						$nameerror = "Please enter valid name1";
					}
					if(!preg_match("/^[a-zA-z]*$/", $_POST['name']))
					{
						$nameerror = "Please enter valid name2";
					}
				

			else if($_POST['email'] == "")
			{
				$email ="please enter email";
			}
			else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$email ="please enter valid email";
			}	
			else if($_POST['password'] == ""){
					{
						$passerror = "Please enter password";
					}
					if(!preg_match("/^[a-zA-z][0-9]*$/", $_POST['name']))
					{
						$passerror = "Please enter password in a-z,0-9";
					}
	
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
		<a href=""><input type="submit" name="sign_up" value="sign up"`/></a>
	</td>
	</tr>
</table>
</form>

</body>
</html>