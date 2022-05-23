<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'hotel_system';

$link = mysqli_connect($host, $user, $password, $db_name);
if($link->connect_errno) exit ('Ошибка соединения с БД');
$link->set_charset('utf8');
?>