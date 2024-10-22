@extends('layouts.bookapp')

@section('title', 'Who Is Who')

@section('content')

    <section class="sep_blk_t bread-crumb">
        <div class="container">
            <h1 class="fz42 text-center fw800">Who's Who</h1>
        </div>
    </section>

    <div class="container pb-0">
        <section class="aboutMenu-newLayout py-5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="container">
                <ul class="g-4 row">

                    @foreach ($whoIsWhos as $whoIsWho)
                        <div class="col-md-6">
                            <div class="bxcon02 director my-5 mt-0">
                                <div class="director-info align-items-center green-bg d-md-flex position-relative">
                                    <figure class="img_hlder01 me-5">
                                        <img alt="" class="round04" src="{{ $whoIsWho->image_url }}">
                                    </figure>
                                    <div>
                                        <h3 class="fz24 fw700 mb-4"><a href="#">{{ $whoIsWho->name }}</a>
                                            <span class="d-block fz16 fw400">
                                                <i class="my-3 d-block">{{ $whoIsWho->designation }} </i>
                                            </span>
                                        </h3>
                                        <p class="tx01">{{ $whoIsWho->phone }}</p>
                                        <p class="tx01">{{ $whoIsWho->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </ul>
            </div>
        </section>

    </div>

@endsection
