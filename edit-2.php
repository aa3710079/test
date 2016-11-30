<?php  
require_once "mysql.inc";
date_default_timezone_set('Asia/Taipei');
$guestSubject=$_POST['subject'];
$guestContent=$_POST['content'];
$guestTime=date("Y:m:d H:i:s");
$id = $_POST['id'];
$sql = "UPDATE guest SET guestSubject = '$guestSubject',guestContent = '$guestContent',guestTime = '$guestTime' WHERE guestID = '$id'";
mysqli_query($conn,$sql);
header("location:show.php");
?>