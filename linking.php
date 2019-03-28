	<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'NCC'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql1 = 'SELECT * FROM alumini';
$query1 = mysqli_query($conn, $sql1);
if (!$query1) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>