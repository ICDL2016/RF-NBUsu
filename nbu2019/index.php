<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый бизнес университет</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" href="css/style.css?v=5.1">
</head>
<body>

<!--Лого и заголовки-->
<div class="logo">
    <a href="https://nbu.su/" target="_blank"><img src="img/logo.png" alt="logo" width="150"></a>
    <h1 class="logo-title">НОВЫЙ БИЗНЕС УНИВЕРСИТЕТ</h1>
    <h3 class="logo-title__second">Международный Центр Дистанционного Образования</h3>
</div>

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
            <input class="form-input form-input__email" type="email" placeholder="Email" name="email">
            <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>

            <div class="form-checkbox__block">
                <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
            </div>
        </div>

        <button type="submit" class="form-bottom form-bottom1">
            <span class="form-bottom__top">Начать обучение бесплатно</span>
            <span class="form-bottom__second">и посмотреть свой будущий диплом</span>
            <span class="form-bottom__date">сегодня 25.04.2019</span>
        </button>

    </form>
</div>

<!--Получи диплом-->
<div class="diploma section container">
    <div class="title diploma-title">Получи официальный гос. Диплом с международным приложением в кратчайшие сроки</div>
    <div class="descr diploma-descr">Этот содержательный курс даст вам именно те знания, которые вы ищете. Он поможет вам обрести уверенность и стать более компетентным в своей сфере. Не откладывайте ваше развитие и профессиональный рост на потом - запишитесь на курс</div>

    <div class="diploma-license">
        <div class="diploma-license__top">
            <a href="img/diploma1.jpg" class="fancybox"><img src="img/diploma1.jpg" alt="diploma"></a>
            <span class="diploma-license__span">Лицензия на образовательную деятельность №038379</span>
        </div>

        <div class="diploma-license__middle">
            <div class="diploma-license__middle-img">
                <a href="img/diploma2.jpg" class="fancybox"><img src="img/diploma2.jpg" alt="diploma"></a>
                <a href="img/diploma3.jpg" class="fancybox"><img src="img/diploma3.jpg" alt="diploma"></a>
                <a href="img/diploma4.jpg" class="fancybox"><img src="img/diploma4.jpg" alt="diploma"></a>
            </div>
            <span class="diploma-license__span">Лицензия на образовательную деятельность №038379</span>
        </div>

        <div class="diploma-license__bottom">
            <a href="img/diploma5.jpg" class="fancybox"><img src="img/diploma5.jpg" alt="diploma"></a>
            <span class="diploma-license__span">Лицензия на образовательную деятельность №038379</span>
        </div>
    </div>
</div>

<!--Осваивай новые знания-->
<div class="knowledge section container">
    <div class="title knowledge-title">Осваивай новые знания быстрее и проще на современной СЛАЙД платформе обучения</div>
    <div class="descr knowledge-descr">Этот содержательный курс даст вам именно те знания, которые вы ищете. Он поможет вам обрести уверенность и стать более компетентным в своей сфере. Не откладывайте ваше развитие и профессиональный рост на потом - запишитесь на курс</div>

    <div class="knowledge-img">
        <a href="img/course1.jpg" class="fancybox"><img src="img/course1.jpg" alt="diploma"></a>
        <a href="img/course2.jpg" class="fancybox"><img src="img/course2.jpg" alt="diploma"></a>
        <a href="img/course3.jpg" class="fancybox"><img src="img/course3.jpg" alt="diploma"></a>
    </div>

    <div class="descr knowledge-descr">Этот содержательный курс даст вам именно те знания, которые вы ищете. Он поможет вам обрести уверенность и стать более компетентным в своей сфере. Не откладывайте ваше развитие и профессиональный рост на потом - запишитесь на курс</div>
</div>

<!--Форма-->
<div class="form-block">
    <div class="form-title">Полный курс кулинарного дела</div>
    <div class="form-title form-title__second">КУЛИНАР - ЭКСПЕРТ</div>
    <div class="form-descr">Повар 6-го разряда</div>
    <div class="form-video form-video2" onclick="play2(event)"></div>
    <div id="divPlayer2"></div>

    <form action="#" class="form">
        <div class="form-body">
            <input class="form-input form-input__name" type="text" placeholder="Имя" name="name">
            <span class="form-input__span form-input__span-name">Поле "Имя" обязательно к заполнению</span>
            <input class="form-input form-input__email" type="email" placeholder="Email" name="email">
            <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>

            <div class="form-checkbox__block">
                <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
            </div>
        </div>

        <button type="submit" class="form-bottom form-bottom1">
            <span class="form-bottom__top">Начать обучение бесплатно</span>
            <span class="form-bottom__second">и посмотреть свой будущий диплом</span>
            <span class="form-bottom__date">сегодня 25.04.2019</span>
        </button>

    </form>

</div>

<!--Иконки-->
<div class="icons">
    <!-- Фейсбук --->
    <a href="" class="fa fa-facebook social-likes__widget social-likes__widget_facebook"><span class="social-likes__button social-likes__button_facebook"><span class="social-likes__icon social-likes__icon_facebook"></span></span><span class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span></a>
    <!-- Вконтакте --->
    <a href="" class="fa fa-vk social-likes__widget social-likes__widget_vkontakte"><span class="social-likes__button social-likes__button_vkontakte"><span class="social-likes__icon social-likes__icon_vkontakte"></span></span><span class="social-likes__counter social-likes__counter_vkontakte social-likes__counter_empty"></span></a>
    <!-- Одноклассники --->
    <a href="" class="fa fa-odnoklassniki social-likes__widget social-likes__widget_odnoklassniki"><span class="social-likes__button social-likes__button_odnoklassniki"><span class="social-likes__icon social-likes__icon_odnoklassniki"></span></span><span class="social-likes__counter social-likes__counter_odnoklassniki social-likes__counter_empty"></span></a>
    <!-- Google Plus
    <a href="" class="fa fa-google-plus plusone"></a> --->
    <!-- Твиттер --->
    <a href="" class="fa fa-twitter social-likes__widget social-likes__widget_twitter"><span class="social-likes__button social-likes__button_twitter"><span class="social-likes__icon social-likes__icon_twitter"></span></span></a>
    <!-- LinkedIn --->
    <a href="" class="fa fa-linkedin social-likes__widget social-likes__widget_linkedin"><span class="social-likes__button social-likes__button_linkedin"><span class="social-likes__icon social-likes__icon_linkedin"></span></span></a>
    <!-- Tumblr --->
    <a href="" class="fa fa-tumblr social-likes__widget social-likes__widget_tumblr"><span class="social-likes__button social-likes__button_tumblr"><span class="social-likes__icon social-likes__icon_tumblr"></span></span></a>
    <!-- Pinterest --->
    <a href="" class="fa fa-pinterest social-likes__widget social-likes__widget_pinterest"><span class="social-likes__button social-likes__button_pinterest"><span class="social-likes__icon social-likes__icon_pinterest"></span></span><span class="social-likes__counter social-likes__counter_pinterest social-likes__counter_empty"></span></a>
    <!-- Reddit --->
    <a href="" class="fa fa-reddit social-likes__widget social-likes__widget_reddit"><span class="social-likes__button social-likes__button_reddit"><span class="social-likes__icon social-likes__icon_reddit"></span></span></a>
</div>


<!--Футер-->
<footer class="footer">
    <ul class="footer-list">
        <li><a href="#">ВОЙТИ В ЛИЧНЫЙ КАБИНЕТ</a></li>
        <li><a href="#">УЗНАТЬ БОЛЬШЕ ОБ НБУ</a></li>
        <li><a href="#">ВЫБРАТЬ СФЕРУ ОБУЧЕНИЯ</a></li>
        <li><a href="#">УЗНАТЬ СТОИМОСТЬ</a></li>
        <li><a href="#">КОНТАКТЫ</a></li>
    </ul>
    <div class="footer-descr">Профессиональные курсы с 2001 года</div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js?v=4"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script>
    $('.fancybox').fancybox();
</script>

</body>
</html>