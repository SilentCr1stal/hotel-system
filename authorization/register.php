<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../connect.php';
session_start();

?>
<?php
if (isset($_POST["btn_submit_register"]) && !empty($_POST["btn_submit_register"])) {

  if (isset($_POST["fullName_user"])) {

    $fullName_user = $_POST["fullName_user"];

    if (!empty($fullName_user)) {
    } else {
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");

      exit();
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    exit();
  }


  if (isset($_POST["login_user"])) {
    $login_user = trim($_POST["login_user"]);
  } else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    exit();
  }


  if (isset($_POST["email_user"])) {

    $email_user = trim($_POST["email_user"]);
  } else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    exit();
  }


  if (isset($_POST["password_user"])) {

    $password_user = trim($_POST["password_user"]);

    if (!empty($password_user)) {

      $password_user = md5($password_user);
    } else {
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: http://localhost/hotel_system/authorization/form_register.php");

      exit();
    }
  } else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    exit();
  }

  $query = "INSERT INTO `users` (fullName_user, login_user, email_user, password_user) VALUES ('" . $fullName_user . "', '" . $login_user . "', '" . $email_user . "', '" . $password_user . "')";
  $result = mysqli_query($link, $query);

  if (!$result) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_register.php");

    exit();
  } else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/authorization/form_auth.php");
  }
} else {
  exit();
}
?>
