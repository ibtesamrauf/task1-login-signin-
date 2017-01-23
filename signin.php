<!DOCTYPE html>
<html>
<head>
	<title>JOB WORK</title>
</head>
<body>
<h1>signin page</h1>
<form action="signin_save.php" method="POST">
	<table>
		<tr>
			<td><label>Username</label></td>
			<td><input type="text" pattern="[A-Za-z0-9][A-Za-z0-9 ]+" name="un" id="un"></td>
		</tr>
		
		<tr>
			<td><label>Email</label></td>
			<td><input type="email" name="email" id="email"></td>
		</tr>
		<tr>
			<td><label>password</label></td>
			<td><input type="text" pattern="[A-Za-z0-9][A-Za-z0-9 ]+" name="pass" id="pass"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>