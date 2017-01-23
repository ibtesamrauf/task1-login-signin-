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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
	    var dtToday = new Date();
	    
	    var month = dtToday.getMonth() + 1;
	    var day = dtToday.getDate();
	    var year = dtToday.getFullYear();
	    if(month < 10)
	        month = '0' + month.toString();
	    if(day < 10)
	        day = '0' + day.toString();
	    
	    var maxDate = year + '-' + month + '-' + day;
	   
	    $('#DOB').attr('max', maxDate);
		});
	</script>
</head>
<body>

<span style="float: right;">
<a href="logout.php"><input type="button" value="LOGOUT"></a>
</span>
<h1>WELCOME TO UPDATE PROFILE</h1>

<br>
<?php 
// session_start();
$id = $_SESSION["id"];
include 'con_db.php';

$query = "SELECT * FROM user_info where id=".$id;
$fetch = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($fetch)

?>

<form action="update_profile_save.php" method="POST"> 
	<table>
		<tr>
			<td><label>Username</label></td>
			<td><input type="text" Readonly name="un" id="un" value="<?php echo $result['username']?>"></td>
		</tr>
		<tr>
			<td><label>password</label></td>
			<td><input type="text" Readonly name="pass" id="pass" value="<?php echo $result['password1']?>"></td>
			<td><a href="password_update.php?id=<?php echo $result['id'];?>"><input type="button"  value="password update"></a></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="email" Readonly  name="email"  id="email" value="<?php echo $result['email']?>"></td>
		</tr>
		<tr>
			<td><label>First Name</label></td>
			<td><input type="text"  name="fn" id="fn" pattern="[A-Za-z0-9][A-Za-z0-9 ]+" value="<?php echo $result['first_name']?>"></td>
		</tr>
		<tr>
			<td><label>Last Name</label></td>
			<td><input type="text"  name="ln" id="ln" pattern="[A-Za-z0-9][A-Za-z0-9 ]+" value="<?php echo $result['last_name']?>"></td>
		</tr>
		<tr>
			<td><label>DOB</label></td>
			<td><input type="date" name="DOB" id="DOB"  min="1990-01-02" value="<?php echo $result['dob']?>" ></td>
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
		window.location.href='index.php';
		</script>";
}
?>