<?php $title = "Вход в личный кабинет" ?>
<?php require_once '_header.php'?>

<div class="login-title course-title">
    <div class="container">
        <strong>Вход в Личный кабинет</strong>
    </div>
</div>

<div class="form-block">
    <form action="#" class="form">
        <div class="form-body">

            <input class="form-input form-input__email" type="text" placeholder="Email" name="email">
            <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>
            <input class="form-input form-input__name" type="text" placeholder="Пароль" name="name">
            <span class="form-input__span form-input__span-name">Поле "Пароль" обязательно к заполнению</span>

        </div>

        <div class="form-bottom form-bottom1 login-form__bottom">
            <span class="form-bottom__top">Отправить</span>
        </div>
    </form>

    <div class="forgot"><a href="remind-password.php">Забыли пароль?</a></div>
</div>

<?php require_once '_footer.php'?>
