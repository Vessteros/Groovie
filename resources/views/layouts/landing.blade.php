<?php session_start(); ?>
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Groovie') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script src="http://vessteros.beget.tech/resources/assets/js/parallax.min.js"></script>
    <!-- Loading Bootstrap -->
    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/bootstrap.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/style.css" rel="stylesheet">
    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/animate.css" rel="stylesheet">
    <link href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/style-magnific-popup.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600,700" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="css/pe-icon-7-stroke.css">--}}

    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/helper.css">

    <link rel="stylesheet" href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/owl.carousel.min.css">
    <link rel="stylesheet" href="http://vessteros.beget.tech/resources/assets/sass/landing/newLanding/owl.theme.default.min.css">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="http://vessteros.beget.tech/resources/img/landing/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--headerIncludes-->

</head>

<body>

<!--begin header -->
<header class="header">

    <!--begin nav -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <!--begin container -->
        <div class="container">

            <!--begin navbar -->
            <div class="navbar-header">

                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--logo -->
                <a href="/" class="navbar-brand" id="logo">Groovie</a>

            </div>

            <div id="navbar-collapse-02" class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#home_wrapper">Главная</a></li>

                    <li><a href="#about">Как работает?</a></li>

                    <li><a href="#features">Преимущества</a></li>

                    <li><a href="#gallery">Галерея</a></li>

                    <li><a href="#otz">Отзывы</a></li>

                    <li><a href="#blog">Новости</a></li>

                    <li><a href="#contact">Контакты</a></li>

                    <li><a href="#download-app" class="external discover-btn">Get Started</a></li>

                </ul>
            </div>
            <!--end navbar -->

        </div>
        <!--end container -->

    </nav>
    <!--end nav -->

</header>
<!--end header -->

<!--begin home section -->
<section class="home-section" id="home_wrapper">

    <div class="home-section-overlay"></div>

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-7-->
            <div class="col-md-7 padding-top-80">

                <h1>Welcome To Nova, The Wold's Most Powerful App Template</h1>

                <p>Curabitur quam etsum lacus etsumis nulatis etsumised vitae nislet varius loremis sedit  feugiat ligula aliquam etsimus dictimelis et netsum ipsum etim quias ligula.</p>

                <a href="#about" class="btn-green scrool">Explore Benefits</a>

            </div>
            <!--end col-md-7-->

            <!--begin col-md-5-->
            <div class="col-md-5 wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                <img src="http://vessteros.beget.tech/resources/img/landing/iphones-2-2.png" class="width-100" alt="pic">

            </div>
            <!--end col-md-5-->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end home section -->

<!--begin section-grey -->
<section class="section-grey small-padding-top" id="about">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12 text-center">

                <h2 class="section-title">Как работает приложение?</h2>

                <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

            </div>
            <!--end col-md-12 -->

            <!--begin col-md-4 -->
            <div class="col-md-4">

                <div class="main-services">

                    <img src="http://vessteros.beget.tech/resources/img/landing/1.png" class="width-100" alt="pic">

                    <h3>Search Oportunities</h3>

                    <p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>

                </div>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4">

                <div class="main-services">

                    <img src="http://vessteros.beget.tech/resources/img/landing/2.png" class="width-100" alt="pic">

                    <h3>Reach Clients</h3>

                    <p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>

                </div>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4">

                <div class="main-services">

                    <img src="http://vessteros.beget.tech/resources/img/landing/3.png" class="width-100" alt="pic">

                    <h3>Get Rewarded</h3>

                    <p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>

                </div>

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end section-grey -->

<!--begin features -->
<section class="section-white" id="features">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12 margin-bottom-40 text-center">

                <h2 class="section-title">Преимущества и Актуальность</h2>

                <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

            </div>
            <!--end col-md-12 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 padding-top-40">

                <!--begin features_item -->
                <div class="features_item">

                    <div class="dropcaps_right">
                        <span class="fa fa-laptop features_icons"></span>
                    </div>

                    <div class="text_align_right">
                        <h4>Responsive Layout</h4>
                        <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                    </div>

                </div>
                <!--end features_item -->

                <!--begin features_item -->
                <div class="features_item">

                    <div class="dropcaps_right">
                        <span class="fa fa-code features_icons"></span>
                    </div>

                    <div class="text_align_right">
                        <h4>Clean Code</h4>
                        <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                    </div>

                </div>
                <!--end features_item -->

                <!--begin features_item -->
                <div class="features_item">

                    <div class="dropcaps_right">
                        <span class="fa fa-camera-retro features_icons"></span>
                    </div>

                    <div class="text_align_right">
                        <h4>Retina Ready</h4>
                        <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                    </div>

                </div>
                <!--end features_item -->

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 wow slideInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                <img src="http://vessteros.beget.tech/resources/img/landing/features-iphone.png" alt="picture" class="width-100">

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 padding-top-40">

                <!--begin features_item -->
                <div class="features_item">

                    <div class="dropcaps_left">
                        <span class="fa fa-leaf features_icons"></span>
                    </div>

                    <div class="text_align_left">
                        <h4>Modern Design</h4>
                        <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                    </div>

                </div>
                <!--end features_item -->

                <!--begin features_item -->
                <div class="features_item">

                    <div class="dropcaps_left">
                        <span class="fa fa-rocket features_icons"></span>
                    </div>

                    <div class="text_align_left">
                        <h4>Premium Features</h4>
                        <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                    </div>

                </div>
                <!--end features_item -->

                <!--begin features_item -->
                <div class="features_item">

                    <div class="dropcaps_left">
                        <span class="fa fa-comments features_icons"></span>
                    </div>

                    <div class="text_align_left">
                        <h4>24/7 Support</h4>
                        <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>
                    </div>

                </div>
                <!--end features_item -->

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end features -->

<!--begin video-wrapper -->
<section class="video-wrapper">

    <div class="video-wrapper-overlay"></div>

    <div class="shape-image-top"></div>

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 text-center">

                <!--begin popup-gallery-->
                <div class="popup-gallery">
                    <a class="popup4 video-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ"><i class="fa fa-play"></i></a>
                </div>
                <!--end popup-gallery-->

                <h3 class="video-title white">Watch Demo Video<br><span>Amazing Features, Unlimited Possibilities.</span></h3>

            </div>
            <!--end col-md-12-->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end video-wrapper -->

<!--begin faq section -->
<section class="section-white small-padding-bottom">

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col-md-6-->
            <div class="col-md-6 margin-top-10">

                <img src="http://placehold.it/555x421" alt="picture" class="width-100">

            </div>
            <!--end col-sm-6-->

            <!--begin col-md-6-->
            <div class="col-md-6 margin-top-10">

                <h3>Часто задаваемые вопросы</h3>

                <!--begin panel-group -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <!--begin panel-default -->
                    <div class="panel panel-default">

                        <div class="panel-heading" role="tab" id="headingOne">

                            <h4 class="panel-title">

                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="icon icon-rocket panel-icon"></i> What's the difference between organic vs. paid results?
                                </a>

                            </h4>

                        </div>

                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                            <div class="panel-body">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                            </div>

                        </div>

                    </div>
                    <!--end panel-default -->

                    <!--begin panel-default -->
                    <div class="panel panel-default">

                        <div class="panel-heading" role="tab" id="headingTwo">

                            <h4 class="panel-title">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="icon icon-prize-award panel-icon"></i> Should I optimize my domain name to include keywords?
                                </a>

                            </h4>

                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

                            <div class="panel-body">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                            </div>

                        </div>

                    </div>
                    <!--end panel-default -->

                    <!--begin panel-default -->
                    <div class="panel panel-default">

                        <div class="panel-heading" role="tab" id="headingThree">

                            <h4 class="panel-title">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="icon icon-present-gift panel-icon"></i> What is the difference between indexed and crawling?
                                </a>

                            </h4>

                        </div>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

                            <div class="panel-body">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                            </div>

                        </div>

                    </div>
                    <!--end panel-default -->

                    <!--begin panel-default -->
                    <div class="panel panel-default">

                        <div class="panel-heading" role="tab" id="headingFour">

                            <h4 class="panel-title">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="icon icon-present-gift panel-icon"></i> What is the difference between indexed and crawling?
                                </a>

                            </h4>

                        </div>

                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">

                            <div class="panel-body">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt, neque et quis autem velis reprehenderit ets quis velit.</p>
                            </div>

                        </div>

                    </div>
                    <!--end panel-default -->

                </div>
                <!--end panel-group -->

            </div>
            <!--end col-sm-6-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end faq section -->



<!--begin gallery section -->
<section class="section-lyla" id="gallery">

    <!--begin container -->
    <div class="container-fluid	">

        <!--begin row -->
        <div class="row">

            <!--begin col md 12 -->
            <div class="col-md-12 text-center">

                <h2 class="section-title white">Explore Latest Projects</h2>

                <p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

            </div>
            <!--end col md 12 -->

            <!--begin col md 12 -->
            <div class="gallery-item-wrapper padding-top-30">

                <!--begin owl carousel -->
                <div id="owl2" class="owl-carousel owl-theme">

                    <div>
                        <img src="http://vessteros.beget.tech/resources/img/landing/showcase1.jpg" alt="showcase" class="gallery-show">
                    </div>

                    <div>
                        <img src="http://vessteros.beget.tech/resources/img/landing/showcase2.jpg" alt="showcase" class="gallery-show">
                    </div>

                    <div>
                        <img src="http://vessteros.beget.tech/resources/img/landing/showcase3.jpg" alt="showcase" class="gallery-show">
                    </div>

                    <div>
                        <img src="http://vessteros.beget.tech/resources/img/landing/showcase4.jpg" alt="showcase" class="gallery-show">
                    </div>

                    <div>
                        <img src="http://vessteros.beget.tech/resources/img/landing/showcase5.jpg" alt="showcase" class="gallery-show">
                    </div>

                    <div>
                        <img src="http://vessteros.beget.tech/resources/img/landing/showcase6.jpg" alt="showcase" class="gallery-show">
                    </div>

                </div>
                <!--end owl carousel -->

                <div class="owl-dots">
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>
            <!--end col md  12-->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end gallery section -->



<!--begin services section -->
<section class="section-white small-padding-bottom" id="features">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 text-center padding-bottom-10">

                <h2 class="section-title">Amazing Features</h2>

                <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box light-green wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="pe-7s-tools"></i>

                    <div class="feature-box-text">

                        <h4>Support 24/7</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>
            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box light-blue wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="pe-7s-users"></i>

                    <div class="feature-box-text">

                        <h4>User Friendly</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>
            </div>
            <!--end col-md-4 -->

            <!--begin col-md 4-->
            <div class="col-md-4">

                <div class="feature-box orange wow fadeIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="pe-7s-bell"></i>

                    <div class="feature-box-text">

                        <h4>Notifications</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>
            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box dark-green wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="pe-7s-chat"></i>

                    <div class="feature-box-text">

                        <h4>Chat With Friends</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>
            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box dark-blue wow fadeIn" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="pe-7s-world"></i>

                    <div class="feature-box-text">

                        <h4>Accesibility</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>
            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box light-red wow fadeIn" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="pe-7s-piggy"></i>

                    <div class="feature-box-text">

                        <h4>Cost Control</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>
            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 padding-top-40">

                <img src="http://vessteros.beget.tech/resources/img/landing/iphone-v.png" alt="home-iphone" class="extra-image width-100 wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end services section -->

<!--begin newsletter section -->
<section class="section-lyla-shape" id="newsletter-section">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12 text-center padding-top-60 padding-bottom-20">

                <h3 class="white-text">Seen enough? We are currently in the closed beta.<br>
                    Please enter your email to join the waiting list.</h3>

            </div>
            <!--end col-md-12 -->

            <!--begin col-md-12-->
            <div class="col-md-12">

                <!--begin newsletter_form_wrapper -->
                <div class="newsletter_form_wrapper">

                    <!--begin newsletter_form_box -->
                    <div class="newsletter_form_box">

                        <!--begin success_box -->
                        <p class="newsletter_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                        <!--end success_box -->

                        <!--begin newsletter-form -->
                        <form id="newsletter-form" class="newsletter-form" action="php/newsletter.php" method="post">

                            <input id="email_newsletter" type="email" name="nf_email" placeholder="Enter Your Email Address">

                            <input type="submit" value="GET STARTED!" id="submit-button-newsletter">

                        </form>
                        <!--end newsletter-form -->

                    </div>
                    <!--end newsletter_form_box -->

                </div>
                <!--end newsletter_form_wrapper -->

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end newsletter section -->



<!--begin section-white -->
<section class="section-white small-padding-top">

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col-md-6-->
            <div class="col-md-6 wow slideInLeft" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">

                <img src="http://vessteros.beget.tech/resources/img/landing/benefits.png" class="width-100" alt="pic">

            </div>
            <!--end col-sm-6-->

            <!--begin col-md-6-->
            <div class="col-md-6 padding-top-20">

                <h3>Get ready to discover all the benefits and secrets of a perfect launch</h3>

                <p>Velis demo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorem fugit, sed quia magni dolores eos qui ratione sequi nesciunt neque et poris ratione sequi enim quia tempor magni.</p>

                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorem fugit, sed quia magni dolores eos qui ratione sequi.</p>

                <ul class="benefits">
                    <li><i class="fa fa-check"></i> Quia magni netsum eos qui ratione sequi.</li>
                    <li><i class="fa fa-check"></i> Venis ratione sequi enim quia tempor magni.</li>
                    <li><i class="fa fa-check"></i> Enim ipsam voluptatem quia voluptas.</li>
                    <li><i class="fa fa-check"></i> Ratione nes sequi nesciunt neque.</li>
                </ul>

                <a href="#download-app" class="btn-lyla scrool">Download App</a>

            </div>
            <!--end col-md-6-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-white-->

<!--begin testimonials section -->
<section class="section-grey" id="otz">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-10 -->
            <div class="col-md-8 col-md-offset-2">

                <!--begin owl carousel -->
                <div id="owl1" class="owl-carousel owl-theme">

                    <!--begin testim-inner -->
                    <div class="testim-inner">

                        <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                        <p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

                        <h6>Jennifer Smith<span class="job-text"> - Web Designer</span></h6>

                    </div>
                    <!--end testim-inner -->

                    <!--begin testim-inner -->
                    <div class="testim-inner">

                        <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                        <p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

                        <h6>John Doe<span class="job-text"> -  General Manager</span></h6>

                    </div>
                    <!--end testim-inner -->

                    <!--begin testim-inner -->
                    <div class="testim-inner">

                        <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">

                        <p>The attention of a traveller, should be particularly turned, in the first place, to the various works of Nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>

                        <h6>Alexandra Smith<span class="job-text"> - App Magazine Editor</span></h6>

                    </div>
                    <!--end testim-inner -->

                </div>
                <!--end owl carousel -->

                <!--begin owl carousel -->
                <div class="owl-dots">

                    <div class="owl-dot active"><span></span></div>

                    <div class="owl-dot"><span></span></div>

                    <div class="owl-dot"><span></span></div>

                </div>
                <!--end owl carousel -->

            </div>
            <!--end-col-md-10 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end testimonials section -->

<!--begin download-app-wrapper -->
<section class="download-app-wrapper" id="download-app">

    <div class="download-app-wrapper-overlay"></div>

    <div class="shape-grey-image-top"></div>

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-5-->
            <div class="col-md-6 padding-top-100">

                <h2 class="title-download-app-padding white-text">Get The App Now!</h2>

                <p class="white-text">Curabitur quam etsum lacus etsumis nulatis etsumised vitae nisledita variustimuslis loremis sedit  feugiat ligula aliquam etsimus dictimelis etis dinetsumitis ipsum netsum etim quias nets ligula.</p>

                <a href="#" class="btn-download-app"><span class="fa fa-apple"></span><p><small>Download On</small><br>App Store</p></a>

                <a href="#" class="btn-download-app"><span class="fa fa-android"></span><p><small>Get It On</small><br>Google Play</p></a>

                <a href="#" class="btn-download-app last"><span class="fa fa-windows"></span><p><small>Get It From</small><br>Windows</p></a>

            </div>
            <!--end col-md-5-->

            <!--begin col-md-7-->
            <div class="col-md-6 wow slideInRight" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: slideInRight;">

                <img src="http://vessteros.beget.tech/resources/img/landing/download-app-iphone.png" alt="picture" class="download-app-iphone width-100">

            </div>
            <!--end col-md-7-->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end download-app-wrapper -->



<!--begin blog -->
<section class="section-grey" id="blog">

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-10 col-md-offset-1 text-center">
                <h2 class="section-title">Our Latest News</h2>

                <div class="separator_wrapper">
                    <i class="icon icon-star-two blue"></i>
                </div>

                <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
            </div>
            <!--end col-md-12-->

        </div>
        <!--end row-->

        <!--begin row-->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12">

                <div id="myCarousel" class="carousel carousel1 slide margin-top-20 margin-bottom-10" data-interval="false">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">

                            <!--begin col-sm-4 -->
                            <div class="col-sm-4">

                                <!--begin blog-item -->
                                <div class="blog-item">

                                    <!--begin popup image -->
                                    <div class="popup-wrapper">
                                        <div class="popup-gallery">
                                            <a href="#">
                                                <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end popup image -->

                                    <!--begin blog-item_inner -->
                                    <div class="blog-item-inner">

                                        <h3 class="blog-title"><a href="#">Affinity Designer Quick Start</a></h3>

                                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> Paul Smith</a>

                                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> WordPress</a>

                                        <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                    </div>
                                    <!--end blog-item-inner -->

                                </div>
                                <!--end blog-item -->

                            </div>
                            <!--end col-sm-4-->

                            <!--begin col-sm-4 -->
                            <div class="col-sm-4">

                                <!--begin blog-item -->
                                <div class="blog-item">

                                    <!--begin popup image -->
                                    <div class="popup-wrapper">
                                        <div class="popup-gallery">
                                            <a href="#">
                                                <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end popup image -->

                                    <!--begin blog-item_inner -->
                                    <div class="blog-item-inner">

                                        <h3 class="blog-title"><a href="#">Solid HTML Form Structure</a></h3>

                                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Marketing</a>

                                        <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                    </div>
                                    <!--end blog-item-inner -->

                                </div>
                                <!--end blog-item -->

                            </div>
                            <!--end col-sm-4-->

                            <!--begin col-sm-4 -->
                            <div class="col-sm-4">

                                <!--begin blog-item -->
                                <div class="blog-item">

                                    <!--begin popup image -->
                                    <div class="popup-wrapper">
                                        <div class="popup-gallery">
                                            <a href="#">
                                                <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end popup image -->

                                    <!--begin blog-item_inner -->
                                    <div class="blog-item-inner">

                                        <h3 class="blog-title"><a href="#">New WordPress Theme</a></h3>

                                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Design</a>

                                        <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                    </div>
                                    <!--end blog-item-inner -->

                                </div>
                                <!--end blog-item -->

                            </div>
                            <!--end col-sm-4-->

                        </div>

                        <div class="item text-center">

                            <!--begin col-sm-4 -->
                            <div class="col-sm-4">

                                <!--begin blog-item -->
                                <div class="blog-item">

                                    <!--begin popup image -->
                                    <div class="popup-wrapper">
                                        <div class="popup-gallery">
                                            <a href="#">
                                                <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end popup image -->

                                    <!--begin blog-item_inner -->
                                    <div class="blog-item-inner">

                                        <h3 class="blog-title"><a href="#">Affinity Designer Quick Start</a></h3>

                                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> Paul Smith</a>

                                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> WordPress</a>

                                        <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                    </div>
                                    <!--end blog-item-inner -->

                                </div>
                                <!--end blog-item -->

                            </div>
                            <!--end col-sm-4-->

                            <!--begin col-sm-4 -->
                            <div class="col-sm-4">

                                <!--begin blog-item -->
                                <div class="blog-item">

                                    <!--begin popup image -->
                                    <div class="popup-wrapper">
                                        <div class="popup-gallery">
                                            <a href="#">
                                                <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end popup image -->

                                    <!--begin blog-item_inner -->
                                    <div class="blog-item-inner">

                                        <h3 class="blog-title"><a href="#">Solid HTML Form Structure</a></h3>

                                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Marketing</a>

                                        <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                    </div>
                                    <!--end blog-item-inner -->

                                </div>
                                <!--end blog-item -->

                            </div>
                            <!--end col-sm-4-->

                            <!--begin col-sm-4 -->
                            <div class="col-sm-4">

                                <!--begin blog-item -->
                                <div class="blog-item">

                                    <!--begin popup image -->
                                    <div class="popup-wrapper">
                                        <div class="popup-gallery">
                                            <a href="#">
                                                <img src="http://placehold.it/350x240" class="width-100" alt="pic">
                                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end popup image -->

                                    <!--begin blog-item_inner -->
                                    <div class="blog-item-inner">

                                        <h3 class="blog-title"><a href="#">New WordPress Theme</a></h3>

                                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>

                                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Design</a>

                                        <p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>

                                    </div>
                                    <!--end blog-item-inner -->

                                </div>
                                <!--end blog-item -->

                            </div>
                            <!--end col-sm-4-->

                        </div>

                    </div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>

                </div>

            </div>
            <!--end col-md-12-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end blog -->

<!--begin contact -->
<section class="section-white no-padding-bottom" id="contact">

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col-md-6 -->
            <div class="col-md-12">

                <h4>Get in touch</h4>

                <!--begin success message -->
                <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                <!--end success message -->

                <!--begin contact form -->
                <form id="contact-form" class="contact" action="php/contact.php" method="post">

                    <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">

                    <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">

                    <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">

                    <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>

                    <input value="Send Message" id="submit-button" class="contact-submit" type="submit">

                </form>
                <!--end contact form -->

            </div>
            <!--end col-md-6 -->

            <!--begin col-md-6 -->

            <!--end col-md-6 -->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end contact-->

<!--begin footer -->
<div class="footer">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12 text-center">



                <!--begin footer_social -->
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
                <!--end footer_social -->

            </div>
            <!--end col-md-6 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</div>
<!--end footer -->
<div id="app">
    @yield('content')
</div>

<!-- Load JS here for greater good =============================-->
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery-1.11.3.min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/bootstrap.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/owl.carousel.min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery.scrollTo-min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery.magnific-popup.min.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/jquery.nav.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/wow.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/plugins.js"></script>
<script src="http://vessteros.beget.tech/resources/assets/js/newLanding/custom.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>