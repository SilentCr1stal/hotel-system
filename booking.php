
<?php
require './connect.php';
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (empty($_POST['checkIn']) || empty($_POST['checkOut'])) {
  header("HTTP/1.1 301 Moved Permanently from 8 line");
  header("Location: " . $_SERVER['HTTP_REFERER']);
}
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$myDate = DateTime::createFromFormat('Y-m-d\TH:i', $checkIn);
$dateCheckIn = $myDate->format('Y-m-d H:i:s');
$myDate = DateTime::createFromFormat('Y-m-d\TH:i', $checkOut);
$dateCheckOut = $myDate->format('Y-m-d H:i:s');
if (empty($_SESSION['id_user'])) {
  header("HTTP/1.1 301 Moved Permanently from 3 line");
  header("Location: http://localhost/hotel_system/authorization/form_auth.php");
}
$query = "Insert into booking (id_user, id_room, dateCheckIn_booking, dateCheckOut_booking) values (" . $_SESSION['id_user'] . ", " . $_POST['id_room'] . ", '" . $dateCheckIn . "', '" . $dateCheckOut . "');";
$result = mysqli_query($link, $query);
header("HTTP/1.1 301 Moved Permanently from 3 line");
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
