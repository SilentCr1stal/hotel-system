<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../connect.php';
//Запускаем сессию
session_start();


//Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
$_SESSION["error_messages"] = '';

//Объявляем ячейку для добавления успешных сообщений
$_SESSION["success_messages"] = '';
?>
<?php
/*
        Проверяем была ли отправлена форма, то есть была ли нажата кнопка зарегистрироваться. Если да, то идём дальше, если нет, то выведем пользователю сообщение об ошибке, о том что он зашёл на эту страницу напрямую.
    */
if (isset($_POST["btn_submit_register"]) && !empty($_POST["btn_submit_register"])) {

  if (isset($_POST["fullName_user"])) {

    //Обрезаем пробелы с начала и с конца строки
    $fullName_user = $_POST["fullName_user"];

    //Проверяем переменную на пустоту
    if (!empty($fullName_user)) {
    } else {
      // Сохраняем в сессию сообщение об ошибке. 
      $_SESSION["error_messages"] .= "<p class='message_error'>Укажите Ваше имя</p>";

      //Возвращаем пользователя на страницу регистрации
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");

      //Останавливаем скрипт
      exit();
    }
  } else {
    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error'>Отсутствует поле с именем</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    //Останавливаем скрипт
    exit();
  }


  if (isset($_POST["login_user"])) {

    //Обрезаем пробелы с начала и с конца строки
    $login_user = trim($_POST["login_user"]);

  } else {

    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error'>Отсутствует поле с фамилией</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    //Останавливаем  скрипт
    exit();
  }


  if (isset($_POST["email_user"])) {

    //Обрезаем пробелы с начала и с конца строки
    $email_user = trim($_POST["email_user"]);

  } else {
    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error'>Отсутствует поле для ввода Email</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    //Останавливаем  скрипт
    exit();
  }


  if (isset($_POST["password_user"])) {

    //Обрезаем пробелы с начала и с конца строки
    $password_user = trim($_POST["password_user"]);

    if (!empty($password_user)) {
      
      //Шифруем папроль
      $password_user = md5($password_user);
    } else {
      // Сохраняем в сессию сообщение об ошибке. 
      $_SESSION["error_messages"] .= "<p class='message_error'>Укажите Ваш пароль</p>";

      //Возвращаем пользователя на страницу регистрации
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");

      //Останавливаем  скрипт
      exit();
    }
  } else {
    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error'>Отсутствует поле для ввода пароля</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    //Останавливаем  скрипт
    exit();
  }

  $query = "INSERT INTO `users` (fullName_user, login_user, email_user, password_user) VALUES ('" . $fullName_user . "', '" . $login_user . "', '" . $email_user . "', '" . $password_user . "')";
  $result = mysqli_query($link, $query);

  if (!$result) {
    // Сохраняем в сессию сообщение об ошибке. 
    $_SESSION["error_messages"] .= "<p class='message_error' >Ошибка запроса на добавления пользователя в БД</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    //Останавливаем  скрипт
    exit();
  } else {

    $_SESSION["success_messages"] = "<p class='success_message'>Регистрация прошла успешно!!! <br />Теперь Вы можете авторизоваться используя Ваш логин и пароль.</p>";

    //Отправляем пользователя на страницу авторизации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");
  }


} else {
  exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href http://localhost/hotel_system> главную страницу </a>.</p>");
}
?>
