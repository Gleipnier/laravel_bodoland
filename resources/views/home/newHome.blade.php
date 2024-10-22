@extends('layouts.bookapp')

@section('title', 'BTR Library')

@section('carousel')

    <div id="carouselExample" class="carousel slide menu-toggle-reverse" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/banner.jpeg') }}" class="d-block w-100" style="height:700px" alt="Image 1">
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

    <div id="carouselExample" class="carousel slide menu-toggle" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/banner.jpeg') }}" class="d-block w-100" style="height:200px"
                            alt="Image 1">
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/banner2.jpeg') }}" class="d-block w-100" style="height:200px"
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
                            <h3 class="fz22 fw700 color-blue mb-4 wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">The Department of Library Services at
                                BTC</h3>

                            <p class="fw500 color-333333 mb-0 wow fadeInUp"
                                style="text-align: justify; visibility: visible; animation-name: fadeInUp;">

                                The Department of Library Services at BTC, Kokrajhar, places a strong emphasis on building a
                                comprehensive collection of books, periodicals, journals, and employment news to meet the
                                needs of students, research scholars, academics, and the general public in BTAD. These
                                resources serve as valuable references for the people of the region.

                            </p>

                            <br />

                            <p class="fw500 color-333333 mb-0 wow fadeInUp"
                                style="text-align: justify; visibility: visible; animation-name: fadeInUp;">
                                To promote and enhance reading habits among the public, the department regularly organizes
                                awareness programs such as quizzes, debates, essay writing, and extempore speech
                                competitions. Additionally, the department has initiated efforts to support and improve the
                                Registered Club cum Libraries within BTAD, contributing to the overall development of
                                libraries and access to knowledge in the area.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('content')

    <section class="common-section study-iitk pb-5 about-iitkgp">
        <div class="row ">
            <div class="col-lg-12 ps-xl-12  mt-5 mt-lg-0 pt-5 pt-xl-0">
                <h2 class="main-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    NOTIFICATION</h2>

                <div class="bx-wrapper" style="max-width: 100%;">
                    <div class="bx-viewport" aria-live="polite"
                        style="width: 100%; overflow: hidden; position: relative; height: 189px;">
                        <div class="upcoming-events wow fadeInUp"
                            style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, -798.055px, 0px); visibility: visible; animation-name: fadeInUp;">

                            @foreach ($notifications as $notification)
                                <div class="item bg-white border p-4 bx-clone"
                                    style="float: none; list-style: none; position: relative; width: 782px; margin-bottom: 15px;"
                                    aria-hidden="true">
                                    <!-- Display event start and end date dynamically -->
                                    <span class="fz18 fw-bold d-block mb-3 orange-color">
                                        {{ \Carbon\Carbon::parse($notification->date)->format('M d, Y h:i A') }}
                                    </span>

                                    <!-- Display event title -->
                                    <p class="mb-1 fw-bold">{{ $notification->title }}</p>

                                    <!-- Display event description -->
                                    <p class="mb-3">{{ $notification->description }}</p>

                                    <!-- Read More link -->
                                    <p class="mb-0 d-flex justify-content-between">
                                        <span></span> <!-- Empty span to align with 'Read More' link -->
                                        <span class="text-right">
                                            <a href="{{ url('/notifications') }}"><b>Read More</b></a>
                                        </span>
                                    </p>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>

                <div class="btn-group mt-5 pt-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <a href="{{ url('/notifications') }}" class="common-btn">VIEW ALL NOTIFICATION</a>
                </div>

            </div>


        </div>
    </section>

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

                    <div class="btn-group mt-5 pt-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <a href="{{ url('/gallery') }}" class="common-btn">VIEW ALL GALLERY</a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- <section class="common-section research-highlights">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-md-12 mt-5 mt-md-0 pt-5 pt-md-0 ps-md-5">
                    <div class="d-flex align-items-center justify-content-between mb-5 pb-xl-3 wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <h2 class="main-heading mb-0">WHO'S WHO</h2>
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
    </section> --}}


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
                                                <a href="{{ url('/recentNews') }}"><b>Read More</b></a>
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

                    <div class="btn-group mt-5 pt-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <a href="{{ url('/recentNews') }}" class="common-btn">VIEW ALL RECENT NEWS</a>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <script>
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
    </script>

@endsection
