<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../connect.php';
session_start();

if (isset($_POST["btn_submit_auth"]) && !empty($_POST["btn_submit_auth"])) {

  $email_user = trim($_POST["email_user"]);
  if (isset($_POST["email_user"])) {

    if (!empty($email_user)) {
      $email_user = htmlspecialchars($email_user, ENT_QUOTES);
    } else {
      header("HTTP/1.1 301 Moved Permanently from 15 line");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");

      exit();
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently from 21 line");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");

    exit();
  }

  if (isset($_POST["password_user"])) {

    $password_user = trim($_POST["password_user"]);

    if (!empty($password_user)) {
      $password_user = md5($password_user);
    } else {
      header("HTTP/1.1 301 Moved Permanently from 34 line");
      header("Location: http://localhost/hotel_system/authorization/form_auth.php");

      exit();
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently from 40 line");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");

    exit();
  }

  $query = "SELECT * FROM `users` WHERE email_user = '" . $email_user . "' AND password_user = '" . $password_user . "'";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);

  //Проверяем, если в базе нет пользователя с такими данными, то выводим сообщение об ошибке
  if (!empty($row)) {

    // Если введенные данные совпадают с данными из базы, то сохраняем логин и пароль в массив сессий.
    $_SESSION['email_user'] = $email_user;
    $_SESSION['password_user'] = $password_user;
    $_SESSION['id_user'] = $row['id_user'];

    $query = 'Select * from booking where id_user = '.$row['id_user'];
    $result = mysqli_query($link, $query);
    if ($result) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['id_room'] = $row['id_room'];
    }

    //Возвращаем пользователя на главную страницу
    header("HTTP/1.1 301 Moved Permanently from 65 line");
    header("Location: http://localhost/hotel_system/index.php");
  } else {

    header("HTTP/1.1 301 Moved Permanently from 69 line");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");

    exit();
  }
} else {
  exit();
}
