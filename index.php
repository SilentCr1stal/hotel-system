<?php
session_start();
// session_destroy();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require_once './public/templates/header.php';
require './connect.php';
?>
<?php
$page = $_GET['page'];

if (!isset($page) || $page == 'index')
  require_once './public/templates/main.php';
elseif ($page == 'catalog') {
  // $sql = mysqli_query($link, 'select * from hotels');
  require_once './public/templates/catalog.php';
} elseif ($page == 'hotel')
  require_once './public/templates/hotel.php';
  // Регистрация и авторизация
elseif ($page == 'profile')
  require './public/authorization/index.php';
elseif ($page == 'admin')
  require './public/authorization/admin.php';
elseif ($page == 'register')
  require './public/authorization/register.php';
?>
<?php
require_once './public/templates/footer.php';
?>
