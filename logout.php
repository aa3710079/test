<?php
require_once "mysql.inc";
unset($_SESSION["account"]);
header("location:show.php");
?>