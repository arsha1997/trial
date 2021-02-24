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
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/userreg2">
		<fieldset style="width:300px;height:600px">
			<legend style="color: red"><strong>Registration</strong></legend>
		<table>
			<tr>
				<td>
		Firstname:</td>
		<td><input type="text" name="fname" required="required" maxlength="25" pattern="[a-zA-Z]+"></td>
	</tr>
	<tr>
		<td>
		Lastname:</td>
		<td><input type="text" name="lname" required="required" maxlength="25" pattern="[a-zA-Z]+"></td>
	</tr>
	<tr>
		<td>
		Username:</td>
		<td><input type="text" name="uname" required="required" maxlength="25" pattern="[a-zA-Z0-9]+"></td>
	</tr>
	<tr>
		<td>
		password:</td>
		<td><input type="password" name="pass" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td>
	</tr>
	<tr>
		<td>
		Mobile:</td>
		<td><input type="text" name="mobile" required="required" pattern="[7-9]{1}[0-9]{9}"></td>
	</tr>
	
		<tr><td>Email:</td>
		<td><input type="email" name="email" required="required"></td></tr>
		<tr><td><input type="submit" name="sub" value="Register"></td></tr>
		

	</table>
</fieldset>


	</form>
</body>
</html>