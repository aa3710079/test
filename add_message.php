<!DOCTYPE html>
<html>
<head>
	<title>新增留言</title>
	<meta charset="utf-8" />
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
		body{
			font-family: "微軟正黑體";
			font-size: 16px;
		}
	</style>
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
	<form method="post" action="add.php">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<table class="table table-bordered">
						<tr>
							<td>留言主旨</td>
							<td style="vertical-align:middle;"><input type="text" name="subject" style="width:300px;" required /></td>
						</tr>
						<tr>
							<td>留言內容</td>
							<td><textarea name="content" rows="10" cols="35"></textarea></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div style="text-align: center;"><input class="btn btn-primary" type="submit" value="送出"></div>
	</form>
</body>
</html>