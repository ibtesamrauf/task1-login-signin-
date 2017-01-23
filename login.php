<!DOCTYPE html>
<html>
<head>
	<title>JOB WORK</title>
</head>
<body>
<h1>LOGIN PAGE</h1>


<form action="login_save.php" method="GET">
	<table border="1">
		<tr>
			<td><label>Username</label></td>
			<td><input type="text"  pattern="[A-Za-z0-9][A-Za-z0-9 ]+" name="un" id="un"></td>
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