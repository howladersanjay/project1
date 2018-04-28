<?php
$conn = mysql_connect("localhost", "root", "HIbuddy12");
$db = mysql_select_db("startup", $conn);

//session_start();

$user_login = $_SESSION['email'];
$query = mysqli_fetch_array("select username from user_details where email='".$user_login."'", $conn);
$row = mysql_fetch_array($query);
$user_session = $row['username'];

if(!isset($_SESSION['email'])) {
	header("location:newhomepage.php");
}

?>

