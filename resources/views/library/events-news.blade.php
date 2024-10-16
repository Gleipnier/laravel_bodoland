@extends('layouts.bookapp')

@extends('layouts.bookcss')

@section('title', 'Events & News')

<style>
    .card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        margin-top: 20px;
        padding: 20px;
    }

    .event,
    .news-item {
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
    }

    .event:last-child,
    .news-item:last-child {
        border-bottom: none;
    }

    .events-container {
        display: flex;
        justify-content: space-between;
        /* padding: 20px; */
        background-color: #faf4e6;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .left-box {
        width: 20%;
        padding: 20px;
        align-content: center;
        background-color: #242424;
    }

    .left-box h3 {
        font-size: 1.2rem;
        font-weight: bold;
        color: whitesmoke;
    }

    .right-box {
        width: 80%;
        padding: 20px;
        background-color: #fff5e6;
        border-left: 5px solid #e8491d;
    }

    .event-item {
        padding: 20px;
        margin-bottom: 20px;
        border-bottom: 2px solid #ddd;
        position: relative;
    }

    .event-header {
        font-size: 1.2rem;
        font-weight: bold;

        align-items: center;
        /* Align text and icon vertically */
        cursor: pointer;
    }

    .event-header:hover {
        color: blue;
    }

    .event-header svg {
        width: 20px;
        height: 20px;
        transition: transform 0.3s ease-in-out;
        /* Smooth rotation */
    }

    .event-details {
        margin-top: 10px;
        padding: 10px;
        border-left: 2px solid #e8491d;
    }

    .buy-tickets {
        background-color: #1d72e8;
        color: white;
        font-size: 1rem;
        padding: 10px 30px;
        border: none;
        cursor: pointer;
        position: absolute;
        right: 0;
        bottom: 20px;
        border-radius: 5px;
    }

    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
    }

    .view-tickets {
        background-color: #1d72e8;
        color: white;
        font-size: 1rem;
        padding: 10px 30px;
        border: none;
        align-self: center;
        cursor: pointer;
        bottom: 20px;
        border-radius: 5px;
    }

    .buy-tickets:hover {
        background-color: #1a5fb4;
    }
</style>

@section('content')

    <div class="container-membership" style="padding-top: 70px">
        <div class="content">

            <h1>Event & News</h1>

            <div class="card">
                <div class="card-header">
                    <h2>Upcoming Events</h2>
                </div>
                <div class="card-body">
                    @foreach ($upcomingEvents as $event)
                        <div class="news-item">
                            <h3>{{ $event->title }}</h3>
                            <p>{{ $event->description }}</p>
                            <p>Start Date: {{ $event->start_time->format('F j, Y') }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>News & Updates</h2>
                </div>
                <div class="card-body">
                    @foreach ($news as $newsItem)
                        <div class="news-item">
                            <h3>{{ $newsItem->title }}</h3>
                            <p>{{ $newsItem->content }}</p>
                            <p>Published: {{ $newsItem->publish_date->format('F j, Y') }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Past Events</h2>
                </div>
                <div class="card-body">
                    @foreach ($pastEvents as $event)
                        <div class="event">
                            <h3>{{ $event->title }}</h3>
                            <p>{{ $event->description }}</p>
                            <p>Date: {{ $event->start_time->format('F j, Y') }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    <script>
        function toggleEventDetails(index) {
            var details = document.getElementById('event-details-' + index);
            var icon = document.getElementById('dropdown-icon-' + index);

            if (details.style.display === "none") {
                details.style.display = "block";
                icon.style.transform = "rotate(180deg)"; // Rotate icon when expanded
            } else {
                details.style.display = "none";
                icon.style.transform = "rotate(0deg)"; // Reset rotation when collapsed
            }
        }
    </script>
@endsection
