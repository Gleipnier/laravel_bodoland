<html lang="en">

<head>
    <title>BTR - Library</title>
    <meta charset="UTF-8">
    <meta name="description" content="IIT KGP">
    <meta name="keywords" content="">
    <meta name="author" content="IIT KGP">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="./assets/img/favicon.png" type="image/x-icon" rel="icon">
    <link href="./assets/img/favicon.png" type="image/x-icon" rel="shortcut icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    {{-- <link rel="stylesheet" href="./assets/css/owl.carousel.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="./assets/pages/css/animate.min.css">
    <link rel="stylesheet" href="./assets/pages/css/style.css">
    <link rel="stylesheet" href="./assets/pages/css/media.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://connect.facebook.net/en_US/sdk.js?hash=23ea4933a1456597ff13d89997827d82" async=""
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


    <style>
        .fz22 {
            font-size: 22px;
            /* Custom font size */
        }

        .iho-slider .owl-dots {
            text-align: center;
        }

        .iho-slider button.owl-dot {
            height: 13px;
            width: 13px;
            border: 1px solid #b9b9b9 !important;
            margin: 3px;
            border-radius: 50%;
        }

        .iho-slider .owl-dot.active {
            border-color: #db5903;
            background-color: #db5903;
        }

        #button {
            display: inline-block;
            background-color: #FF9800;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s,
                opacity .5s, visibility .5s;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        #button::after {
            content: "\f077";
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            font-size: 2em;
            line-height: 50px;
            color: #fff;
        }

        #button:hover {
            cursor: pointer;
            background-color: #333;
        }

        #button:active {
            background-color: #555;
        }

        #button.show {
            opacity: 1;
            visibility: visible;
        }

        #downArrow {
            background: #fff;
            border: 0;
            border-radius: 3px;
            padding: 3px 9px;
        }



        /** CSS for Loader **/
        .loading-state {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loading-div {
            width: 85px;
            height: 85px;
            border-radius: 50%;
            /*border: 15px solid #1d1150;*/
            border: 15px solid #ddd;
            border-top-color: #db5903;
            animation: loading 1s linear infinite;
            top: 50%;
            bottom: 50%;
            right: 50%;
            left: 50%;
            position: absolute;
        }

        @keyframes loading {
            to {
                transform: rotate(360deg);
            }
        }
    </style>

    <script charset="utf-8" src="https://platform.twitter.com/js/timeline.e108540dddc96e4b707f5cf259a582d7.js"></script>

    <style type="text/css"
        data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }

        .fb_dialog_content {
            background: #fff;
            color: #373737
        }

        .fb_dialog_close_icon {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title>span {
            background: url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }

        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #043b87;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_mpn_mobile_landing_page_slide_out {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_out_from_left {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_up {
            animation-duration: 500ms;
            animation-name: fb_mpn_landing_page_slide_up;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_in {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_in;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_mpn_fade_out;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_from_left;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        @keyframes fb_mpn_landing_page_slide_out {
            0% {
                margin: 0 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                margin: 0 24px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_out_from_left {
            0% {
                left: 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                left: 12px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_up {
            0% {
                bottom: 0;
                opacity: 0
            }

            100% {
                bottom: 24px;
                opacity: 1
            }
        }

        @keyframes fb_mpn_bounce_in {
            0% {
                opacity: .5;
                top: 100%
            }

            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_mpn_fade_out {
            0% {
                bottom: 30px;
                opacity: 1
            }

            100% {
                bottom: 0;
                opacity: 0
            }
        }

        @keyframes fb_mpn_bounce_out {
            0% {
                opacity: 1;
                top: 0
            }

            100% {
                opacity: .5;
                top: 100%
            }
        }

        @keyframes fb_bounce_in_v2 {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom right
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_in_from_left {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom left
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }
        }

        @keyframes fb_bounce_out_v2 {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_out_from_left {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }
        }

        @keyframes slideInFromBottom {
            0% {
                opacity: .1;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slideInFromBottomDelay {
            0% {
                opacity: 0;
                transform: translateY(100%)
            }

            97% {
                opacity: 0;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>


<body>


    <div class="loading-state" id="loader_section" style="display:none;">
        <div class="loading-div"></div>
    </div>

    <a id="button" class=""></a>

    <header id="header" class="">
        <div class="header-top-strip  orange-bg">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center position-relative">
                    <nav id="primaryNav" class="topmenunav">
                        <ul class="primary-menu-links d-xl-flex align-items-center">
                            <li>
                                <a href="#" class="cursor"><i
                                        class="fas fa-home fz22"></i></a>
                            </li>
                            <li>
                                <a href="#" class="cursor">Government of BTR | Library Department</a>
                            </li>

                        </ul>
                    </nav>
                    <div class="lang-fontSize-social-media">
                        <ul class="d-flex align-items-center">

                            <li class="incDecFont">
                                <span class="dec">A-</span>
                                <span class="fontSize">A</span>
                                <span class="inc">A+</span>
                            </li>


                            <li class="incDecFont">
                                <button class="btn border-end px-4 py-2 text-white btn-sm">
                                    <a href="#main-content">Skip to main content</a>
                                </button>
                                <a href="{{ url('/login') }}"
                                    class="btn btn-link border-end px-4 py-2 text-white btn-sm">Sign in</a>
                                <a href="{{ url('/register') }}"
                                    class="btn btn-link border-end px-4 py-2 ms-2 text-white btn-sm">Register</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="logo-menu py-3">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center position-relative">

                    <div class="logo order-xl-1">
                        <a href="#">
                            <img src="https://byem.bodoland.gov.in/images/logo.png" style="width: 100px; height: 60px;"
                                class="img-fluid" alt="BTR">
                        </a>
                    </div>



                    <nav class="ms-auto order-xl-2 dropdown-menu mainmenunav">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="d-xl-flex  align-items-center">
                            <li><a href="{{ url('/books') }}" class="cursor">Books</a></li>
                            <li><a href="{{ url('/journals') }}" class="cursor">Journals</a></li>
                            <li><a href="{{ url('/eresources') }}" class="cursor">E-Resources</a>
                            </li>
                            <li><a href="{{ url('/research-learning') }}" class="cursor">Research &
                                    Learning</a></li>
                            <li><a href="{{ url('/events-news') }}" class="cursor">Events & News</a>
                            </li>
                            <li><a href="{{ url('/faq') }}" class="cursor">FAQ</a></li>
                            <li><a href="{{ url('/feedback') }}" class="cursor">Feedback</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/banner.jpeg') }}" class="d-block w-100" style="height:700px"
                            alt="Image 1">
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/banner2.jpeg') }}" class="d-block w-100" style="height:700px"
                            alt="Image 2">
                    </div>

                </div>
            </div>

            

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <marquee style="margin:5px; font-size:15px; scrolldelay=60" onmouseover="this.stop()" onmouseout="this.start()">
        Welcome to the BTR Library website! This is your one-stop e-library where you can easily find a wide range of
        books, journals, and e-services. Explore our digital collection and resources designed to support your learning,
        research, and reading interests. Happy exploring!
    </marquee>


    <section class="common-section about-iitkgp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="main-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        ABOUT US </h1>


                    <div class="row">
                        <div class="col-sm-3">
                            <figure class="wow fadeInLeft position-relative videoPlayImg"
                                style="visibility: visible; animation-name: fadeInLeft;"><img alt=""
                                    class="img-fluid w-100" src="images/about.png"></figure>
                        </div>

                        <div class="col-sm-8 ps-xl-4 mt-4 mt-sm-0">
                            <h2 class="fz22 fw700 color-blue mb-4 wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <b> The Department of Library Services at BTC </b>
                            </h2>

                            <p class="fw500 color-333333 mb-0 wow fadeInUp"
                                style="text-align: justify; visibility: visible; animation-name: fadeInUp;">
                                
                                The Department of Library Services at BTC, Kokrajhar, places a strong emphasis on building a comprehensive collection of books, periodicals, journals, and employment news to meet the needs of students, research scholars, academics, and the general public in BTAD. These resources serve as valuable references for the people of the region.
                            
                            </p>

                            <br />

                            <p class="fw500 color-333333 mb-0 wow fadeInUp"
                                style="text-align: justify; visibility: visible; animation-name: fadeInUp;">
                               To promote and enhance reading habits among the public, the department regularly organizes awareness programs such as quizzes, debates, essay writing, and extempore speech competitions. Additionally, the department has initiated efforts to support and improve the Registered Club cum Libraries within BTAD, contributing to the overall development of libraries and access to knowledge in the area.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

    </section>

    <section class="common-section study-iitk pb-5 about-iitkgp">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ps-xl-12  mt-5 mt-lg-0 pt-5 pt-xl-0">
                    <h2 class="main-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        UPCOMING EVENTS</h2>

                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" aria-live="polite"
                            style="width: 100%; overflow: hidden; position: relative; height: 189px;">
                            <div class="upcoming-events wow fadeInUp"
                                style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, -798.055px, 0px); visibility: visible; animation-name: fadeInUp;">

                                @foreach ($events as $event)
                                    <div class="item bg-white border p-4 bx-clone"
                                        style="float: none; list-style: none; position: relative; width: 782px; margin-bottom: 15px;"
                                        aria-hidden="true">
                                        <!-- Display event start and end date dynamically -->
                                        <span class="fz18 fw-bold d-block mb-3 orange-color">
                                            {{ \Carbon\Carbon::parse($event->start_time)->format('M d, Y h:i A') }} to
                                            {{ \Carbon\Carbon::parse($event->end_time)->format('M d, Y h:i A') }}
                                        </span>

                                        <!-- Display event title -->
                                        <p class="mb-1 fw-bold">{{ $event->title }}</p>

                                        <!-- Display event description -->
                                        <p class="mb-3">{{ $event->description }}</p>

                                        <!-- Read More link -->
                                        <p class="mb-0 d-flex justify-content-between">
                                            <span></span> <!-- Empty span to align with 'Read More' link -->
                                            <span class="text-right">
                                                <a target="_blank" href="{{ $event->location }}"><b>Read More</b></a>
                                            </span>
                                        </p>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                        <div class="bx-controls bx-has-controls-direction">
                            <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a
                                    class="bx-next" href="">Next</a></div>
                        </div>
                    </div>

                    <div class="btn-group mt-5 pt-3 wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <a href="{{ url('/upcomingEvents') }}" class="common-btn">VIEW ALL EVENTS</a>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!--research-highlights -->
    <section class="common-section research-highlights">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-md-12 mt-5 mt-md-0 pt-5 pt-md-0 ps-md-5">
                    <div class="d-flex align-items-center justify-content-between mb-5 pb-xl-3 wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <h2 class="main-heading mb-0">GALLERY</h2>

                    </div>
                    <div class="row g-5">

                        @foreach ($galleries as $gallery)
                            <div class="col-sm-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                                <figure>
                                    <div class="img-cover">
                                        <img class="img-fluid w-100 rounded-4" style="width:100%; height:200px"
                                            src="{{ $gallery->gallery_image_url }}"
                                            alt="{{ $gallery->gallery_image_title }}">
                                    </div>
                                    <figcaption class="fz22 fw-bold color-333333 mb-4 mt-5">
                                        {{ $gallery->gallery_image_title }}
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--End research-highlights -->


    <section class="common-section research-highlights">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-md-12 mt-5 mt-md-0 pt-5 pt-md-0 ps-md-5">
                    <div class="d-flex align-items-center justify-content-between mb-5 pb-xl-3 wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <h2 class="main-heading mb-0">WHO IS WHO</h2>
                        <a href="{{ url('/whoIsWho') }}" class="common-btn">VIEW ALL</a>
                    </div>
                    <div class="row g-5">

                        @foreach ($whoIsWhos as $whoIsWho)
                            <div class="col-sm-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                                <figure>
                                    <div class="img-cover">
                                        <img class="img-fluid w-100 rounded-4" style="width:100%; height:200px"
                                            src="{{ $whoIsWho->image_url }}" alt="{{ $whoIsWho->name }}">
                                    </div>
                                    <figcaption class="fz22 fw-bold color-333333 mb-4 mt-5">
                                        {{ $whoIsWho->name }}
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="common-section study-iitk pb-5 about-iitkgp">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ps-xl-12  mt-5 mt-lg-0 pt-5 pt-xl-0">
                    <h2 class="main-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        RECENT NEWS</h2>

                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" aria-live="polite"
                            style="width: 100%; overflow: hidden; position: relative; height: 189px;">
                            <div class="upcoming-events wow fadeInUp"
                                style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, -798.055px, 0px); visibility: visible; animation-name: fadeInUp;">


                                @foreach ($news as $news_)
                                    <div class="item bg-white border p-4 bx-clone"
                                        style="float: none; list-style: none; position: relative; width: 782px; margin-bottom: 15px;"
                                        aria-hidden="true">
                                        <!-- Display event start and end date dynamically -->
                                        <span class="fz18 fw-bold d-block mb-3 orange-color">
                                            {{ \Carbon\Carbon::parse($news_->publish_date)->format('M d, Y') }}
                                        </span>

                                        <!-- Display event title -->
                                        <p class="mb-1 fw-bold">{{ $news_->title }}</p>

                                        <!-- Display event description -->
                                        <p class="mb-3">{{ $news_->content }}</p>

                                        <!-- Read More link -->
                                        <p class="mb-0 d-flex justify-content-between">
                                            <span></span> <!-- Empty span to align with 'Read More' link -->
                                            <span class="text-right">
                                                <a target="_blank" href="{{ $news_->id }}"><b>Read More</b></a>
                                            </span>
                                        </p>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="bx-controls bx-has-controls-direction">
                            <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a
                                    class="bx-next" href="">Next</a></div>
                        </div>
                    </div>

                    <div class="btn-group mt-5 pt-3 wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <a href="{{ url('/recentNews') }}" class="common-btn">VIEW ALL RECENT NEWS</a>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <script src="https://www.iitkgp.ac.in/assets/pages/js/jquery.waypoints.min.js"></script>
    <script src="https://www.iitkgp.ac.in/assets/pages/js/jquery.counterup.js"></script>

    <script>
        //   Counter
        if ($('.counter').length > 0) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        }

        $('.videoPlayImg').click(function() {
            $(this).addClass('active')

            $('#about-iitk .modal-body iframe').attr('src', 'https://www.youtube.com/embed/2mS9_2xVp-E')
            $('#about-iitk').modal('show');
        });

        $('.removeVidePopup').click(function() {
            $('.videoPlayImg').removeClass('active')
            $('#about-iitk .modal-body iframe').attr('src', '')
        });
    </script>


    <!--Footer -->
    <footer class="footer">
        <div class="footer-main pb-0">
            <div class="container">

                <div class="row gx-lg-5 footer-links">
                    <div class="col-lg-3 col-sm-12 pb-5 pb-sm-0">
                        <figure>
                            <img src="https://byem.bodoland.gov.in/images/logo.png" alt=""
                                class="img-fluid wow zoomIn"
                                style="visibility: hidden; animation-name: none; height:100px">
                        </figure>
                        <div class="phnum">
                            <p class="wow fadeInUp  mt-5" style="visibility: hidden; animation-name: none;">BTR
                                Library Department</p>
                        </div>

                    </div>



                    <div class="col-lg-9 col-sm-12 pb-5 pb-sm-0">
                        <div class="row htmlFQuickLinkmenu">
                            <div class="col-lg-4 col-6 px-xl-5">
                                <h3>Useful Links</h3>
                                <ul class="list-unstyled">

                                    <li><a href="https://bodoland.gov.in/"><i class="las la-angle-right"></i>Govt. of
                                            Bodoland</a></li>
                                    <li><a href="/"><i class="las la-angle-right"></i>Grievance Redressal Portal
                                        </a></li>
                                    <li><a href="/"><i class="las la-angle-right"></i>General Information</a>
                                    </li>

                                </ul>
                            </div>



                            <div class="col-lg-4 col-6 px-xl-5">

                                <h3>Policies</h3>
                                <ul class="list-unstyled">
                                    <li><a href="/"><i class="las la-angle-right"></i>Copyright Policy</a></li>
                                    <li><a href="/"><i class="las la-angle-right"></i>Hyperlinking Policy</a>
                                    </li>
                                    <li><a href="/"><i class="las la-angle-right"></i>Privacy Policy </a></li>
                                </ul>


                            </div>



                            <div class="col-lg-4 col-12 px-xl-5 mt-4">


                                <div class="online-voter-service p-4 wow zoomIn"
                                    style="visibility: hidden; animation-name: none;">
                                    <div class="f-newsletter list-unstyled">
                                        <h5>Contact Us</h5>
                                        <p>Office of the Director of Education BTC, Kokrajhar Station Road <br><i
                                                class="las la-map-marker"></i> Kokrajhar, BTR, Assam - 783370
                                            <br><i class="las la-envelope"></i> education.btr@gmail.com
                                        </p>


                                    </div>
                                    <br>

                                </div>



                            </div>
                        </div>
                    </div>


                    <div class="d-lg-flex footer-nav justify-content-between align-items-center">
                        <nav>
                            <p>
                                Copyright © 2024 | Designed & Developed With by <a href="/" target="_blank"
                                    rel="noopener noreferrer">Department of Library,
                                    BTR</a></p>

                        </nav>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start mt-4 mt-lg-0 wow fadeInLeft"
                            style="visibility: hidden; animation-name: none;"></div>

                        <div class="col-lg-6 order-1 order-lg-2 htmlFMoreInfomenu"></div>
                    </div>
                </div>
            </div>

    </footer>
    <input type="hidden" id="home_url" name="home_url" value="https://www.iitkgp.ac.in/">
    <!--end Footer -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha256-WgfGn5Bh6xLjmgMTWKT1Z/MKACrWGCY5rIT9G9ovbmU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha256-XDbijJp72GS2c+Ij234ZNJIyJ1Nv+9+HH1i28JuayMk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"
        integrity="sha256-eBPyH/yKtanEgIozyunmI0tKs7FCRaiQC91ih5ZCB3w=" crossorigin="anonymous"></script>


    <script src="https://www.iitkgp.ac.in/assets/pages/js/wow.min.js"></script>
    <script src="https://www.iitkgp.ac.in/assets/pages/js/jquery.bxslider.js"></script>
    <script src="https://www.iitkgp.ac.in/assets/pages/js/main.js"></script>
    <script src="https://www.iitkgp.ac.in/assets/pages/js/jquery.waypoints.min.js"></script>
    <script src="https://www.iitkgp.ac.in/assets/pages/js/jquery.counterup.js"></script>
    <script src="https://www.iitkgp.ac.in/assets/pages/js/marquee.js"></script>





    <script>
        var textWrapper = document.querySelector('.ml9 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml9 .letter',
                scale: [0, .9],
                duration: 1500,
                elasticity: 600,
                delay: (el, i) => 45 * (i + 1)
            }).add({
                targets: '.ml9',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });

        $('.searchbar-div .form-control').focus(function() {
            $('.movingLetters').hide()
        })
        $('.searchbar-div .form-control').blur(function() {
            if ($(this).val() != '') {
                $('.movingLetters').hide()
            } else {
                $('.movingLetters').show()
            }
        })
    </script>
    <script>
        $(document).on("change", '#change_language', function() {
            var language = $('#change_language').val();
            //var language = 'en';
            //alert('Hiii'+language);return false;
            $.ajax({
                url: 'https://www.iitkgp.ac.in/set_language',
                type: 'post',
                //dataType:'json',
                data: {
                    language: language
                },
                success: function(res) {
                    location.reload();
                }
            });
        });
        $('body').on('click', '.divheadingOne', function(e) {
            //$('.accordion-collapse-box').find('.accordion-collapse-level-box').stop().slideUp();
            //$(this).closest('.accordion-collapse-box').find('.accordion-collapse-level-box').stop().slideToggle();
            //$(".divheadingOne").removeClass("openbox");
            //$(this).addClass('openbox');
            $(".openbox").not(this).removeClass("openbox").next().slideUp(300);
            $(this).toggleClass("openbox").next().slideToggle(300);
        });

        $('#search_button').submit(function(e) {
            $("body").addClass("loadercls");
            e.preventDefault();

            var search_text_box = $("#search_text_box").val();

            //alert('Search Key: ' + search_text_box);return false;
            //alert('https://www.iitkgp.ac.in/search/getSearchRes');return false;

            if (search_text_box != '') {
                $.ajax({
                    url: 'https://www.iitkgp.ac.in/search/getSearchRes',
                    type: 'POST',
                    data: {
                        'search_text_box': search_text_box
                    },
                    error: function() {
                        alert('Something is wrong');
                    },
                    success: function(data) {
                        $("body").removeClass("loadercls");
                        //alert(data);return false;
                        $(".searchbar-div").hide();
                        window.location.href = 'https://www.iitkgp.ac.in/search-result/' + data;


                    }
                });
            } else {
                $("#error_search").text('Please input text!');
                return false;
            }
        });

        $(document).on("click", '.searchIITKGP', function() {
            $('.searchbar-div').addClass('show');
        });
        $(document).mouseup(function(e) {
            if ($(e.target).closest(".searchbar-div").length ===
                0) {
                $(".searchbar-div").removeClass('show');
            }
        });




        $('.home-banner-slider').owlCarousel({
            items: 1,
            margin: 0,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
            // animateOut: 'fadeIn',
            // animateOut: 'fadeOut',
            dots: false,
            nav: true,
            navText: [
                '<i class="fal fa-angle-left"></i>',
                '<i class="fal fa-angle-right"></i>'
            ],
        });
        $('.recent-achievment-slider').owlCarousel({
            items: 1,
            margin: 0,
            smartSpeed: 450,
            autoplay: false,
            loop: true,
            // animateOut: 'fadeIn',
            // animateOut: 'fadeOut',
            dots: false,
            nav: false,
        });

        $('.owl-carousel').owlCarousel({
            items: 1,
            margin: 0,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            navText: [
                '<i class="fal fa-angle-left"></i>',
                '<i class="fal fa-angle-right"></i>'
            ],
        });

        $('.phd-result-annoucment-slider').owlCarousel({
            items: 1,
            margin: 0,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            navText: [
                '<i class="fal fa-angle-left"></i>',
                '<i class="fal fa-angle-right"></i>'
            ],
        });


        if ($('.upcoming-events').length > 0) {
            $('.upcoming-events').bxSlider({
                mode: 'vertical',
                speed: 500,
                slideMargin: 15,
                infiniteLoop: true,
                pager: false,
                controls: true,
                // slideWidth: 125,
                minSlides: 2,
                auto: true,
                maxSlides: 2,
                moveSlides: 1,
                adaptiveHeight: false,
            });
        }


        // JS For Back to top button
        var btn = $('#button');
        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });

        // JS For Top to bottom
        function tobottom() {
            $("html,body").animate({
                    scrollTop: $("html").height() - $(window).height()
                },
                1000,
                "easeInOutQuad"
            );
        }

        function openYearSliderInModal(inst_honor_id, year) {
            $('#inst_honor_silder_content').html('');
            $('.iho-slider').owlCarousel('destroy');

            $.ajax({
                url: 'https://www.iitkgp.ac.in/openYearSliderInModal',
                type: 'POST',
                data: {
                    'inst_honor_id': inst_honor_id,
                    'year': year
                },
                dataType: 'json',
                success: function(data) {
                    $('#inst_honor_title_modal').html(data.title_year);
                    $('#inst_honor_silder_content').html(data.html);
                    $('#openYearSliderModal').modal('show');

                    $('.iho-slider').owlCarousel({
                        items: 3,
                        margin: 0,
                        smartSpeed: 450,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true,
                        loop: false,
                        dots: true,
                        nav: false,
                        navText: [
                            '<i class="fal fa-angle-left"></i>',
                            '<i class="fal fa-angle-right"></i>'
                        ],
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 2
                            },
                            1000: {
                                items: 3
                            },
                            1200: {
                                items: 3
                            }
                        }
                    });

                }
            });
        }
    </script>

</body>

</html>
