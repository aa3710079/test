<?php
require_once "mysql.inc";
$id = $_GET['edit'];
$sql = "SELECT * FROM guest WHERE guestID = '$id'";
$data = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($data);
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
	<title>編輯留言</title>
	<meta charset="utf-8" />
</head>
<body>
	<div class='nav nav-tabs' >
		<div class='container' >
			<ul class=' pull-left nav nav-tabs'>
				<li><a href='show.php'>HOME</a></li>
			</ul>
			<ul class=' pull-right nav nav-tabs'>
				<li><a href='logout.php'>登出</a></li>
			</ul>
		</div>
	</div><br><br>
	<form method="post" action="edit-2.php">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<table class="table table-bordered">
						<tr>
							<td>
								留言主旨: </td>
								<td style="vertical-align:middle;"><input style="width:300px;" type="text" name="subject" value="<?php echo $rows['guestSubject'] ?>" required /></td>
							</tr>
							<tr>
								<td>留言內容: </td>
								<td><textarea name="content" rows="10" cols="35"><?php echo $rows['guestContent'] ?></textarea></td>
							</tr>
							<input type="hidden" name="id" value="<?php echo $rows['guestID'] ?>">
						</table>
						<div style="text-align: center;"><input class="btn btn-primary" type="submit" value="送出"></div>
					</div>
				</div>
			</div>
		</form>
	</body>
	</html>



