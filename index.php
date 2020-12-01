<!DOCTYPE html>
<html lang="ru">
<?php require "general-components/head.php"; ?>
<body class="container-fluid p-0">

<header class="main-header pb-5">
    <?php require "general-components/nav.php"; ?>
    <div class="info-block">
        <img class="info-block__info-logo mt-md-5" src="img/image-07-10-20-02-28-2%201.png" alt="">
        <h1 class="info-block__coach-title">Life coach soul</h1>
        <h3 class="info-block__school-title mb-md-3">Онлайн школа</h3>
        <a class="info-block__call-btn my-3 my-md-5 pt-md-3 px-3 py-3">приступить к обучению</a>
    </div>
</header>

<main>
    <section class="about-author container-fluid px-0">
        <div class="container">
            <div class="row p-o">
                <div class="col-lg-12 col-12">
                    <p class="about-author__title my-md-5">Об авторе</p>
                </div>
                <div class="col-lg-6 col-12 d-sm-none d-none d-md-block">
                    <img class="mt-n3" src="img/Photo.png"
                         alt="Lilit Vag photo">
                </div>
                <div class="col-lg-6 col-12 mb-md-1">
                    <h5 class="about-author__name my-md-5">Лилит Ваг —</h5>
                    <ul class="about-author__list">
                        <li class="about-author__block  my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Основатель Онлайн Школы "Life Coach Soul"</span>
                        </li>
                        <li class="about-author__block  my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Ведущий тренер института Люди Без Границ</span>
                        </li>
                        <li class="about-author__block my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Создатель авторских курсов и практик
                        для <br> личностного и духовного роста</span>
                        </li>
                        <li class="about-author__block my-2">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Продюсер Он-лайн проектов</span>
                        </li>
                    </ul>
                    <a class="about-author__call-btn my-4 my-md-5 pt-md-3 px-3 py-3">приступить к обучению</a>
                </div>
            </div>
        </div>

    </section>

    <section class="school-product container-fluid py-md-5 px-md-5">
        <div class="container my-md-5 mx-auto">
            <h3 class="school-product__title mb-5">Курсы и продукты школы</h3>
            <div class="can-toggle text-center d-none d-lg-block d-xl-block">

                <label class="toggle__coaching">
                    <input class="first-radio" type="radio" checked name="color" value="indigo">
                    <span class="first-block">Лайф-коучинг</span>
                </label>
                <label class="toggle__reload ml-n1">
                    <input class="second-radio" type="radio" name="color" value="indigo">
                    <span class="second-block">Тотальная перезагрузка</span>
                </label>

            </div>


            <div class="middle d-lg-none">
                <label>
                    <input type="radio" name="radio" checked/>
                    <div class="front-end box">
                        <span class="pl-3 pt-3">Лайф-коучинг</span>
                    </div>
                </label>

                <label>
                    <input type="radio" name="radio"/>
                    <div class="back-end box">
                        <span class="ml-2 pt-1">Тотальная перезагрузка</span>
                    </div>
                </label>

            </div>


            <div class="coaching-block my-md-5 px-0 container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <h3 class="coaching-block__title">Старт коучинга:</h3>
                        <p class="coaching-block__info">1 декабря 2020 года</p>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h3 class="coaching-block__title">Длительность обучения:</h3>
                        <p class="coaching-block__info">2 месяца</p>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h3 class="coaching-block__title">Формат обучения:</h3>
                        <p class="coaching-block__info">Онлайн</p>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h3 class="coaching-block__title">Бонус:</h3>
                        <p class="coaching-block__info">Чат с участниками</p>
                    </div>
                </div>
                <p class="lesson-txt">
                    Программа курса , Разработана автором школы , для глубинных, экологичных и точечных решений ,
                    основных жизненных задач человека.Иструменты подбираются индивидуально под запрос клиента.
                </p>

                <h3 class="skill-title my-5">Что нужно знать и уметь, для того чтобы <br> стать экспертом в Коучинге?
                </h3>
                <div class="row">
                    <ul class="lesson-txt col-lg-6">
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2"></i>
                            <span class="skill-title__info py-2">В первую очередь , прокачать себя и свои собственные навыки в
                            решении жизненно важных задач</span>
                        </li>
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2 pt-4"></i>
                            <span class="skill-title__info">Найти у себя причины развития неконструктивных событий и решить
                            их, с помощью специальных инструментов по расширению сознания</span>
                        </li>
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2 pt-4"></i>
                            <span class="skill-title__info py-2">Развить у себя сознание изобилия</span>
                        </li>
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2 pt-4"></i>
                            <span class="skill-title__info py-2">Пройти опыт индивидуальных сессий с участниками курса,
                            заработать навык экологичного взаимодействия с будущими клиентами</span>
                        </li>
                    </ul>
                    <ul class="lesson-txt col-lg-6">
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2 mb-3p"></i>
                            <span class="skill-title__info">Обучится навыку продаж с личных сессий, мастер групп и курсов на
                            большую аудиторию</span>
                        </li>
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2 pt-4"></i>
                            <span class="skill-title__info">Найти у себя причины развития неконструктивных событий и решить
                            их, с помощью специальных инструментов по расширению сознания</span>
                        </li>
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2 pt-4"></i>
                            <span class="skill-title__info">Навыки по прокачке своих интернет площадок и научится делать
                            качественный контент</span>
                        </li>
                        <li class="skill-title__list">
                            <i class="far fa-star yellow-star mr-2 pt-4"></i>
                            <span class="skill-title__info">Диплом Коуча и возможность открыть свою собственную онлайн
                            школу с большими перспективами на будущее</span>
                        </li>
                    </ul>
                </div>
                <div class="module my-md-5 p-3 p-lg-5 mb-3">


                    <p class="module__module-number">Первый модуль</p>

                    <h2 class="module__module-title">«Домашний Коуч»</h2>
                    <p class="module__module-period pull-right mt-n5">Длительность обучения:
                    </p>
                    <p class="module__module-period pull-right">1 месяц</p>

                    <ul class="module__module-paragraph">
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Развитие личных качеств по расширению границ сознания</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Прокачиваем мышление и сознание изобилия во всех сферах</span>
                        </li>
                        <li class="module__module-list my-2">
                            <i class="far fa-star pink-star mr-3"></i>
                            <span class="about-author__info">Избавление от внутренних границ</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Проработка программ долга, жертвы, детские травмы и многое другое</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Инструменты проработки конкретных задач у человека и дальнейшее
                        кураторство в рамках курса</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Чат Коучей всех потоков , возможность работы в парах, для
                        проработки личных целей</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Развить у себя сознание изобилия</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">И многое многое другое</span>
                        </li>
                    </ul>
                    <p class="module__module-info mt-4">Чат с участниками доступен для Вас Бессрочно!</p>
                </div>

                <div class="module p-3 p-lg-5">
                    <p class="module__module-number">Второй модуль</p>
                    <h2 class="module__module-title">«Эксперт»</h2>

                    <p class="module__module-period pull-right mt-n5">Длительность обучения:
                    </p>
                    <p class="module__module-period pull-right">1 месяц</p>

                    <ul class="module__module-paragraph">
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Все уроки и инструменты от первого модуля</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Обучение Навыкам онлайн продаж</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Обучение продаж с вебинаров</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">План составления продающих вебинаров и помощь в выборе и разборе тем</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Навыки качественного позиционирования себя и своих услуг в
                        социальных сетях (Инстаграм)</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Навыки По Личным и индивидуальным продажам</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Навыки продаж на групповые Коучинговые услуги</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Чат Коучей всех потоков , возможность работы в парах, для проработки
                        личных целей</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Предоставление моей аудитории, Ваших первых клиентов и первых
                        доходов</span>
                        </li>
                        <li class="module__module-list my-3">
                            <i class="far fa-star pink-star mr-2"></i>
                            <span class="about-author__info">Диплом Лайф-Коуча</span>
                        </li>
                    </ul>
                    <p class="module__module-info mt-4">Чат с участниками доступен для Вас Бессрочно!</p>
                </div>
                <div class="my-md-5 my-3 text-center">
                    <span class="question-txt">Остались вопросы? через ватсапп можете задать любой вопрос</span>
                    <i class="fab fa-whatsapp fa-lg text-white ml-4"></i>
                </div>
                <div class="text-center">
                    <a class="pay-btn my-4 my-md-2 pt-md-3 px-3 py-3 mx-auto">перейти к оплате</a>
                </div>
            </div>
        </div>
    </section>
    <h3 class="question my-5">Как приступить к обучению?</h3>
    <section class="stage p-lg-0">
        <div class="container p-lg-0 mb-md-5 mb-2">
            <div class="row p-lg-0">
                <div class="col-lg-10 col-12 p-lg-0">
                    <div class="row p-lg-0">
                        <div class="col-lg-2 col-12 p-lg-0">
                            <div class="row">
                                <div class="col-lg-12 col-4 p-lg-0 text-center stage__stage-number">01</div>
                                <div class="col-lg-12 col-8 p-lg-0 stage__stage-txt mt-5 mt-md-0 ml-lg-4">Выбрать коучинг</div>
                            </div>
                        </div>
                        <div class="col-lg-1 p-0 d-sm-none d-none d-xl-block"><img class="stage__arrow mt-5 ml-n4"
                                                                                   src="img/Arrow.svg"
                                                                                   alt="large-arrow">
                        </div>
                        <div class="col-lg-1 p-0 d-sm-none d-none d-xl-none d-lg-block"><img
                                    class="stage__arrow mt-5 ml-n4"
                                    src="img/arrow-sm.png"
                                    alt="small-arrow">
                        </div>
                        <div class="col-lg-2 col-12 p-lg-0">
                            <div class="row">
                                <div class="col-lg-12 col-4 p-lg-0 text-center stage__stage-number">02</div>
                                <div class="col-lg-12 col-8 p-lg-0 stage__stage-txt mt-4 mt-md-0">Перейти к оплате
                                    <a class="stage__stage-link">по ссылке</a></div>
                            </div>
                        </div>
                        <div class="col-lg-1 p-0 d-sm-none d-none d-xl-block"><img class="stage__arrow mt-5 ml-n4"
                                                                                   src="img/Arrow.svg"
                                                                                   alt="large-arrow">
                        </div>
                        <div class="col-lg-1 p-0 d-sm-none d-none d-xl-none d-lg-block"><img
                                    class="stage__arrow mt-5 ml-n4"
                                    src="img/arrow-sm.png"
                                    alt="small-arrow">
                        </div>

                        <div class="col-lg-2 col-12 p-lg-0">
                            <div class="row">
                                <div class="col-lg-12 col-4 p-lg-0 text-center stage__stage-number">03</div>
                                <div class="col-lg-12 col-8 p-lg-0 stage__stage-txt mt-3 mt-md-0">После оплаты вы
                                    получaeте
                                    доступ к личному кабинету
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-block"><img class="stage__arrow mt-5 ml-n4"
                                                                               src="img/Arrow.svg"
                                                                               alt="large-arrow">
                    </div>
                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-none d-lg-block"><img
                                class="stage__arrow mt-5 ml-n4"
                                src="img/arrow-sm.png"
                                alt="small-arrow">
                    </div>
                        <div class="col-lg-3 col-12 p-lg-0">
                            <div class="row">
                                <div class="col-lg-12 col-4 p-0 text-center stage__stage-number ml-lg-n4">04</div>
                                <div class="col-lg-12 col-8 p-0 stage__stage-txt mt-3 mt-md-0">Приступаете к обучению в
                                    личном кабинете
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-12 p-0 mt-md-5 mb-md-0 mb-2 mt-5">
                    <a class="col-lg-1 col-8 offset-2 offset-lg-0 p-0 top-btn ml-md-2 ml-4 px-4 py-2 mt-5">
                        <img class="top-arrow mb-2 mr-1" src="img/Vector.svg"
                             alt="top-arrow"><span class="top-txt">Вверх</span></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "general-components/footer.php"; ?>
</body>
</html>