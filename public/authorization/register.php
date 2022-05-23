<?php

if (!isset($_SESSION)) {
    session_start();
}
if (array_key_exists('user', $_SESSION)) {
    require 'public/authorization/profile.php';
    exit();
}
?>
<div class="avtor">
    <form action="public/authorization/handler_form/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" value="test" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" value="test">
        <label>Почта</label>
        <input type="email" name="email" value="test@gmail.com" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" value="111">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" value="111" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php?page=profile">авторизируйтесь</a>!
        </p>
        <?php
        if (array_key_exists('message', $_SESSION)) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>