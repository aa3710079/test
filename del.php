<?php 
require_once "mysql.inc";
header('Content-Type: text/html; charset=utf-8');
$id = $_GET['del'];
$data = mysqli_query($conn,"SELECT * FROM guest WHERE guestID = $id");
$row = mysqli_fetch_assoc($data);
if (isset($_SESSION['account'])) {
	if ($_SESSION['account'] == $row['guestAccount'] ) {
		mysqli_query($conn,"DELETE FROM guest WHERE guestID = $id");
	}
}
header("location:show.php");
?>
