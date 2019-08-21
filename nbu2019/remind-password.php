<?php $title = "Вход в личный кабинет" ?>
<?php require_once '_header.php'?>

<div class="login-title course-title">
    <div class="container">
        <strong>Восстановление пароля</strong>
    </div>
</div>

<div class="forgot forgot-remind"><a href="remind-password.php">Если вы забыли пароль, введите ваш E-Mail:</a></div>

<div class="form-block">
    <form action="#" class="form">
        <div class="form-body">

            <input class="form-input form-input__email" type="text" placeholder="Email" name="email">
            <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>

        </div>

        <div class="form-bottom form-bottom1 login-form__bottom">
            <span class="form-bottom__top">Отправить</span>
        </div>
    </form>

    <div class="forgot"><a href="login.php">Вход в личный кабинет</a></div>
</div>

<?php require_once '_footer.php'?>
