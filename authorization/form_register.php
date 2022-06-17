<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require_once '../public/templates/head.php';
?>

<div class="wrapper__contentPage">
    <div class="container">
        <h2>Регистрация</h2>
        <form action="./register.php" method="POST" name="form_register">
            <div class="input-group">
                <div class="inset">
                    <input autocomplete="off" type="text" name="fullName_user" required />
                    <label class="input-label" for="name">
                        <span class="input-label-content">Имя</span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <div class="inset">
                    <input autocomplete="off" type="text" name="login_user" required />
                    <label class="input-label" for="name">
                        <span class="input-label-content">Логин</span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <div class="inset">
                    <input autocomplete="off" type="email" name="email_user" required />
                    <label class="input-label" for="name">
                        <span class="input-label-content">E-mail</span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <div class="inset">
                    <input autocomplete="off" type="password" name="password_user" required />
                    <label class="input-label" for="name">
                        <span class="input-label-content">Пароль</span>
                    </label>
                </div>
            </div>
            <div class="input-group btn">
                <input type="submit" name="btn_submit_register" value="Регистрация">
            </div>
        </form>
        <a class="login-link" href=<?= $address."/authorization/form_auth.php"?>>Я уже зарегистрирован</a>
    </div>

    <?php
    //Подключение подвала
    require_once("../public/templates/footer.php");
    ?>