<?php require_once '_header.php'; ?>

<div class="section container contacts">
    <div class="title contacts-title">Контакты</div>
    <div class="title contacts-title__write">Написать</div>

    <form action="" class="contacts-form">
        <div class="form-body">
            <input class="form-input contacts-input__name" type="text" placeholder="Имя" name="name">
            <span class="form-input__span contacts-input__span-name">Поле "Имя" обязательно к заполнению</span>
            <input class="form-input contacts-input__email" type="text" placeholder="Email" name="email">
            <span class="form-input__span contacts-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>

            <input class="form-input" type="text" placeholder="Телефон" name="phone">
            <span class="form-input__span contacts-input__span-phone">Поле "Телефон" обязательно к заполнению</span>
            <textarea rows="5" class="form-input" placeholder="Сообщение" name="message"></textarea>
            <span class="form-input__span contacts-input__span-message">Поле "Сообщение" обязательно к заполнению</span>

            <div class="form-checkbox__block">
                <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
            </div>
        </div>

        <div class="contacts-bottom">
            <span class="form-bottom__top contacts-form__top">Отправить</span>
        </div>
    </form>

    <div class="contacts-consult">
        <div class="contacts-consult__call">Позвонить</div>
        <a href="tel:79348881064" class="contacts-consult__phone">+7 934 888 10 64</a>
        <div class="contacts-consult__consult">Вас проконсультируют с 10 до 19 по мск:</div>
        <div class="contacts-consult__workers">
            <div class="contacts-consult__workers-block contacts-consult__workers-block__oksana">
                <div class="contacts-consult__workers-block__name">Оксана</div>
            </div>
            <div class="contacts-consult__workers-block contacts-consult__workers-block__ivan">
                <div class="contacts-consult__workers-block__name">Иван</div>
            </div>
            <div class="contacts-consult__workers-block contacts-consult__workers-block__ekaterina">
                <div class="contacts-consult__workers-block__name">Екатерина</div>
            </div>
        </div>
    </div>

    <div class="contacts-address">
        <div class="contacts-address__title">Адрес</div>
        <div class="contacts-address__address">Проспект Мира 150</div>
    </div>

</div>

<div class="contacts-map">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abcfcaa2b2f06427e2c7353c6891ff14179901de8d39049ce0eaeb1eade694be2&amp;width=100%25&amp;height=530&amp;lang=ru_RU&amp;scroll=false"></script>

    <div class="contacts-map__photos">
        <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/1.jpg" alt="photo"></a>
        <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/2.jpg" alt="photo"></a>
        <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/3.jpg" alt="photo"></a>
        <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/4.jpg" alt="photo"></a>
    </div>
</div>

<?php require_once '_bottom-button.php'; ?>

<?php require_once '_icons.php' ?>
<?php require_once '_footer.php'; ?>

<script>
    $('.form-input').on('focusout', function () {
        if($(this).val().length === 0) {
            $(this).next("span").show();
        }
    }).on('input', function () {
        $(this).next("span").hide();
    });

    $('.contacts-bottom').on('click', function () {
       let send = true;
       for (let i=0; i<document.querySelectorAll('.form-input').length; i++) {
           if (document.querySelectorAll('.form-input')[i].value === '') {
               document.querySelectorAll('.form-input')[i].nextElementSibling.style.display = 'block';
               send = false;
           }
       }
       if (send === true) {
           $('.contacts-form').submit();
       }
    });

</script>
