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
            <h3 class="omb_authTitle">Войдите или <a class="register" href="#">Зарегистрируйтесь</a></h3>
            <div class="row omb_row-sm-offset-3 omb_socialButtons">
                <div class="main-nav__nav-links mt-md-4 mx-auto mt-1">
                    <i class="fab fa-vk social ml-2"></i>
                    <i class="fab fa-facebook-f social ml-2"></i>
                    <i class="fab fa-odnoklassniki social ml-2"></i>
                </div>
            </div>

            <div class="row omb_row-sm-offset-3 omb_loginOr">
                <div class="col-xs-12 col-sm-6">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr stage__stage-txt">или</span>
                </div>
            </div>

            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">
                    <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                        <div class="input-group mb-2">
                            <span class="input-group-addon"><i class="fa fa-user mr-2"></i></span>
                            <input type="text" class="form-control stage__stage-txt" name="username" placeholder="email-адрес">
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock mr-2"></i></span>
                            <input  type="password" class="form-control stage__stage-txt" name="password" placeholder="Пароль">
                        </div>
                        <div class="mx-auto">
                        <button class="auth-btn  border-0 my-3" type="submit">В личный кабинет</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-3">
                    <label class="checkbox mr-2">
                        <input type="checkbox" value="remember-me" class="ml-2">Запомнить меня
                    </label>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <p class="omb_forgotPwd">
                        <a href="#">Забыли пароль?</a>
                    </p>
                </div>
            </div>
        </div>



    </div>
</main>


<?php include "general-components/footer.php"; ?>

</body>
</html>
