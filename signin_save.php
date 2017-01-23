<?php 
$email = $_POST['email'];
$username = $_POST['un'];
$password = $_POST['pass'];

include 'con_db.php';

$query = "INSERT INTO user_info(first_name,last_name,email,username,password1,dob) VALUES(' ',' ','".$email."','".$username."','".$password."',' ')";
$fetch = mysql_query($query) or die(mysql_error());

if ($fetch) 
{
	# code...
		echo "<script>
		alert('data inserted now login first');
		window.location.href='login.php';
		</script>";
}
else
{
	echo "<script>
	alert('Having some problem signin again');
		window.location.href='signin.php';
		</script>";
}

?>