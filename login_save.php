<?php 

$username1 = $_GET['un'];
$password = $_GET['pass'];

session_start();
include 'con_db.php';

$query = "SELECT * FROM user_info ";
$fetch = mysql_query($query) or die(mysql_error());
$test = false;

$flag_username = false;
$flag_password = false;
$id_number = 0;

	while($result = mysql_fetch_assoc($fetch))
	{
		// if ($username1 != $result['username'] && $password != $result['password1']) 
		// {
		// 	# code...
		// 	echo "<br>both are in correct<br>";
		// }
		if ($username1 == $result['username']) 
		{
			// echo $result['username'];
			$flag_username=true;
			# code...
			if ($password == $result['password1']) 
			{
				// echo $result['password1'];
				// echo "<br>CORRECT password<br>";
				// $_SESSION["user"] = $username1;
				// header("location: dashboard.php");
				$flag_password =true;
				$id_number = $result['id'];
				$_SESSION["id"] = $result['id'];
			}
			// else
			// {
			// 	echo "<br>incorrect password<br>";
			// 	break;
			// 	// break;
			// 	// echo "<script>
			// 	// alert('Password is incorrect');
			// 	// window.location.href='login.php';
			// 	// </script>";
			// }
		}
		
	}
	// if (!$flag_username && !$flag_password) 
	// {
	// 	# code...
	// 	echo "both are wrong";
	// 	break; 
	// }
	// else

	if ($flag_username) 
	{
		# code...
		if ($flag_password) 
		{
			// code...
			$_SESSION["user"] = $username1;

			header("location: dashboard.php?id={$id_number}");
		}
		else
		{
				echo "<script>
				alert('Password is incorrect');
				window.location.href='login.php';
				</script>";
		}
				
	}
	else
	{
		echo "<script>
				alert('Username is incorrect');
				window.location.href='login.php';
				</script>";
		
	}


?>