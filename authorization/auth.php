<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../connect.php';
//Запускаем сессию
session_start();

$_SESSION["error_messages"] = '';

//Объявляем ячейку для добавления успешных сообщений
$_SESSION["success_messages"] = '';
if (isset($_POST["btn_submit_auth"]) && !empty($_POST["btn_submit_auth"])) {

  $email_user = trim($_POST["email_user"]);
  if (isset($_POST["email_user"])) {

    if (!empty($email_user)) {
      $email_user = htmlspecialchars($email_user, ENT_QUOTES);
    } else {
      // Сохраняем в сессию сообщение об ошибке. 
      $_SESSION["error_messages"] .= "<p class='message_error' >Поле для ввода почтового адреса(email_user) не должна быть пустой.</p>";

      //Возвращаем пользователя на страницу регистрации
      header("HTTP/1.1 301 Moved Permanently from 25");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");

      //Останавливаем скрипт
      exit();
    }
  } else {
    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error' >Отсутствует поле для ввода Email</p>";

    //Возвращаем пользователя на страницу авторизации
    header("HTTP/1.1 301 Moved Permanently from 36");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");

    //Останавливаем скрипт
    exit();
  }

  if (isset($_POST["password_user"])) {

    //Обрезаем пробелы с начала и с конца строки
    $password_user = trim($_POST["password_user"]);

    if (!empty($password_user)) {
      //Шифруем пароль
      $password_user = md5($password_user);
    } else {
      // Сохраняем в сессию сообщение об ошибке. 
      $_SESSION["error_messages"] .= "<p class='message_error' >Укажите Ваш пароль</p>";

      //Возвращаем пользователя на страницу регистрации
      header("HTTP/1.1 301 Moved Permanently from 58");
      header("Location: http://localhost/hotel_system/authorization/form_auth.php");

      //Останавливаем скрипт
      exit();
    }
  } else {
    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error' >Отсутствует поле для ввода пароля</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently from 69");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");

    //Останавливаем скрипт
    exit();
  }

  //Запрос в БД на выборке пользователя.
  $query = "SELECT * FROM `users` WHERE email_user = '" . $email_user . "' AND password_user = '" . $password_user . "'";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);

  //Проверяем, если в базе нет пользователя с такими данными, то выводим сообщение об ошибке
  if (!empty($row)) {

    // Если введенные данные совпадают с данными из базы, то сохраняем логин и пароль в массив сессий.
    $_SESSION['email_user'] = $email_user;
    $_SESSION['password_user'] = $password_user;

    //Возвращаем пользователя на главную страницу
    header("HTTP/1.1 301 Moved Permanently from 101");
    header("Location: http://localhost/hotel_system/index.php");
  } else {

    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error' >Неправильный логин и/или пароль</p>";

    //Возвращаем пользователя на страницу авторизации
    header("HTTP/1.1 301 Moved Permanently from 109");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");

    //Останавливаем скрипт
    exit();
  }
} else {
  exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=http://localhost/hotel_system> главную страницу </a>.</p>");
}
