<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	</style>
</head>
<body>
	<form style="margin-left: 450px" action="<?php echo base_url()?>main/ulog1" method="post">
		<fieldset style="width:100px;height:500px">
			<legend style="color: red"><strong>Login</strong></legend>
		<table>
			<tr>
				<td>
		Email:</td>
		<td><input type="email" name="email"></td>
	</tr>

		<tr><td>Password:</td>
		<td><input type="password" name="password"></td></tr>
		<tr><td><input type="submit" name="Login" value="Login"></td></tr>

	</table>
</fieldset>


	</form>
</body>
</html>