@extends('layouts.bookapp')

@extends('layouts.bookcss')

@section('title', 'Gallery')

@section('content')

    <section class="sep_blk_t bread-crumb mt-10">
        <div class="container">
            <h1 class="fz42 text-center fw800">Gallery </h1>
        </div>
    </section>

    <section id="main_inner" class="about_pg sec01 sep_blk">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-md-12 mt-5 mt-md-0 pt-5 pt-md-0 ps-md-5">

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

@endsection
