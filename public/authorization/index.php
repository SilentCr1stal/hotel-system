<?php

if ( ! isset($_SESSION)) {
    session_start();
}
if (array_key_exists('user', $_SESSION)) {
    if ($_SESSION['user']['role'] == 1 || $_SESSION['user']['role'] == null){
        require './profile.php';
    } else
    if ($_SESSION['user']['role'] == 2){
        require './admin.php'; 
    }
    
    require 'templates/footer.php';
    exit();
}
?>
<div class="avtor">
    <form action="public/authorization/handler_form/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" value="cr1stal">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" value="2912n">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="index.php?page=register">Зарегистрируйтесь</a>!
        </p>
        <?php
        if (array_key_exists('message', $_SESSION)) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>
