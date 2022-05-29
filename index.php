<?php
session_start();
// session_destroy();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require_once './public/templates/head.php';
require_once './public/templates/header.php';
require './connect.php';
?>
<?php
$page = $_GET['page'];

if (!isset($page) || $page == 'index')
  require_once './public/templates/main.php';
elseif ($page == 'catalog') {
  require_once './public/templates/catalog.php';
} elseif ($page == 'hotel')
  require_once './public/templates/hotel.php';
?>
<?php
require_once './public/templates/footer.php';
?>
