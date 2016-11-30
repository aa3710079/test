<?php
require_once "mysql.inc";
$sql="SELECT g.guestSubject, g.guestContent, g.guestAccount, g.guestTime, u.user 
FROM guest g
INNER JOIN guest_user u ON g.guestAccount=u.account 
ORDER BY guestTime DESC";
$data=mysqli_query($conn,$sql);
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
  <meta charset="utf-8">
  <title>show</title>
</head>
<body>
  <div class='nav nav-tabs' >
    <div class='container' >
      <ul class=' pull-left nav nav-tabs'>
       <?php
       if(isset($_SESSION['account']))
       {
        echo "<li><a href='show.php'>Home</a></li>
        <li><a href='add_message.php'>新增留言</a></li>
      </ul>
      <ul class='pull-right nav nav-tabs'>
        <li><a href='logout.php'>登出</a></li>";
      }
      else
      {
        echo "<li><a href='show.php'>HOME</a></li>
        <li><a href='sign_in.php'>註冊</a></li>
        <li><a href='login.php'>登入</a></li>";
      }
      ?>
    </ul>
  </div>
</div><br><br>
<?php
for ($i=1; $i<=mysqli_num_rows($data) ; $i++) { 
  $rows = mysqli_fetch_assoc($data);?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>暱稱</td>
              <td><?php  echo $rows['user']; ?></td>
              <?php if(isset($_SESSION['account'])){
                if($_SESSION['account'] == $rows['guestAccount']){ 
                  ?>
                  <td rowspan="4" style="width: 45px; vertical-align:middle;"><a href="del.php?del=<?php echo $rows['guestID'] ?>" class="btn btn-primary" role="button">刪除</a>
                  </td>
                  <td rowspan="4" style="width: 45px; vertical-align:middle;"><a href="edit.php?edit=<?php echo $rows['guestID'] ?>" class="btn btn-primary" role="button">編輯</a></td>
                  <?php } } ?>
                </tr>
                <tr>
                  <td>主旨</td>
                  <td><?php echo $rows['guestSubject']?></td>
                </tr>
                <tr>
                  <td>內容</td>
                  <td><?php echo $rows['guestContent']?></td>
                </tr>
                <tr>
                  <td>時間</td>
                  <td><?php echo $rows['guestTime']?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <br><br>
      <?php } ?>
    </body></html>

