<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library Catalogue')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            /* margin: 0; */
            padding: 0;
            background-color: #ffffff;
        }


        /* navbar section start */
        .navbar-local {
            background-color: #ffffff;
            color: black;
            width: 100%;
            z-index: 1000;
            /* padding-bottom: 22px; */
            /* position: fixed; */
        }

        .navbar-container-local {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            padding: 10px 20px !important;
            /* margin-bottom: 52px; */
        }

        nav ul li a:hover {
            color: #db5903;
        }

        .logo a {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: #e8491d;
            font-size: 1.5rem;
            cursor: pointer;
            display: none;
        }
        
        .menu-toggle-reverse {
            background: none;
            border: none;
            color: #db5903;
            font-size: 1.5rem;
            cursor: pointer;
            display: block;
        }


        .nav-list-local {
            list-style-type: none !important;
            padding: 0 !important;
            margin: 0 !important;
            display: flex !important;
        }

        .nav-list-local .current a {
            color: #e8491d !important;
            font-weight: bold !important;
        }

        .nav-list-local li a {
            color: rgb(66, 66, 133) !important;
            text-decoration: none !important;
            padding: 10px 15px !important;
            display: block !important;
            font-size: 1.8rem;
        }

        .nav-list-local li a:hover {
            color: #e8491d !important;
            text-decoration: none !important;
            padding: 9px 14px !important;
            display: block !important;
            border-color: #e8491d;
            border: 1px solid;
            /* Initially transparent border */
        }


        @media (max-width: 1330px) {
            .menu-toggle {
                display: block;
            }

            .menu-toggle-reverse {
                display: none;
            }
            
            .nav-list-local {
                position: fixed;
                top: 0;
                right: -250px;
                width: 250px;
                height: 100vh;
                background-color: #ffffff;
                flex-direction: column;
                transition: right 0.3s ease-in-out;
            }

            .nav-list-local.active {
                right: 0;
            }

            .nav-list-local li {
                border-bottom: 1px solid #444;
            }

            .nav-list-local li:last-child {
                border-bottom: none;
            }
        }


        /* navbar section end */

        .copyright_section {
            margin-top: 222px;
            width: 100%;
            float: left;
            background-color: #122c2d;
            height: auto;
        }

        .copyright_text {
            width: 100%;
            float: left;
            color: #ffffff;
            text-align: center;
            font-size: 1rem;
            margin-left: 0px;
            padding-top: 22px;
        }

        .copyright_text a {
            color: #ffffff;
        }

        .copyright_text a:hover {
            color: #e27141;
        }

        .social_icon {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        .social_icon ul {
            margin: 0px;
            padding: 0px;
            display: inline-block;
            text-align: center;
        }

        .social_icon li {
            float: left;
            padding: 30px 5px;
        }
    </style>



    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="./assets/pages/css/animate.min.css">
    <link rel="stylesheet" href="./assets/pages/css/style.css">
    <link rel="stylesheet" href="./assets/pages/css/media.css">


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script src="./assets/pages/js/wow.min.js"></script>
    <script src="./assets/pages/js/jquery.bxslider.js"></script>
    <script src="./assets/pages/js/main.js"></script>
    <script src="./assets/pages/js/jquery.waypoints.min.js"></script>
    <script src="./assets/pages/js/jquery.counterup.js"></script>
    <script src="./assets/pages/js/marquee.js"></script>


</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    @yield('carousel')

    <div class="container">
        @yield('content')
    </div>


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
                                    <li><a href="{{ route('policy') }}"><i class="las la-angle-right"></i>Copyright Policy</a></li>
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
                                        <p>Office of the Director of Library BTC, Kokrajhar Station Road <br><i
                                                class="las la-map-marker"></i> Kokrajhar, BTR, Assam - 783370
                                            <br><i class="las la-envelope"></i> library.btr@gmail.com
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
        </div>
    </footer>


</body>
<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var navList = document.querySelector('.nav-list-local');
        navList.classList.toggle('active');
    });
</script>

</html>
