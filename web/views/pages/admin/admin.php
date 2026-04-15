<link rel="stylesheet" href="views\assets\css\admin\admin.css">
<?php
if(!isset($_SESSION["admin"])){
  include "login/login.php";
}else{
  include "dashboard/dashboard.php";
}

?>
