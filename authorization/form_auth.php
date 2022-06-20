<?php
session_start();
require_once '../public/templates/head.php';
?>

 <div class="wrapper__contentPage">
    <div class="container" style="text-align: center;">
        <h2>Авторизация</h2>
        <form action="./auth.php" method="POST" name="form_auth">
            <div class="input-group">
                <div class="inset">
                    <input autocomplete="off" id="email" type="email" name="email_user" required />
                    <label class="input-label" for="email">
                        <span class="input-label-content">E-mail</span>
                    </label>
                </div>
            </div>
            <div class="input-group">
                <div class="inset">
                    <input autocomplete="off" id="password" type="password" name="password_user" required />
                    <label class="input-label" for="password">
                        <span class="input-label-content">Пароль</span>
                    </label>
                </div>
            </div>
            <div class="input-group btn">
                <input type="submit" name="btn_submit_auth" value="Войти" id="submit__btn" style="width: 100%; height: 100%;">
            </div>
        </form>
        <span style="color: #f45a5a; font-size: 12px;"><?= $_SESSION['error'] ? $_SESSION['error'] : '' ?></span>
        <a class="login-link" href=<?= $address."/authorization/form_register.php"?>>У меня нет аккаунта</a>
    </div>

<?php
    unset($_SESSION['error']);
    require_once("../public/templates/footer.php");
?>
