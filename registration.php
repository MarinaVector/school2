<!DOCTYPE html>
<html lang="ru">
<?php require "general-components/head.php"; ?>
<body>
<header class="secondary-navigation my-0">
    <?php require "general-components/nav.php"; ?>
</header>

<main class="my-5">
    <div class="container auth-form bootdey my-3">


        <div class="omb_login">
            <h3 class="omb_authTitle">Регистрация</h3>
            <div class="row omb_row-sm-offset-3">
                <div class="registration-bg col-xs-12 col-sm-6">
                    <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="fa fa-user mr-2"></i></span>
                            <input type="text" class="form-control stage__stage-txt" name="username"
                                   placeholder="Ваше имя">
                        </div>
                        <span class="help-block"></span>
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="fa fa-envelope mr-2"></i></i></span>
                            <input type="password" class="form-control stage__stage-txt" name="password"
                                   placeholder="Ваш @-mail">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="fa fa-lock mr-2"></i></span>
                            <input type="password" class="form-control stage__stage-txt" name="password"
                                   placeholder="Пароль">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="fa fa-lock mr-2"></i></span>
                            <input type="password" class="form-control stage__stage-txt" name="password"
                                   placeholder="Повтор пароля">
                        </div>
                        <div class="mx-auto">
                            <button class="auth-btn border-0 my-3" type="submit">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</main>


<?php include "general-components/footer.php"; ?>

</body>
</html>

