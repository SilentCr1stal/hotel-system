<?php
require './connect.php';
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (empty($_POST['textComment'])) {
  header("HTTP/1.1 301 Moved Permanently from 7 line");
  header("Location: " . $_SERVER['HTTP_REFERER']);
}
$textComment = $_POST['textComment'];
$dateComment = date('Y-m-d');
if (empty($_SESSION['id_user'])) {
  header("HTTP/1.1 301 Moved Permanently from 3 line");
  header("Location: http://localhost/hotel_system/authorization/form_auth.php");
}
$query = "Insert into comments (id_user, id_hotel, text_comment, date_comment) values (" . $_SESSION['id_user'] . ", " . explode('hotelId=', $_SERVER['HTTP_REFERER'])[1] . ", '" . $textComment . "', '" . $dateComment . "');";
$result = mysqli_query($link, $query);
header("HTTP/1.1 301 Moved Permanently from 3 line");
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
