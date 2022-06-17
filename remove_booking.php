<?php
session_start();
require './connect.php';
$queryBooking = 'DELETE FROM `booking` WHERE id_user = ' . $_SESSION['id_user'] . ' and id_room = ' . $_SESSION['id_room'];
$resultBooking = mysqli_query($link, $queryBooking);
if ($resultBooking) {
  unset($_SESSION['id_room']);
  header("HTTP/1.1 301 Moved Permanently from 5 line");
  header("Location: " . $_SERVER['HTTP_REFERER']);
}

?>