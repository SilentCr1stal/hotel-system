<?php
require_once '../public/templates/head.php';
    // if(!isset($_SESSION["email_user"]) && !isset($_SESSION["password_user"])){
?>
 
 
 <div class="wrapper__contentPage">
    <?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
    //иначе выводим сообщение о том, что он уже зарегистрирован
    // if (!isset($_SESSION["email_user"]) && !isset($_SESSION["password_user"])) {
    // }
    ?>
    <div class="container">
        <h2>Авторизация</h2>
        <form action="./auth.php" method="POST" name="form_auth">
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
                <input type="submit" name="btn_submit_auth" value="Войти">
            </div>
        </form>
        <a class="login-link" href=<?= $address."/authorization/form_register.php"?>>У меня нет аккаунта</a>
    </div>

 
<?php
    // }else{
?>
 
    <!-- <div id="authorized">
        <h2>Вы уже авторизованы</h2>
    </div> -->
 
<?php
    // }
?>
 
<?php
    //Подключение подвала
    require_once("../public/templates/footer.php");
?>
