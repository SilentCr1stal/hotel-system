<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require './connect.php';
if ($_POST['id_room']) {
  $query = 'Delete from booking where id_room = '.$_POST['id_room'].' and id_user = '.$_POST['id_user'];
  $result = mysqli_query($link, $query);

}
$query = 'Delete from comments where id_user = '.$_POST['id_user'];
$result = mysqli_query($link, $query);

$query = 'Delete from users where id_user = '.$_POST['id_user'];
$result = mysqli_query($link, $query);
header("HTTP/1.1 301 Moved Permanently from 10 line");
header("Location: " . $_SERVER['HTTP_REFERER']);
?>