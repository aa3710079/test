<?php
require_once "mysql.inc";
$data=mysqli_query($conn,"SELECT * FROM guest_user");
header('Content-Type: text/html; charset=utf-8');
$check=0;
for ($i=1; $i<=mysqli_num_rows($data) ; $i++) { 
	$rows = mysqli_fetch_assoc($data);
	if($_POST['account'] == $rows['account'])
	{
		$check=1;
	}
}
if($check==1){
	echo '帳號已存在，三秒後自動返回';
	header("Refresh: 3; url=sign_in.php");
}
else{
	$account = $_POST['account'];
	$password = $_POST['password'];
	$user = $_POST['user'];
	$sql = "INSERT INTO guest_user(account,password,user) VALUES('$account','$password','$user')";
	mysqli_query($conn,$sql);
	$_SESSION['account'] = $account;
	header("location:show.php");
}
?>
