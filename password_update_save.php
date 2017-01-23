<?php 
session_start();
if (isset($_SESSION["user"])) 
{

	$id = $_POST['id'];
	$pass = $_POST['pass'];

	include 'con_db.php';

	$query = "UPDATE user_info SET password1 = '".$pass."' WHERE id=".$id;
	$fetch = mysql_query($query) or die(mysql_error());
	// $result = mysql_fetch_assoc($fetch)

	if ($fetch) 
	{
		# code..
		echo "<script>
			alert('Password successfully updated');
			window.location.href='dashboard.php?id={$id}';
			</script>";
	}
	else
	{
		echo "<script>
			alert('Having some problem save again');
			window.location.href='dashboard.php?id={$id}';
			</script>";
	}
}
else
{
	echo "<script>
		alert('please login first');
		window.location.href='index.php';
		</script>";
}
?>
