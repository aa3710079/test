<?php  
require_once "mysql.inc";
date_default_timezone_set('Asia/Taipei');
$guestAccount=$_SESSION['account'];
$guestSubject=$_POST['subject'];
$guestContent=$_POST['content'];
$guestTime=date("Y:m:d H:i:s");
$sql = "INSERT INTO guest(guestAccount,guestSubject,guestContent,guestTime) VALUES('$guestAccount','$guestSubject','$guestContent','$guestTime')";
mysqli_query($conn,$sql);
header("location:show.php");
?>