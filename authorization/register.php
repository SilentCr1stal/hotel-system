<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../connect.php';
session_start();
$_SESSION['error'] = '';

?>
<?php
if (isset($_POST["btn_submit_register"]) && !empty($_POST["btn_submit_register"])) {

  if (isset($_POST["fullName_user"])) {

    $fullName_user = $_POST["fullName_user"];

    if (empty($fullName_user) || strlen($fullName_user) < 3 || strlen($fullName_user) > 16) {
      header("HTTP/1.1 301 Moved Permanently from 16 line");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");
      $_SESSION['error'] = 'Неверное имя пользователя!';
      exit();
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently from 22 line");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");
    $_SESSION['error'] = 'Вы не ввели ваше имя!';
    exit();
  }


  if (isset($_POST["login_user"])) {
    $login_user = trim($_POST["login_user"]);
    $query = "SELECT `login_user` from `users` where `login_user` = '" . $login_user . "'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row['login_user'] == $login_user) {
      $_SESSION['error'] = 'Такой логин уже используется!';
      header("HTTP/1.1 301 Moved Permanently from 33 line");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");
      exit();
    } elseif (strlen($login_user) < 4) {
      $_SESSION['error'] = 'Слишком короткий логин!';
      header("HTTP/1.1 301 Moved Permanently from 33 line");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");
      exit();
    } elseif (strlen($login_user) > 12) {
      $_SESSION['error'] = 'Ваш логин слишком длинный!';
      header("HTTP/1.1 301 Moved Permanently from 33 line");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");
      exit();
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently from 39 line");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");
    $_SESSION['error'] = 'Вы не ввели свой логин!';
    exit();
  }


  if (isset($_POST["email_user"])) {

    $email_user = trim($_POST["email_user"]);
    $match = [];
    if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i", $email_user, $match)) {
      header("HTTP/1.1 301 Moved Permanently from 51 line");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");
      $_SESSION['error'] = 'Неверный формат почты!';
      exit();
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently from 57 line");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");
    $_SESSION['error'] = 'Вы не ввели свою почту!';
    exit();
  }


  if (isset($_POST["password_user"])) {

    $password_user = trim($_POST["password_user"]);

    if (!empty($password_user)) {
      if (strlen($password_user) < 3) {
        header("HTTP/1.1 301 Moved Permanently from 72 line");
        header("Location: http://localhost/hotel_system/authorization/form_register.php");
        $_SESSION['error'] = 'Пароль слишком короткий!';
        exit();
      } elseif (strlen($fullName_user) > 20) {
        header("HTTP/1.1 301 Moved Permanently from 72 line");
        header("Location: http://localhost/hotel_system/authorization/form_register.php");
        $_SESSION['error'] = 'Пароль слишком длинный!';
        exit();
      }
      $password_user = md5($password_user);
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently from 78 line");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");
    $_SESSION['error'] = 'Вы не придумали пароль!';
    exit();
  }

  $query = "INSERT INTO `users` (fullName_user, login_user, email_user, password_user) VALUES ('" . $fullName_user . "', '" . $login_user . "', '" . $email_user . "', '" . $password_user . "')";
  $result = mysqli_query($link, $query);

  if (!$result) {
    header("HTTP/1.1 301 Moved Permanently from 88 line");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    exit();
  } else {
    header("HTTP/1.1 301 Moved Permanently from 93 line");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");
  }
} else {
  exit();
}
?>
