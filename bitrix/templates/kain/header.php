<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <?/** @var TYPE_NAME $APPLICATION */
$APPLICATION->ShowHead();?>

    <title><?/** @var TYPE_NAME $APPLICATION */
$APPLICATION->ShowTitle();?>
        1с в Туле</title>
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>template_styles.css">
</head>
<body>
<?$APPLICATION->ShowPanel()?>
 <div class="back-call">
        <div class="container">
            <img src="<?=SITE_TEMPLATE_PATH?>img/back-call.png" alt="Значок телефона">
            <a href="">Заказать обратный звонок</a>
        </div>
    </div>

        <div class="container">
            <header>
                <div class="company">
                    <img src="<?=SITE_TEMPLATE_PATH?> img/logo.png" class="logo" alt="Логотип 1С">
                    <div class="text">
                        <h2>ООО «Сервис Айти»</h2>
                        <p>Продажа 1С, обслуживание, внедрение.</p>
                        <p>Компьютерный аутсорсинг. Автоматизация торговли.</p>
                    </div>
                </div>
                <div class="info-company">
                <div class="phone">
                    <a href="tel:+7 (4872) 78-03-06">7 (4872) 78-03-06</a>
                </div>
                <p>г. Тула, ул. Революции, д. 39</p>
                </div>
                <div class="mail-company">
                    <a href="mailto:info@1c-v-tule.ru">info@1c-v-tule.ru</a>
                </div>
             </header>
        </div>
    <!-------------Navigation-------------->
    <nav class="menu">
        <ul class="menu__list">
            <li>
                <a href="#" class="menu__link">Главная</a>
            </li>
            <li>
                <a href="#" class="menu__link">О компании</a>
            </li>
            <li>
                <a href="#" class="menu__link">Клиентам</a>
            </li>
            <li>
                <a href="#" class="menu__link">Специализация</a>
            </li>
            <li>
                <a href="#" class="menu__link">Сопровождение</a>
                <span class="arrow"></span>
                <ul class="sub-menu__list">
                    <li>
                        <a href="#" class="sub-menu__link">Бесплатная демонстрация</a>
                    </li>
                    <li>
                        <a href="#" class="sub-menu__link">Внедрение 1С</a>
                    </li>
                    <li>
                        <a href="#" class="sub-menu__link">Тарифы на сопровождение</a>
                    </li>
                    <li>
                        <a href="#" class="sub-menu__link">Сервисы 1С</a>
                    </li>
                    <li>
                        <a href="#" class="sub-menu__link">Обмен данных в 1С</a>
                    </li>
                    <li>
                        <a href="#" class="sub-menu__link">Подключение торгового оборудования</a>
                    </li>
                    <li>
                        <a href="#" class="sub-menu__link">Семинары</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu__link">Каталог</a>
            </li>
            <li>
                <a href="#" class="menu__link">Отзывы</a>
            </li>
            <li>
                <a href="#" class="menu__link">Контакты</a>
            </li>
        </ul>
    </nav>
        <!-------------Slider-------------->
        <article id="slider">

            <input checked type="radio" name="slider" id="slide1" />
            <input type="radio" name="slider" id="slide2" />
            <input type="radio" name="slider" id="slide3" />

            <div id="slides">
                <div id="overflow">
                    <div class="inner">

                        <article>
                            <img src="<?=SITE_TEMPLATE_PATH?> img/slider1.png" />
                        </article>
                        <article>
                            <img src="<?=SITE_TEMPLATE_PATH?> img/slider1.png" />
                        </article>
                        <article>
                            <img src="<?=SITE_TEMPLATE_PATH?> img/slider1.png" />
                        </article>
                    </div>
                </div>

            </div>

            <div id="active">

                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>

            </div>
    </article>
    <!-------------- Content-------------------->
    <div class="container">
        <div class="content text">
            <h2>«Новая Цефея» – 1С «Франчайзинг» в Смоленске</h2>
            <p>
                Работая под единой маркой «1С-франчайзинг» и «1С-Консалтинг» мы занимаемся подбором, установкой, обслуживанием решений 1С, а также
                доработкой стандартных конфигураций под индивидуальные особенности учета на предприятиях. Оказываем консультационные услуги, прово
                дим обучение пользователей по работе в программах 1С:Предприятие 8. Организовываем и проводим семинары для бухгалтеров и руководите
                лей производственных, обслуживающих и торговых компаний по актуальным вопросам современности на базе программных продуктов 1С.
                Активно развиваем бюджетное направление. Центр Бюджетного Учета компании Новая Цефея работает более 5 лет, имеет штат сертифицирова
                нных опытных специалистов, насчитывает более 80 успешных внедрений решений 1С, работает по разработанным фирмой 1С стандартам и мето
                дикам.
            </p>
            <p>
                Среди услуг компании Новая Цефея – более 20 направлений работ в области поставки, настройки, сопровождения, доработки решений 1С, а так
                же консультирования пользователей по работе с ними.
                Большой опыт работы дает возможность реализовывать смелые проекты по комплексной автоматизации производства с подбором и поставкой
                торгового оборудования, а также заниматься внедрением проектов для управления и производства на базе 1С:ERP.
            </p>
            <p class="title one">
                Основными направлениями деятельности компании Новая Цефея:
            </p>
            <ul>
                <li>Автоматизация хозяйственного учета предприятия;</li>
                <li>Автоматизация расчета заработной платы и кадрового учета;</li>
                <li>Автоматизация оптовой и розничной торговли с поставкой торгового оборудования;</li>
                <li>Автоматизация основных аспектов управления и учета на крупных предприятиях;</li>
                <li>Консалтинговые услуги по автоматизации управленческой и производственной деятельности;</li>
                <li>Автоматизация бюджетных предприятий;</li>
                <li>Обучение 1С (ЦСО 1С) и консультационные услуги;</li>
                <li>Обслуживание решений 1С (более 10 видов тарифов обслуживания организаций разных размеров, форм и направлений деятельности);</li>
            </ul>
            <p class="title two">
                Наши клиенты выбирают нас как надежного и проверенного партнера.
            </p>
        </div>
    </div>


    <!------------------------Связаться с нами------------------------->
    <div class="container connect">
        <div class="connection">
            <h2>Связаться с нами</h2>
            <p>Обратиться по общим вопросам поставки, внедрения, адаптации и сопровождения  программ 1С, а также получить консультацию по узким моментам,
                связанным с доработкой программы, переносом данных и т.п. можно любым удобным для Вас способом:
            </p>
            <div class="info">
                <img src="<?=SITE_TEMPLATE_PATH?> img/info.png" alt="">
                <ul>
                    <li>по адресу: ул. 25 Сентября, д. 30Б</li>
                    <li>по телефону <b>7 (4872) 78-03-06</b></li>
                    <li><a href="#">через электронную форму</a></li>
                </ul>
            </div>
        </div>
    </div>








	
						