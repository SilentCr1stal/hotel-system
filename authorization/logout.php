<?php
    session_start();
 
    unset($_SESSION["email_user"]);
    unset($_SESSION["password_user"]);
    unset($_SESSION['id_user']);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://localhost/hotel_system/");
?>
