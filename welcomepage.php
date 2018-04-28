<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	//include("session.php");
$userdata = array();
if(isset($_SESSION['userdata'])) {
	$userdata = unserialize($_SESSION['userdata']);
}
?>

<html>

<body>
<h3>Welcome <?php echo $userdata['user_name']; ?></h3>
<h4><a href="logout.php">Logout</a></h4>
</body>
</html>
