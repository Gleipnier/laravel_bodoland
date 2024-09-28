<nav id="navbar" class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <!-- Replace with your actual logo -->
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/file.png') }}" alt="Logo">
                </a>
            </div>
            <button id="menu-toggle" class="menu-toggle">☰</button>
            <ul class="nav-list">
                    <li class="{{ Request::is('bookhome*') ? 'current' : '' }}"><a href="{{ route('bookhome') }}">Recents</a></li>
                    <li class="{{ Request::is('books*') ? 'current' : '' }}"><a href="{{ route('books') }}">Books</a></li>
                    <li class="{{ Request::is('donation*') ? 'current' : '' }}"><a href="{{ route('donation') }}">Donation</a></li>
                    <li class="{{ Request::is('policy*') ? 'current' : '' }}"><a href="{{ route('policy') }}">Policy</a></li>
                    <li class="{{ Request::is('faq*') ? 'current' : '' }}"><a href="{{ route('faq') }}">FAQ</a></li>
                    <li class="{{ Request::is('feedback*') ? 'current' : '' }}"><a href="{{ route('feedback') }}">Feedback</a></li>
                    <li class="{{ Request::is('bookstaff*') ? 'current' : '' }}"><a href="{{ route('bookstaff') }}">Bookstaff</a></li>
                    <li class="{{ Request::is('journals*') ? 'current' : '' }}"><a href="{{ route('journals') }}">Journals</a></li>
                    <li class="{{ Request::is('eresources*') ? 'current' : '' }}"><a href="{{ route('eresources') }}">E-Resources</a></li>
                    <li class="{{ Request::is('book-services*') ? 'current' : '' }}"><a href="{{ route('book-services') }}">Services</a></li>
                    <li class="{{ Request::is('research-learning*') ? 'current' : '' }}"><a href="{{ route('research-learning') }}">Research & Learning</a></li>
                    <li class="{{ Request::is('events-news*') ? 'current' : '' }}"><a href="{{ route('events-news') }}">Events & News</a></li>
            </ul>
        </div>
    </nav>