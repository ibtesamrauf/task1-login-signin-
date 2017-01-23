<?php 
session_start();
if (isset($_SESSION["user"])) 
{
	# code...
// session_start();
unset($_SESSION['user']);

	echo "<script>
		alert('sussessfully logout');
		window.location.href='index.php';
		</script>";
}
else
{
	echo "<script>
		alert('please login first');
		window.location.href='index.php';
		</script>";
}
?>