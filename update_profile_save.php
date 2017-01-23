<?php 
session_start();
if (isset($_SESSION["user"])) 
	{
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$dob = $_POST['DOB'];
	// session_start();

	$id = $_SESSION['id']; 

	include 'con_db.php';

	$query = "UPDATE user_info SET first_name = '".$fn."', last_name = '".$ln."', dob = '".$dob."' WHERE id=".$id;
	$fetch = mysql_query($query) or die(mysql_error());
	// $result = mysql_fetch_assoc($fetch)

	if ($fetch) 
	{
		# code..
		echo "<script>
			alert('Profile successfully updated');
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
