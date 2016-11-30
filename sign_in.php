<?php
require_once "mysql.inc";
$data=mysqli_query($conn,"SELECT * FROM guest ORDER BY guestID DESC");
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		td{background-color:#eee;}
		.nav a {
			color: #5a5a5a;
			font-size: 11px;
			font-weight: bold;
			text-transform: uppercase;
		}

		.nav li {
			display: inline;
		}
		body {
			font-family: "微軟正黑體";
			font-size: 16px;
		}
	</style>
	<title>註冊</title>
</head>
<body>
	<div class='nav nav-tabs' >
		<div class='container' >
			<ul class=' pull-left nav nav-tabs'>
				<li><a href='show.php'>HOME</a></li>
				<li><a href='login.php'>登入</a></li>
			</ul>
		</div>
	</div><br><br>
	<form method="post" action="sign_check.php">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<table class="table table-bordered">
						<tr>
							<td>帳號</td>
							<td><input type="text" name="account" style="width:300px;"required /></td>
						</tr>
						<tr>
							<td>密碼</td>
							<td><input type="password" name="password"  style="width:300px;"required /></td>
						</tr>
						<tr>
							<td>暱稱</td>
							<td><input type="text" name="user"  style="width:300px;"required /></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div style="text-align: center;"><input class="btn btn-primary" type="submit" value="註冊"></div>
	</form>
</body>
</html>