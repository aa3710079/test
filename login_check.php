<?php
require_once "mysql.inc";
$data=mysqli_query($conn,"SELECT * FROM guest_user");
header('Content-Type: text/html; charset=utf-8');
$check = 0;
for ($i=1; $i<=mysqli_num_rows($data) ; $i++) { 
$rows = mysqli_fetch_assoc($data);
if($_POST['account'] == $rows['account'] && $_POST['password'] == $rows['password'])
{
	$check=1;
	$_SESSION['account'] = $rows['account'];
	$_SESSION['user'] = $rows['user'];
	header("location:show.php");
}
}
if($check == 0){
	header("location:login.php?msg=error");
}
?>