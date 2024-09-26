@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Library Services')

@section('content')

    <h1>Library Services</h1>
    <div class="container-membership">
        <div class="content">
                <h2>Services</h2>
                <h1>How to apply for membership?</h1>
                <p>Information on how to become a member, membership benefits, and policies.</p>
                <a href="#" class="btn">Read more about it →</a>
        </div>
        <div class="image">
            <div>
                <img src="images/bookslogo.png" alt="books logo" style="height: 222px;">
            </div>
        </div>
    </div>
    <div class="recent-additions">
        <div class="section books">
            <h2>Our collection updated books</h2>
            <div class="items">
                @foreach($recentBooks as $book)
                    <div class="item book">
                        <img src="{{ $book->image_url }}" alt="{{ $book->title }}">
                        <div class="details">
                            <h3>{{ $book->title }}</h3>
                            <p>by {{ $book->author }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('books') }}" class="view-all">Books</a>
        </div>
    </div>
    <div class="container-started">
        <h2>Lending Services</h2>
        <h1>Details on borrowing, renewing, and returning materials.</h1>
        
        <div class="steps">
            <div class="step">
                <div class="step-icon">☕</div>
                <h3>Details on borrowing</h3>
                <p>Details on borrowing, renewing, and returning materials.....</p>
                <a href="#" class="btn">Get started →</a>
            </div>
            
            <div class="step">
                <div class="step-icon">↗️</div>
                <h3>Renew</h3>
                <p>Details on borrowing, renewing, and returning materials.</p>
                <a href="#" class="btn">Get started →</a>
            </div>
            
            <div class="step">
                <div class="step-icon">📦</div>
                <h3>Return</h3>
                <p>Details on borrowing, renewing, and returning materials.</p>
                <a href="#" class="btn">Get started →</a>
            </div>
        </div>
    </div>
    <div class="container-support">
        <h1>Our Other services</h1>
        <p>Choose from a variety of other services to help you get the most out of your library.</p>
        
        <div class="support-options">
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">📦</div>
                <h3>Interlibrary Loan</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">💻</div>
                <h3>Reference Services</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">🎫</div>
                <h3>Reading Rooms</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">🎫</div>
                <h3>Photocopying & Printing</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">🎫</div>
                <h3>Library Tours</h3>
            </div>
        </div>
    </div>

@endsection