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
<style type="text/css">
	input[type="text"] 
	{
    	width: 280px;
	}
</style>
<body>

<span style="float: right;">
<a href="logout.php"><input type="button" value="LOGOUT"></a>
</span>
<h1>WELCOME TO DEASHBOARD</h1>
<span>
<a href="update_prifile.php"><input type="button" value="UPDATE PROFILE"></a>
</span>
<br><br>
<?php 
$id = $_SESSION["id"];
include 'con_db.php';

$query = "SELECT * FROM user_info where id=".$id;
$fetch = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($fetch)

?>

<form>
	<table>
		<tr>
			<td><label>First Name</label></td>
			<td><input type="text"  Readonly name="fn" id="fn" value="<?php
			if ($result['first_name'] == ' ') 
			{
			 	# code...
			 	echo 'First name is empty first update profile';
			} 
			else
			{
				echo $result['first_name'];
			}
			?>"></td>
		</tr>
		<tr>
			<td><label>Last Name</label></td>
			<td><input type="text" Readonly name="ln" id="ln" value="<?php
			if ($result['last_name'] == ' ') 
			{
			 	# code...
			 	echo 'First name is empty first update profile';
			} 
			else
			{
				echo $result['last_name'];
			}
			?>"></td>
		</tr>
		<tr>
			<td><label>DOB</label></td>
			<td><input type="date" Readonly name="ln" id="ln" value="<?php 
			if ($result['dob'] == ' ') 
			{
			 	# code...
			 	echo 'First name is empty first update profile';
			} 
			else
			{
				echo $result['dob'];
			}?>"></td>
			
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="email" Readonly  name="email" id="email" value="<?php echo $result['email']?>"></td>
		</tr>
		<tr>
			<td><label>Username</label></td>
			<td><input type="text" Readonly name="un" id="un" value="<?php echo $result['username']?>"></td>
		</tr>
		<tr>
			<td><label>password</label></td>
			<td><input type="text" Readonly name="pass" id="pass" value="<?php echo $result['password1']?>"></td>
			<td><a href="password_update.php?id=<?php echo $result['id'];?>"><input type="button"  value="password update"></a></td>
		</tr>
		<!-- <tr>
			<td colspan="2"><input type="submit"></td>
		</tr> -->
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
		window.location.href='index.php';
		</script>";
}
?>