<?php 
session_start();
if (isset($_SESSION["user"])) 
{
	# code...


?>

<!DOCTYPE html>
<html>
<head>
	<title>JOB WORK</title>
</head>
<body>

<h1>WELCOME TO UPDATE PASSWORD</h1>
<span align="float: right;">
<a href="logout.php"><input type="button" value="LOGOUT"></a>
</span>
<br><br><br>
<?php 

include 'con_db.php';
$id = $_SESSION["id"];
$query = "SELECT * FROM user_info where id=".$id;
$fetch = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($fetch)

?>

<form action="password_update_save.php" method="POST">
	<table>
		<tr>
			<td><label>Id</label></td>
			<td><input type="text" Readonly name="id" id="id" value="<?php echo $result['id']?>"></td>
		</tr>
		
		<tr>
			<td><label>Username</label></td>
			<td><input type="text" Readonly name="un" id="un" value="<?php echo $result['username']?>"></td>
		</tr>
		<tr>
			<td><label>password</label></td>
			<td><input type="text"  pattern="[A-Za-z0-9]+" name="pass" id="pass" value="<?php echo $result['password1']?>"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php 

}
else
{
	echo "<script>
		alert('please login first');
		window.location.href='login.php';
		</script>";
}
?>