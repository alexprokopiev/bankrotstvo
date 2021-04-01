<?php
    if (isset($_GET['utm_source'])){
        $utm_source = $_GET['utm_source'];
        setcookie("utm_source", $utm_source, time()+60*60*24*50);
    }
    if (isset($_GET['utm_medium'])){
        $utm_medium = $_GET['utm_medium'];
        setcookie("utm_medium", $utm_medium, time()+60*60*24*50);
    }
    if (isset($_GET['utm_campaign'])){
        $utm_campaign = $_GET['utm_campaign'];
        setcookie("utm_campaign", $utm_campaign, time()+60*60*24*50);
    }
    if (isset($_GET['utm_content'])){
        $utm_content = $_GET['utm_content'];
        setcookie("utm_content", $utm_content, time()+60*60*24*50);
    }
    if (isset($_GET['utm_term'])){
        $utm_term = $_GET['utm_term'];
        setcookie("utm_term", $utm_term, time()+60*60*24*50);
    }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Жизнь без долгов</title>
    <meta name="description" content="освобождение от долгов">
    <link rel="shortcut icon" href="icons/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.min.css"><!-- Yandex.Metrika counter -->
    <script type="text/javascript">(function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(73122799, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });</script><noscript>
        <div><img src="https://mc.yandex.ru/watch/73122799" style="position:absolute; left:-9999px;" alt=""></div>
    </noscript><!-- /Yandex.Metrika counter -->
    <script async src="https://allstat-pp.ru/1008051/73347321a075d197d0fe75aa3ca142f547eb67fb.js"></script>
</head>

<body>
    <section class="main">
        <header class="main__header">
            <div class="main__logo"><a href="#" class="main__logo-img"><img src="icons/logo.png" alt="logo"></a>
                <div class="main__logo-text">Работаем с 2015 года! По Санкт-Петербургу успешно реализовали более 100
                    банкротств</div>
            </div>
            <div class="main__wrapper">
                <h1 class="main__title">Жизнь Без Долгов</h1>
                <h2 class="main__subtitle">СРО ААУ «ОРИОН» г. Санкт-Петербург</h2>
            </div>
            <div class="main__info"><a href="tel:+78126605900" class="main__phone"><img src="icons/phone.png"
                        alt="phone-icon">+7 (812) 660-59-00</a> <span>Круглосуточно</span>
                <div class="main__social"><span>Пишите нам:</span> <a href="http://t.me/SuuperTaras" class="main__telegram"><img
                            src="icons/telegram.png" alt="telegram"></a>
            </div>
        </header>
        <h2 class="main__question">Ваш долг более 300 000 рублей?</h2><button class="main__questbutton">Спишите его
            законно!</button>
        <div class="main__descr">Изучим Вашу ситуацию и <span>БЕСПЛАТНО</span> предложим <span>1-3 варианта</span>
            решения проблем с кредитами</div>
        <div class="main__text">Пройдите <span>бесплатный</span> тест и узнайте стоимость процедуры банкротства со
            <span>скидкой 25%</span> на наши услуги!</div>
            <button class="main__button">Узнать стоимость</button>
    </section>
    <section class="advocat">
        <div class="advocat__container">
            <div class="advocat__wrapper">
                <h2 class="advocat__title">Первичная бесплатная консультация</h2><img src="icons/advocat.png"
                    alt="advocat" class="advocat__img">
                <div class="advocat__name">Арбитражный управляющий <span>Степанов Клим Сергеевич</span></div>
                <!--<div class="advocat__descr">Регалии:<br>Адвокатом является лицо, получившее в установленном Федеральным-->
                <!--    законом порядке статус адвоката и право осуществлять адвокатскую деятельность.</div>-->
            </div>
            <form action="#" onsubmit="ym(73122799,'reachGoal','landing131'); return true;" class="form__consult form__consult_advocat">
                <h2 class="form__title">Оставьте заявку</h2>
                <h3 class="form__subtitle">и получите консультацию</h3><input type="text" name="name"
                    placeholder="Введите Ваше имя"> <input type="tel" name="phone" placeholder="Введите Ваш телефон">
                <input type="email" name="email" placeholder="Введите Ваш e-mail"> <input type="hidden" name="city"
                    value="Санкт-Петербург"> <input type="hidden" name="type" value="Банкротство"> <input type="hidden"
                    name="leadtype" value="Заявка на консультацию"> <button class="form__button" type="submit">ПОЛУЧИТЬ
                    Консультацию</button> <label class="form__privacy"><input checked="checked" type="checkbox">Принимаю
                    <a href="#">Положение и Согласие на обработку персональных данных</a></label> <span>Ваши данные
                    защищены</span>
            </form>
        </div>
    </section>
    <section class="help">
        <h2 class="help__title">Мы поможем:</h2>
        <div class="help__wrapper">
            <div class="help__item"><img src="icons/help_1.png" alt="1" class="help__img">
                <div class="help__text">Полностью списать кредиты и долги</div>
            </div>
            <div class="help__item"><img src="icons/help_2.png" alt="2" class="help__img">
                <div class="help__text">Уменьшить платежи по кредитам</div>
            </div>
            <div class="help__item"><img src="icons/help_3.png" alt="3" class="help__img">
                <div class="help__text">Оформить банкротство</div>
            </div>
            <div class="help__item"><img src="icons/help_4.png" alt="4" class="help__img">
                <div class="help__text">Объединить кредиты в один</div>
            </div>
            <div class="help__item"><img src="icons/help_5.png" alt="5" class="help__img">
                <div class="help__text">Провести реструктуризацию</div>
            </div>
            <div class="help__item"><img src="icons/help_6.png" alt="6" class="help__img">
                <div class="help__text">Оспорить действия банков и МФО</div>
            </div>
        </div>
    </section>
    <section class="debts"><img src="img/debts_bg.jpg" alt="bg" class="debts__img">
        <div class="debts__wrapper">
            <h2 class="debts__title">Какие <span>долги списать</span> возможно:</h2>
            <ul class="debts__variants">
                <li>По кредитам</li>
                <li>По кредитным картам</li>
                <li>По налогам</li>
                <li>По распискам перед физлицами</li>
                <li>По ЖКХ</li>
                <li>По займам в МФО</li>
            </ul>
        </div>
    </section>
    <section class="instruction">
        <div class="instruction__img"><img src="icons/instruction.png" alt="instruction"></div>
        <div class="instruction__wrapper">
            <h2 class="instruction__title">Получите бесплатную инструкцию "<span>Как избавить от долгов за 90 дней без
                    потери имущества</span>"</h2>
            <div class="instruction__text">А также мы гарантированно предложим разные пути решения вашей проблемы</div>
            <button class="instruction__button">ПОЛУЧИТЬ инструкцию</button>
        </div>
    </section>
    <section class="putin">
        <h2 class="putin__title">Что Путин сказал о банкротстве граждан</h2><iframe
            src="https://www.youtube.com/embed/OcEwMvcJ6f0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <div class="putin__text">В своём обращении президент дал указание облегчить гражданам списание долгов по
            кредитам. Это делается для облегчения жизни людей в это нелегкое время и освобождения от требований
            кредиторов.</div>
    </section>
    <section class="comparison">
        <h2 class="comparison__title"><span>Плюсы и минусы</span><br>списания долгов через процедуру банкротства</h2>
        <div class="comparison__wrapper">
            <div class="comparison__pluses">
                <h3 class="comparison__subtitle comparison__subtitle_pluses">Плюсы</h3>
                <ul>
                    <li>По решению суда списываются все долги, пени и штрафы</li>
                    <li>Разрешается выезд за пределы РФ</li>
                    <li>Снимается арест со счетов и имущества</li>
                </ul>
            </div>
            <div class="comparison__minuses">
                <h3 class="comparison__subtitle comparison__subtitle_minuses">Минусы</h3>
                <ul>
                    <li>В течении 5 лет не сможете быть Индивидуальным предпринимателем или учредителем ООО</li>
                    <li>При оформлении кредита вы обязаны будете уведомить банк что проходили процедуру</li>
                    <li>В течении 5 лет не сможете повторно пройти процедуру списания долга</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="timer">
        <h2 class="timer__title">Успейте пройти <span>бесплатный</span> тест и получить <span>скидку 25%</span> на наши
            услуги!</h2>
        <h3 class="timer__subtitle">До окончания акции осталось:</h3>
        <div class="timer__large">
            <script src="//megatimer.ru/get/cf73d9c4013c23e84f1bf30739b67e50.js"></script>
        </div>
        <div class="timer__small">
            <script src="//megatimer.ru/get/6531014b15aa4558ef33a1cab293882f.js"></script>
        </div><button class="timer__button">Пройти тест</button>
    </section>
    <section class="feedbacks">
        <h2 class="feedbacks__title"><span>Отзывы</span> о нас</h2>
        <div class="feedbacks__carousel">
            <div class="feedbacks__carousel-item">
                <div class="feedbacks__text">Обратился в эту компанию по поводу оформления банкротства. Оказали достойную
                    помощь. От специалистов ощущается колоссальная поддержка и профессионализм. Спасибо вам в оформление.</div>
                <div class="feedbacks__name">Хорошилов Константин Владимирович</div>
            </div>
            <div class="feedbacks__carousel-item">
                <div class="feedbacks__text">Хочу выразить благодарность, вы так четко помогли в моей ситуации.  У меня была такая ситуация,
                что я переехала  в другой город, по ЖКХ набежало много долгов на сумму 300 т.руб. квартирой не пользовалась. В один день приехали приставы, дверь выломали. 
                В довольно сжатые сроки списали долг. Понравилось корректное отношение, а также аккуратная и ответственная работа с документацией. Надеюсь, больше таких 
                ситуаций не возникнет, но если придётся разбираться, буду работать с вами.</div>
                <div class="feedbacks__name">Окладникова Евгения Станиславовна</div>
            </div>
            <div class="feedbacks__carousel-item">
                <div class="feedbacks__text">Случилась в жизни неприятная ситуация, меня незаконно уволили с работы во время пандемии. Так как у меня ипотека и кредиты, 
                а платить было нечем, хватало на еду сбережений, то долги обросли таким комом, что стало страшно. Консультации помогли понять, что правда и справедливость 
                на моей стороне и долги можно списать законно. Поддержка юриста значит многое. Большое спасибо!</div>
                <div class="feedbacks__name">Захаров Арсен Кириллович</div>
            </div>
            <div class="feedbacks__carousel-item">
                <div class="feedbacks__text">Пришла с проблемой — ушла с решением! Всегда боялась банкротства, а оказалось это решение хорошее. Отличные специалисты, 
                помогли с оформлением этой процедуры. Я довольна!</div>
                <div class="feedbacks__name">Юдина Юлия Мироновна</div>
            </div>
            <div class="feedbacks__carousel-item">
                <div class="feedbacks__text">Банкротство — это настоящее сокровище! Юристы работают слаженно, объясняют всё ненавязчиво и популярно, заметно профессиональное 
                и ответственное, скрупулезное отношение к делу. Рад, что жизнь привела меня именно сюда. Устал уже от судов, прошло много времени, наконец решение было 
                удовлетворено в мою пользу, сказать, что я счастлив — значит ничего не сказать. Хочу искренне пожелать вам успехов и профессионального роста, будьте здоровы!</div>
                <div class="feedbacks__name">Румянцев Юрий Григорьевич</div>
            </div>
            <div class="feedbacks__carousel-item">
                <div class="feedbacks__text">Вопросами банкротства сейчас занимаются все, кому не лень, а что делать обычным людям, как разобраться, кто поможет, а кто просто 
                так в конторах штаны просиживает? Когда находишься в сложной ситуации, вообще не до поисков. Мне помогли и  двум моим хорошим знакомым, по результатам обращений 
                все дела выиграны. Ради бога, не тратьте время на консультации неграмотных «юристов», советую не мешкать. </div>
                <div class="feedbacks__name">Рогов Алексей Львович</div>
            </div>
        </div>
        <div class="feedbacks__wrapper">
            <div class="feedbacks__item">
                <div class="feedbacks__message-1">Здравствуйте!<br>Спасибо вам большое еще раз! Не могу поверить, что
                    все получилось по списанию долга.</div>
                <div class="feedbacks__message-2">Добрый день, Алексей Олегович! Пожалуйста, наша команда тоже рада, что
                    все решилось благополучно для вас. Всегда рады быть вам полезны.</div>
                <div class="feedbacks__message-3"><img src="icons/smile_1.png" alt="smile1"></div>
                <div class="feedbacks__message-4"><img src="icons/smile_2.png" alt="smile2"></div>
            </div>
            <div class="feedbacks__item">
                <div class="feedbacks__message-1">Добрый вечер.</div>
                <div class="feedbacks__message-2">Добрый вечер.</div>
                <div class="feedbacks__message-1">Хочу выразить вам благодарность, вы буквально спасли меня.</div>
                <div class="feedbacks__message-2">Ну что Вы, мы выполняли свою работу. Рады были вам помочь.</div>
                <div class="feedbacks__message-1">Спасибо вам!</div>
                <div class="feedbacks__message-2">Вам спасибо, что обратились к нам)</div>
            </div>
            <div class="feedbacks__item">
                <div class="feedbacks__message-1">Доброе  утро! Спасибо вам в оформлении банкротства, жить стало значительно легче без долгов, не знаю, 
                что делал бы без вашей помощи в оформлении.</div>
                <div class="feedbacks__message-2">Доброе утро, Михаил! Мы рады были вам помочь<img src="icons/smile_1.png" alt="smile1"></div>
            </div>
            <div class="feedbacks__item">
                <div class="feedbacks__message-1">Приветствую</div>
                <div class="feedbacks__message-2">Здравствуйте!</div>
                <div class="feedbacks__message-1">Ребята, респект вам! Я конечно, тот еще должник, но кто знает как было бы без вашей помощи. Благодарю!</div>
                <div class="feedbacks__message-2">Андрей, спасибо вам за теплые слова<img src="icons/smile_1.png" alt="smile1"></div>
            </div>
            <div class="feedbacks__item">
                <div class="feedbacks__message-1">Здравствуйте, дорогие спасители!</div>
                <div class="feedbacks__message-2">Здравствуйте, Олеся<img src="icons/smile_1.png" alt="smile1"></div>
                <div class="feedbacks__message-1">Вы самые классные! Спасибо вам за мое банкротство <img src="icons/smile_1.png" alt="smile1">.  не понимаю, почему я 
                так боялась этой процедуры… Но могу сказать, благодарна судьбе, что доверила оформление вам и решилась на эту процедуру. Спасибо вам большое! Вы лучшие!</div>
                <div class="feedbacks__message-2">Олеся, спасибо за теплые слова. Рады были вам оказать помощь<img src="icons/smile_2.png" alt="smile2"></div>
            </div>
        </div>
        <button class="feedbacks__button">Узнать стоимость</button>
    </section>
    <footer class="footer">
        <a href="tel:+78126605900" class="footer__phone">+7 (812) 660-59-00<span>Круглосуточно</span></a>
        <div class="footer__email">СРО ААУ «ОРИОН» г. Санкт-Петербург</div>
        <a href="mailto:9176977@mail.ru" class="footer__email">9176977@mail.ru</a>
    </footer>
    <form action="#" onsubmit="ym(73122799,'reachGoal','landing131'); return true;" class="overlay">
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr"><img src="icons/icon.svg" alt="icon">Опишите вашу ситуацию и получите
                    Инструкцию по избавлению от долгов БЕСПЛАТНО</div>
                <div class="modal__counter">1/6</div>
            </div>
            <div class="modal__progressbar">
                <hr>
                <hr>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Какая общая сумма вашей задолженности?</h2>
                <div class="modal__text">Важно указать примерный объем долга. Так как в каждом случае применяются разные
                    подходы в работе</div><label class="modal__label"><input type="radio" name="question_1"
                        value="До 100 000 руб.">До 100 000 руб.</label> <label class="modal__label"><input type="radio"
                        name="question_1" value="100 000 - 300 000 руб.">100 000 - 300 000 руб.</label> <label
                    class="modal__label"><input type="radio" name="question_1" value="300 000 - 1 000 000 руб.">300 000
                    - 1 000 000 руб.</label> <label class="modal__label"><input type="radio" name="question_1"
                        value="Свыше 1 000 000 руб.">Свыше 1 000 000 руб.</label>
                <div class="modal__buttons">
                    <div class="button button_prev button_close">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr"><img src="icons/icon.svg" alt="icon">Опишите вашу ситуацию и получите
                    Инструкцию по избавлению от долгов БЕСПЛАТНО</div>
                <div class="modal__counter">2/6</div>
            </div>
            <div class="modal__progressbar modal__progressbar_2">
                <hr>
                <hr>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Вы работаете официально?</h2>
                <div class="modal__text">При взыскании задолженности приставы и банковские работники прежде всего
                    смотрят на официальные источники дохода</div><label class="modal__label"><input type="radio"
                        name="question_2" value="Да">Да</label> <label class="modal__label"><input type="radio"
                        name="question_2" value="Нет">Нет</label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr"><img src="icons/icon.svg" alt="icon">Опишите вашу ситуацию и получите
                    Инструкцию по избавлению от долгов БЕСПЛАТНО</div>
                <div class="modal__counter">3/6</div>
            </div>
            <div class="modal__progressbar modal__progressbar_3">
                <hr>
                <hr>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Какова сумма вашего официального дохода в месяц?</h2>
                <div class="modal__text">В данном случае важно верно оценить риски, связанные с вашим доходом. Укажите,
                    пожалуйста, сумму.</div><label class="modal__label"><input type="radio" name="question_3"
                        value="До 10 000 руб.">До 10 000 руб.</label> <label class="modal__label"><input type="radio"
                        name="question_3" value="10 000 - 25 000 руб.">10 000 - 25 000 руб.</label> <label
                    class="modal__label"><input type="radio" name="question_3" value="25 000 - 50 000 руб.">25 000 - 50
                    000 руб.</label> <label class="modal__label"><input type="radio" name="question_3"
                        value="Свыше 50 000 руб.">Свыше 50 000 руб.</label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr"><img src="icons/icon.svg" alt="icon">Опишите вашу ситуацию и получите
                    Инструкцию по избавлению от долгов БЕСПЛАТНО</div>
                <div class="modal__counter">4/6</div>
            </div>
            <div class="modal__progressbar modal__progressbar_4">
                <hr>
                <hr>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Укажите структуру вашей задолженности</h2>
                <div class="modal__text">Хочу вас обрадовать - любые типы задолженности можно списать! Но в каждом
                    случае действует свой порядок работы. Выберите из списка именно ваши типы задолженности (можно
                    несколько)</div>
                <div class="modal__wrapper">
                    <div class="modal__tab"><label class="modal__label"><input type="checkbox" name="question_4[]"
                                value="Потребительские кредиты">Потребительские кредиты</label> <label
                            class="modal__label"><input type="checkbox" name="question_4[]"
                                value="Автокредит">Автокредит</label> <label class="modal__label"><input type="checkbox"
                                name="question_4[]" value="Займы в МФО">Займы в МФО</label> <label
                            class="modal__label"><input type="checkbox" name="question_4[]"
                                value="Задолженность по налогам">Задолженность по налогам</label></div>
                    <div class="modal__tab"><label class="modal__label"><input type="checkbox" name="question_4[]"
                                value="Кредитные карты">Кредитные карты</label> <label class="modal__label"><input
                                type="checkbox" name="question_4[]" value="Ипотека">Ипотека</label> <label
                            class="modal__label"><input type="checkbox" name="question_4[]"
                                value="Задолженность по ЖКХ">Задолженность по ЖКХ</label> <label
                            class="modal__label"><input type="checkbox" name="question_4[]"
                                value="Расписки перед физлицами">Расписки перед физлицами</label></div>
                </div>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr"><img src="icons/icon.svg" alt="icon">Опишите вашу ситуацию и получите
                    Инструкцию по избавлению от долгов БЕСПЛАТНО</div>
                <div class="modal__counter">5/6</div>
            </div>
            <div class="modal__progressbar modal__progressbar_5">
                <hr>
                <hr>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Были ли у вас просрочки по платежам по кредитам?</h2>
                <div class="modal__text">Я надеюсь, вы добропорядочный плательщик и ситуация с платежами в норме. Но
                    даже если просрочки уже были допущены - есть решение вашей проблемы!</div><label
                    class="modal__label"><input type="radio" name="question_5" value="Нет">Нет</label> <label
                    class="modal__label"><input type="radio" name="question_5" value="Да, до 3 месяцев">Да, до 3
                    месяцев</label> <label class="modal__label"><input type="radio" name="question_5"
                        value="Да, более 3 месяцев">Да, более 3 месяцев</label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr"><img src="icons/icon.svg" alt="icon">Опишите вашу ситуацию и получите
                    Инструкцию по избавлению от долгов БЕСПЛАТНО</div>
                <div class="modal__counter">6/6</div>
            </div>
            <div class="modal__progressbar modal__progressbar_6">
                <hr>
                <hr>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">С чем из перечисленного ниже вы уже столкнулись?</h2>
                <div class="modal__text">И последний вопрос. Укажите какие методы давления и способы взыскания к вам
                    применяли ваши кредиторы или исполнительные органы. В зависимости от этого будет выстроена стратегия
                    вашей защиты!</div>
                <div class="modal__wrapper">
                    <div class="modal_tab"><label class="modal__label"><input type="checkbox" name="question_6[]"
                                value="Звонят банки и кредиторы">Звонят банки и кредиторы</label> <label
                            class="modal__label"><input type="checkbox" name="question_6[]"
                                value="Угрожают коллекторы">Угрожают коллекторы</label> <label
                            class="modal__label"><input type="checkbox" name="question_6[]"
                                value="Подано заявление в суд">Подано заявление в суд</label></div>
                    <div class="modal__tab"><label class="modal__label"><input type="checkbox" name="question_6[]"
                                value="Есть исполнительное производство">Есть исполнительное производство</label> <label
                            class="modal__label"><input type="checkbox" name="question_6[]"
                                value="Ничего из перечисленного">Ничего из перечисленного</label> <label
                            class="modal__label"><input type="checkbox" name="question_6[]"
                                value="Другое">Другое</label></div>
                </div>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next button_final">Последний вопрос</div>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr modal__descr_final">Отлично! Вы описали свою ситуацию. Теперь укажите ваши
                    контакты, чтобы получить нашу инструкцию и полезные советы!</div>
            </div>
            <div class="modal__progressbar modal__progressbar_final">
                <hr>
                <hr>
            </div>
            <div class="modal__form"><label class="modal__label modal__label_final">Ваше имя<input type="text"
                        name="name"></label> <label class="modal__label modal__label_final">Email<input type="email"
                        name="email"></label> <label class="modal__label modal__label_final">Ваш телефон<input
                        type="tel" name="phone"></label> <label class="modal__privacy"><input type="checkbox"
                        checked="checked">Нажимая на кнопку, вы даете согласие на обработку персональных данных и
                    соглашаетесь c <a href="#">политикой конфиденциальности</a></label> <input type="hidden" name="city"
                    value="Санкт-Петербург"> <input type="hidden" name="type" value="Банкротство"> <input type="hidden"
                    name="leadtype" value="Заявка на расчет">
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div><button type="submit"
                        class="button button_final">Узнать результат</button>
                </div>
            </div>
        </div>
        <div class="modal" id="thanks">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr modal__descr_final">Отлично! Вы описали свою ситуацию. Теперь укажите ваши
                    контакты, чтобы получить нашу инструкцию и полезные советы!</div>
            </div>
            <div class="modal__progressbar modal__progressbar_final">
                <hr>
                <hr>
            </div>
            <div class="modal__thanks">Данные успешно отправлены! По этому номеру с вами свяжется оператор, ожидайте
                звонка в ближайшее время с телефона <a href="tel:+78126605900">+7 (812) 660-59-00</a> !</div>
        </div>
    </form>
    <section class="privacy">
        <div class="privacy__wrapper"><button class="privacy__back">Перейти обратно на сайт</button>
            <h2 class="privacy__header">Политика в отношении обработки персональных данных</h2>
            <ol class="privacy__rules">
                <li class="privacy__item">Общие положения Настоящая политика обработки персональных данных составлена в
                    соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и
                    определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных
                    данных ИП Зембицкий Владислав Владимирович (далее – Оператор).<ol>
                        <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение
                            прав и свобод человека и гражданина при обработке его персональных данных, в том числе
                            защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
                        <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика)
                            применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>.</li>
                    </ol>
                </li>
                <li class="privacy__item">Основные понятия, используемые в Политике<ol>
                        <li>Автоматизированная обработка персональных данных – обработка персональных данных с помощью
                            средств вычислительной техники;</li>
                        <li>Блокирование персональных данных – временное прекращение обработки персональных данных (за
                            исключением случаев, если обработка необходима для уточнения персональных данных);</li>
                        <li>Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и
                            баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>;</li>
                        <li>Информационная система персональных данных — совокупность содержащихся в базах данных
                            персональных данных, и обеспечивающих их обработку информационных технологий и технических
                            средств;</li>
                        <li>Обезличивание персональных данных — действия, в результате которых невозможно определить без
                            использования дополнительной информации принадлежность персональных данных конкретному
                            Пользователю или иному субъекту персональных данных;</li>
                        <li>Обработка персональных данных – любое действие (операция) или совокупность действий
                            (операций), совершаемых с использованием средств автоматизации или без использования таких
                            средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение,
                            уточнение (обновление, изменение), извлечение, использование, передачу (распространение,
                            предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных
                            данных;</li>
                        <li>Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо,
                            самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку
                            персональных данных, а также определяющие цели обработки персональных данных, состав
                            персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными
                            данными;</li>
                        <li>Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или
                            определяемому Пользователю веб-сайта <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>;</li>
                        <li>Пользователь – любой посетитель веб-сайта <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>;</li>
                        <li>Предоставление персональных данных – действия, направленные на раскрытие персональных данных
                            определенному лицу или определенному кругу лиц;</li>
                        <li>Распространение персональных данных – любые действия, направленные на раскрытие персональных
                            данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с
                            персональными данными неограниченного круга лиц, в том числе обнародование персональных
                            данных в средствах массовой информации, размещение в информационно-телекоммуникационных
                            сетях или предоставление доступа к персональным данным каким-либо иным способом;</li>
                        <li>Трансграничная передача персональных данных – передача персональных данных на территорию
                            иностранного государства органу власти иностранного государства, иностранному физическому
                            или иностранному юридическому лицу;</li>
                        <li>Уничтожение персональных данных – любые действия, в результате которых персональные данные
                            уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания
                            персональных данных в информационной системе персональных данных и (или) уничтожаются
                            материальные носители персональных данных.</li>
                    </ol>
                </li>
                <li class="privacy__item">Оператор может обрабатывать следующие персональные данные Пользователя<ol>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Электронный адрес;</li>
                        <li>Номера телефонов;</li>
                        <li>Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов
                            «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).
                        </li>
                        <li>Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные
                            данные.</li>
                    </ol>
                </li>
                <li class="privacy__item">Цели обработки персональных данных<ol>
                        <li>Цель обработки персональных данных Пользователя — информирование Пользователя посредством
                            отправки электронных писем; заключение, исполнение и прекращение гражданско-правовых
                            договоров; предоставление доступа Пользователю к сервисам, информации и/или материалам,
                            содержащимся на веб-сайте.</li>
                        <li>Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах,
                            специальных предложениях и различных событиях. Пользователь всегда может отказаться от
                            получения информационных сообщений, направив Оператору письмо на адрес электронной почты <a
                                href="email:vzembitskiy@yandex.ru">vzembitskiy@yandex.ru</a> с пометкой «Отказ от
                            уведомлений о новых продуктах и услугах и специальных предложениях».</li>
                        <li>Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики, служат
                            для сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его
                            содержания.</li>
                    </ol>
                </li>
                <li class="privacy__item">Правовые основания обработки персональных данных<ol>
                        <li>Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или
                            отправки Пользователем самостоятельно через специальные формы, расположенные на сайте <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>. Заполняя соответствующие формы
                            и/или отправляя свои персональные данные Оператору, Пользователь выражает свое согласие с
                            данной Политикой.</li>
                        <li>Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в
                            настройках браузера Пользователя (включено сохранение файлов «cookie» и использование
                            технологии JavaScript).</li>
                    </ol>
                </li>
                <li class="privacy__item">Порядок сбора, хранения, передачи и других видов обработки персональных данных
                    Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации
                    правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований
                    действующего законодательства в области защиты персональных данных.<ol>
                        <li>Оператор обеспечивает сохранность персональных данных и принимает все возможные меры,
                            исключающие доступ к персональным данным неуполномоченных лиц.</li>
                        <li>Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим
                            лицам, за исключением случаев, связанных с исполнением действующего законодательства.</li>
                        <li>В случае выявления неточностей в персональных данных, Пользователь может актуализировать их
                            самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора
                            <a href="email:vzembitskiy@yandex.ru">vzembitskiy@yandex.ru</a> с пометкой «Актуализация
                            персональных данных».</li>
                        <li>Срок обработки персональных данных является неограниченным. Пользователь может в любой
                            момент отозвать свое согласие на обработку персональных данных, направив Оператору
                            уведомление посредством электронной почты на электронный адрес Оператора <a
                                href="email:vzembitskiy@yandex.ru">vzembitskiy@yandex.ru</a> с пометкой «Отзыв согласия
                            на обработку персональных данных».</li>
                    </ol>
                </li>
                <li class="privacy__item">Трансграничная передача персональных данных<ol>
                        <li>Оператор до начала осуществления трансграничной передачи персональных данных обязан
                            убедиться в том, что иностранным государством, на территорию которого предполагается
                            осуществлять передачу персональных данных, обеспечивается надежная защита прав субъектов
                            персональных данных.</li>
                        <li>Трансграничная передача персональных данных на территории иностранных государств, не
                            отвечающих вышеуказанным требованиям, может осуществляться только в случае наличия согласия
                            в письменной форме субъекта персональных данных на трансграничную передачу его персональных
                            данных и/или исполнения договора, стороной которого является субъект персональных данных.
                        </li>
                    </ol>
                </li>
                <li class="privacy__item">Заключительные положения<ol>
                        <li>Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки
                            его персональных данных, обратившись к Оператору с помощью электронной почты <a
                                href="email:vzembitskiy@yandex.ru">vzembitskiy@yandex.ru</a>.</li>
                        <li>В данном документе будут отражены любые изменения политики обработки персональных данных
                            Оператором. Политика действует бессрочно до замены ее новой версией.</li>
                        <li>Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу <a
                                href="leads4you.ru/privacy-policy.html">leads4you.ru/privacy-policy.html</a>.</li>
                    </ol>
                </li>
            </ol><button class="privacy__back">Перейти обратно на сайт</button>
        </div>
    </section>
</body>
<script src="js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/script.js"></script>

</html>