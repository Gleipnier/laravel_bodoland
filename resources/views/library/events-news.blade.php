@extends('layouts.bookapp')

@section('title', 'Events & News')
<style>

.card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    margin-top: 20px;
    padding: 20px;
}
.event, .news-item {
    margin-bottom: 15px;
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
}
.event:last-child, .news-item:last-child {
    border-bottom: none;
}
.events-container {
    display: flex;
    justify-content: space-between;
    /* padding: 20px; */
    background-color: #faf4e6;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
    
    align-items: center; /* Align text and icon vertically */
    cursor: pointer;
}
.event-header:hover {
    color: blue;
}

.event-header svg {
    width: 20px;
    height: 20px;
    transition: transform 0.3s ease-in-out; /* Smooth rotation */
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
@foreach($upcomingEvents as $event)
<div class="events-container">
    
    <div class="left-box">
        <h3>{{ $event->start_time->format('D, M d') }}</h3>
    </div>
    <div class="right-box">
        
            <div class="event-item">
                <div class="event-header" onclick="toggleEventDetails({{ $loop->index }})">
                    
                    <span>{{ $event->title }}</span>
                    <svg class="dropdown-icon" id="dropdown-icon-{{ $loop->index }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="event-details" id="event-details-{{ $loop->index }}" style="display: none;">
                    <p><strong>Time:</strong> {{ $event->start_time->format('g:i A') }} - {{ $event->end_time->format('g:i A') }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                    <p>{{ $event->description }}</p>
                </div>
                <button class="buy-tickets">Details</button>
            </div>
        
    </div>

</div>
@endforeach
<div class="center-container">
    <button class="view-tickets">View All</button>
</div>
<div class="card">
    <h2>News & Updates</h2>
    @foreach($news as $newsItem)
        <div class="news-item">
            <h3>{{ $newsItem->title }}</h3>
            <p>{{ $newsItem->content }}</p>
            <p>Published: {{ $newsItem->publish_date->format('F j, Y') }}</p>
        </div>
    @endforeach
</div>

<div class="card">
    <h2>Past Events</h2>
    @foreach($pastEvents as $event)
        <div class="event">
            <h3>{{ $event->title }}</h3>
            <p>{{ $event->description }}</p>
            <p>Date: {{ $event->start_time->format('F j, Y') }}</p>
        </div>
    @endforeach
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


