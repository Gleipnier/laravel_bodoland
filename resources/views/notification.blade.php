@extends('layouts.bookapp')

@section('title', 'Upcoming Events')

@section('content')


    <section class="sep_blk_t bread-crumb">

        <div class="container">

            <h1 class="fz42 text-center fw800">Notifications</h1>

        </div>

    </section>


    <section class="evnt_pg sec01 sep_blk">

        <div class="container">

            <div class="row evntrow iitgx-4" id="dataList">


                @foreach ($notifications as $notification)
                    <div class="col-md-6">
                        <div class="bx">
                            <div class="row">
                                <div class="col-lg-4"><img style="height:200px;"
                                        src="{{ asset('/images/event-default.jpg') }}" class="round04" alt="AI-ML and IoT">
                                </div>
                                <div class="col-lg-8">
                                    <div class="con_bk">
                                        <div class="dt mb-3"><i class="fas fa-calendar-alt"></i>
                                            {{ \Carbon\Carbon::parse($notification->date)->format('M d, Y h:i A') }}
                                        </div>
                                        <p class="hndg">{{ $notification->title }} </p>
                                        <p class="">{{ $notification->description }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>


@endsection
