<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>{{ config('app.name', 'Groovie') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/bootstrap.css" rel="stylesheet">

    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/style.css" rel="stylesheet">
    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/animate.css" rel="stylesheet">
    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/style-magnific-popup.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600,700" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/pe-icon-7-stroke.css">

    <link rel="stylesheet" href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/helper.css">

    <link rel="stylesheet"
          href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/owl.carousel.min.css">
    <link rel="stylesheet"
          href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/owl.theme.default.min.css">

    <link rel="shortcut icon" href="http://vessteros.beget.tech/resources/img/landing/favicon.ico">

    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>

</head>

<body>
<div id="app">

    <header class="header">


        <nav class="navbar navbar-default navbar-fixed-top">


            <div class="container">


                <div class="navbar-header">

                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle"
                            type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <a href="/" class="navbar-brand" id="logo">Groovie</a>

                </div>

                <div id="navbar-collapse-02" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home_wrapper">Главная</a></li>

                        <li><a href="#about">Как работает?</a></li>

                        <li><a href="#features">Преимущества</a></li>

                        <li><a href="#gallery">Галерея</a></li>

                        <li><a href="#otz">Отзывы</a></li>

                        <li><a href="#blog">События</a></li>

                        <li><a href="#contact">Регистрация</a></li>

                        <li><a href="#download-app" class="external discover-btn">Начать</a></li>

                    </ul>
                </div>


            </div>


        </nav>


    </header>

    <section class="home-section" id="home_wrapper">

        <div class="home-section-overlay"></div>


        <div class="container">


            <div class="row">


                <div class="col-md-7 padding-top-80">

                    <h1>Groovie</h1>

                    <p>. . . трудно представить, что общение может быть еще проще.</p>

                    <a href="#about" class="btn-green scrool">Узнай больше</a>

                </div>


                <div class="col-md-5 wow bounceIn" data-wow-delay="0.5s"
                     style="visibility: visible;">
                    {{--animation-delay: 0.5s; animation-name: bounceIn;--}}
                    <img src="http://vessteros.beget.tech/resources/img/landing/iphones-2-2.png" class="width-100"
                         alt="pic">

                </div>


            </div>


        </div>


    </section>

    <section class="section-grey small-padding-top" id="about">


        <div class="container">


            <div class="row">


                <div class="col-md-12 text-center">

                    <h2 class="section-title">Почему все так просто?</h2>

                    <p class="section-subtitle">Будем честны, каждый из нас имеет более одного аккаунта в социальных
                        сетях.<br>Теперь можно взаимодействовать с каждым из них из одного места.</p>

                </div>


                <div class="col-md-4">

                    <div class="main-services">

                        <img src="http://vessteros.beget.tech/resources/img/landing/1.png" class="width-100" alt="pic">

                        <h3>Мастер-аккаунт</h3>

                        <p>Создайте аккаунт Groovie, чтобы иметь доступ к системе, а так же возможность объединить
                            аккаунты социальных сетей.</p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="main-services">

                        <img src="http://vessteros.beget.tech/resources/img/landing/2.png" class="width-100" alt="pic">

                        <h3>Авторизуйтесь</h3>

                        <p>Выберите социальную сеть, которую вы хотели бы подключить к своему мастер аккаунту.</p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="main-services">

                        <img src="http://vessteros.beget.tech/resources/img/landing/3.png" class="width-100" alt="pic">

                        <h3>Общайтесь</h3>

                        <p>Продолжите общение в друзьями и знакомыми без переключения между
                            приложениями.</p>

                    </div>

                </div>


            </div>


        </div>


    </section>

    <section class="section-white" id="features">


        <div class="container">


            <div class="row">


                <div class="col-md-12 margin-bottom-40 text-center">

                    <h2 class="section-title">Неоспоримые преимущества</h2>

                    <p class="section-subtitle">Будь вы в дороге, дома или на работе, вам больше не придется делать
                        лишние действия, чтобы ответить всем.<br>Мы гарантируем это.</p>

                </div>


                <div class="col-md-4 padding-top-40">


                    <div class="features_item">

                        <div class="dropcaps_right">
                            <span class="fa fa-laptop features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>Вкладки не нужны</h4>
                            <p>Забудте о 20+ открытых вкладок в вашем браузере. Ваши диалоги всегда под рукой.</p>
                        </div>

                    </div>


                    <div class="features_item">

                        <div class="dropcaps_right">
                            <span class="fa fa-code features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>Понятный интерфейс</h4>
                            <p>Переключение между социальными сетями легко и интуитивно, поверьте, вам понравится.</p>
                        </div>

                    </div>


                    <div class="features_item">

                        <div class="dropcaps_right">
                            <span class="fa fa-camera-retro features_icons"></span>
                        </div>

                        <div class="text_align_right">
                            <h4>Фотография?</h4>
                            <p>Смешная картинка или эстетичное фото? Вы можете разом показать его друзьям из всех
                                сетей!</p>
                        </div>

                    </div>


                </div>


                <div class="col-md-4 wow slideInUp" data-wow-delay="0.5s"
                     style="visibility: visible;">
                    {{--animation-delay: 0.5s; animation-name: bounceIn;--}}
                    <img src="http://vessteros.beget.tech/resources/img/landing/features-iphone.png" alt="picture"
                         class="width-100">

                </div>


                <div class="col-md-4 padding-top-40">


                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-leaf features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>Ненавязчивый дизайн</h4>
                            <p>Нашей целью является ваш комфорт. Мы постарались подобрать гамму, которая не будет
                                напрягать зрение.</p>
                        </div>

                    </div>


                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-rocket features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>Реактивное общение</h4>
                            <p>Несколько важных сообщений в разных сетях? Не более секунды, чтобы переключиться!</p>
                        </div>

                    </div>


                    <div class="features_item">

                        <div class="dropcaps_left">
                            <span class="fa fa-comments features_icons"></span>
                        </div>

                        <div class="text_align_left">
                            <h4>Поддержка</h4>
                            <p>Мы серьезно относимся к нашим пользователям и рассматриваем каждое ваше обращение.</p>
                        </div>

                    </div>


                </div>


            </div>


        </div>


    </section>

    <section class="video-wrapper">

        <div class="video-wrapper-overlay"></div>

        <div class="shape-image-top"></div>


        <div class="container">


            <div class="row">


                <div class="col-md-12 text-center">


                    <div class="popup-gallery">
                        <a class="popup4 video-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ"><i
                                    class="fa fa-play"></i></a>
                    </div>


                    <h3 class="video-title white">Познакомьтесь с нами<br><span>Мы не займем ничего лишнего от вашего времени с:</span>
                    </h3>

                </div>


            </div>


        </div>


    </section>

    <section class="section-white small-padding-bottom">


        <div class="container">


            <div class="row">


                <div class="col-md-6 margin-top-10">

                    <img src="http://placehold.it/555x421" alt="picture" class="width-100">

                </div>


                <div class="col-md-6 margin-top-10">

                    <h3>Самые волнительные вопросы</h3>


                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingOne">

                                <h4 class="panel-title">

                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
                                        <i class="icon icon-rocket panel-icon"></i> Как зародилась идея такого
                                        приложения?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">

                                <div class="panel-body">
                                    <p>На самом деле мы, как впрочем, и вы, являемся активными пользователями социальных
                                        сетей, да и что говорить, время такое.<br>
                                        По роду деятельности нам приходится часто коммуницировать в разных сетях, и в
                                        какой-то момент мы поняли, что с этим можно и нужно что-то сделать.<br>
                                        По большому счету, мы разработали решение для себя, и оно понравилось нам
                                        настолько, что мы решили поделиться им с вами с:</p>
                                </div>

                            </div>

                        </div>


                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingTwo">

                                <h4 class="panel-title">

                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="icon icon-prize-award panel-icon"></i>Мы предоставляем в приложении
                                        доступ к своим аккаунтам. &nbsp;Не опасно ли это?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">

                                <div class="panel-body">
                                    <p>Мы со всей строгостью относимся к работе с личными данными, особенно своими. <br>
                                        Разрабатывая систему для личного пользования мы сильно разграничили
                                        ответственность за то, какую информацию мы собрать можем, а какую собирать не
                                        имеем права.<br>
                                        Мы хотим облегчить общение себе и вам, и опираемся на политику безопасности
                                        сетей, которые вы можете подключить к мастер-аккаунту.</p>
                                </div>

                            </div>

                        </div>


                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingThree">

                                <h4 class="panel-title">

                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="icon icon-present-gift panel-icon"></i>Приложение бесплатно?
                                    </a>

                                </h4>

                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">

                                <div class="panel-body">
                                    <p>Действительно, как вы заметили, приложение полностью бесплатно.<br>
                                        Наши пользователи могут ожидать расширения функционала в будущем. Но
                                        это ни в коем случае не повлияет на базовый функционал приложения, а платные
                                        возможности не будут выпячиваться для завлечения средств!</p>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>


            </div>


        </div>


    </section>

    <section class="section-lyla" id="gallery">


        <div class="container-fluid	">


            <div class="row">


                <div class="col-md-12 text-center">

                    <h2 class="section-title white">Если смотреть видео - лень :)</h2>

                    <p class="section-subtitle white">Мы уверены: для того, чтобы понять необходимость какого-либо
                        продукта,
                        необходимо знать о нем элементарный минимум.<br>Надеемся, что мы смогли заинтересовать вас, и
                        ждем в нашем комьюнити.</p>

                </div>


                <div class="gallery-item-wrapper padding-top-30">


                    <div id="owl2" class="owl-carousel owl-theme">

                        <div>
                            <img src="http://vessteros.beget.tech/resources/img/landing/showcase1.jpg" alt="showcase"
                                 class="gallery-show">
                        </div>

                        <div>
                            <img src="http://vessteros.beget.tech/resources/img/landing/showcase2.jpg" alt="showcase"
                                 class="gallery-show">
                        </div>

                        <div>
                            <img src="http://vessteros.beget.tech/resources/img/landing/showcase3.jpg" alt="showcase"
                                 class="gallery-show">
                        </div>

                        <div>
                            <img src="http://vessteros.beget.tech/resources/img/landing/showcase4.jpg" alt="showcase"
                                 class="gallery-show">
                        </div>

                        <div>
                            <img src="http://vessteros.beget.tech/resources/img/landing/showcase5.jpg" alt="showcase"
                                 class="gallery-show">
                        </div>

                        <div>
                            <img src="http://vessteros.beget.tech/resources/img/landing/showcase6.jpg" alt="showcase"
                                 class="gallery-show">
                        </div>

                    </div>


                    <div class="owl-dots">
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                    </div>
                </div>


            </div>


        </div>


    </section>

    <section class="section-grey" id="otz">


        <div class="container">


            <div class="row">


                <div class="col-md-8 col-md-offset-2">


                    <div id="owl1" class="owl-carousel owl-theme">


                        <div class="testim-inner">

                            <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                            <p>Отзыв 1</p>

                            <h6>Человек 1<span class="job-text"> - 123</span></h6>

                        </div>


                        <div class="testim-inner">

                            <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                            <p>Отзыв 2</p>

                            <h6>Человек 2<span class="job-text"> -  123</span></h6>

                        </div>


                        <div class="testim-inner">

                            <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                            <p>Отзыв 3</p>

                            <h6>Человек 3<span class="job-text"> - 123</span></h6>

                        </div>


                    </div>


                    <div class="owl-dots">

                        <div class="owl-dot active"><span></span></div>

                        <div class="owl-dot"><span></span></div>

                        <div class="owl-dot"><span></span></div>

                    </div>


                </div>


            </div>


        </div>


    </section>

    <section class="download-app-wrapper" id="download-app">

        <div class="download-app-wrapper-overlay"></div>

        <div class="shape-grey-image-top"></div>


        <div class="container">


            <div class="row">


                <div class="col-md-6 padding-top-100">

                    <h2 class="title-download-app-padding white-text">Наше приложение</h2>

                    <p class="white-text">Скачайте приложение в GooglePlay и присоединяйтесь к
                        нашему сообществу.</p>

                    <a href="#" class="btn-download-app"><span class="fa fa-android"></span>
                        <p>
                            <small>Get It On</small>
                            <br>Google Play
                        </p>
                    </a>

                </div>


                <div class="col-md-6 wow slideInRight" data-wow-delay="0.15s"
                     style="visibility: visible; animation-delay: 0.15s; animation-name: slideInRight;">

                    <img src="http://vessteros.beget.tech/resources/img/landing/download-app-iphone.png" alt="picture"
                         class="download-app-iphone width-100">

                </div>


            </div>


        </div>


    </section>

    <section class="section-grey" id="blog">


        <div class="container">


            <div class="row">


                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section-title">Наши крупные события</h2>

                    <div class="separator_wrapper">
                        <i class="icon icon-star-two blue"></i>
                    </div>

                    <p class="section-subtitle">Мы только начинаем свой путь, но верим, что на нем будет много
                        интересных и позитивных событий<br>Надеемся на ваше участие :)</p>
                </div>


            </div>


            <div class="row">


                <div class="col-md-12">

                    <div id="myCarousel" class="carousel carousel1 slide margin-top-20 margin-bottom-10"
                         data-interval="false">

                        <div class="carousel-inner">

                            <div class="item active">


                                <div class="col-sm-4">


                                    <div class="blog-item">


                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i
                                                                class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Событие 1</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Могиленко Н.</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> GDev</a>

                                            <p>Описание события 1</p>

                                        </div>


                                    </div>


                                </div>


                                <div class="col-sm-4">


                                    <div class="blog-item">


                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i
                                                                class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Событие 2</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Семенов В.</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Аналитик</a>

                                            <p>Описание события 2</p>

                                        </div>


                                    </div>


                                </div>


                                <div class="col-sm-4">


                                    <div class="blog-item">


                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i
                                                                class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Событие 3</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Могиленко Н.</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> GDev</a>

                                            <p>Описание события 3</p>

                                        </div>


                                    </div>


                                </div>


                            </div>

                            <div class="item text-center">


                                <div class="col-sm-4">


                                    <div class="blog-item">


                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i
                                                                class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Событие 4</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Могиленко Н.</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> GDev</a>

                                            <p>Описание события 4</p>

                                        </div>


                                    </div>


                                </div>
                                <div class="col-sm-4">
                                    <div class="blog-item">
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i
                                                                class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Событие 5</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Могиленко Н.</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> GDev</a>

                                            <p>Описание события 5</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="blog-item">
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="#">
                                                    <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                    <span class="eye-wrapper2"><i
                                                                class="fa fa-link eye-icon"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="#">Событие 6</a></h3>

                                            <a href="#" class="blog-icons"><i class="fa fa-user"></i> Могиленко Н.</a>

                                            <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> GDev</a>

                                            <p>Описание события 6</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <auth-section></auth-section>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer_social">

                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery-1.11.3.min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/bootstrap.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery.scrollTo-min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery.magnific-popup.min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery.nav.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/wow.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/plugins.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/owl.carousel.min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/custom.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>