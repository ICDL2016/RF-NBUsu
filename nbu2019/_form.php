<!--Форма-->
<div class="form-block">
    <div class="form-title">Полный курс кулинарного дела</div>
    <div class="form-title form-title__second">КУЛИНАР - ЭКСПЕРТ</div>
    <div class="form-descr">Повар 6-го разряда</div>
    <div class="form-video form-video1" onclick="play1(event)"></div>
    <div id="divPlayer1"></div>

    <form action="#" class="form">
        <div class="form-body">
            <input class="form-input form-input__name" type="text" placeholder="Имя" name="name">
            <span class="form-input__span form-input__span-name">Поле "Имя" обязательно к заполнению</span>
            <input class="form-input form-input__email" type="text" placeholder="Email" name="email">
            <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>

            <div class="form-checkbox__block">
                <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
            </div>
        </div>

        <div class="form-bottom form-bottom1">
            <span class="form-bottom__top">Начать обучение бесплатно</span>
            <span class="form-bottom__second">и посмотреть свой будущий диплом</span>
            <span class="form-bottom__date">сегодня 25.04.2019</span>
        </div>
    </form>
</div>