<div class="header-top-strip orange-bg">
    <div class="d-flex justify-content-between align-items-center position-relative">
        <ul class="primary-menu-links d-xl-flex align-items-center">
            <li class="menu-toggle-reverse">
                <a href="{{ url('') }}" class="cursor"><i class="fas fa-home fz22"></i></a>
            </li>
            <li>
                <a href="{{ url('') }}" class="cursor">Government of BTR | Library Department</a>
            </li>

        </ul>
        <div class="lang-fontSize-social-media">
            <ul class="d-flex align-items-center">

                <li class="incDecFont menu-toggle-reverse">
                    <span class="dec">A-</span>
                    <span class="fontSize">A</span>
                    <span class="inc">A+</span>
                </li>

                <li class="incDecFont menu-toggle-reverse">
                    <button class="btn border-end px-4 py-2 text-white btn-sm">
                        <a href="#main-content">Skip to main content</a>
                    </button>
                    <a href="{{ url('/login') }}"
                        class="btn btn-link border-end px-4 py-2 text-white btn-sm">Dashboard</a>
                </li>

                <li class="incDecFont menu-toggle">
                    <a href="{{ url('/login') }}"
                        class="btn btn-link border-end px-4 py-2 text-white btn-sm">Dashboard</a>
                </li>

            </ul>
        </div>

    </div>
</div>

<nav id="navbar" class="navbar-local">
    <div class="navbar-container-local">
        <div class="logo">
            <!-- Replace with your actual logo -->
            <a href="{{ url('') }}">
                <img src="https://byem.bodoland.gov.in/images/logo.png" style="width: 100px; height: 60px;"
                    alt="Logo">
            </a>
        </div>
        <button id="menu-toggle" class="menu-toggle">☰</button>
        <ul class="nav-list-local">
            <li class="{{ Request::is('/') ? 'current' : '' }}">
                <a href="{{ route('newHome') }}">Home</a>
            </li>

            <li class="{{ Request::is('aboutus') ? 'current' : '' }}">
                <a href="{{ route('aboutus') }}">About Us</a>
            </li>

            <li class="{{ Request::is('books') ? 'current' : '' }}">
                <a href="{{ route('books') }}">Books</a>
            </li>

            <li class="{{ Request::is('bookCollection') ? 'current' : '' }}">
                <a href="{{ route('bookCollection') }}">Book Collection</a>
            </li>

            <li class="{{ Request::is('library') ? 'current' : '' }}">
                <a href="{{ route('library') }}">Library</a>
            </li>

            <li class="{{ Request::is('donation*') ? 'current' : '' }}">
                <a href="{{ route('donation') }}">Volunteer
                </a>
            </li>


            <li class="{{ Request::is('bookstaff*') ? 'current' : '' }}">
                <a href="{{ route('bookstaff') }}">
                    Who's Who
                </a>
            </li>
            <li class="{{ Request::is('gallery') ? 'current' : '' }}">
                <a href="{{ route('gallery') }}">Gallery</a>
            </li>

            <li class="{{ Request::is('book-services*') ? 'current' : '' }}">
                <a href="{{ route('book-services') }}">Services</a>
            </li>

            <li class="{{ Request::is('events-news*') ? 'current' : '' }}"><a href="{{ route('events-news') }}">Events
                    & News</a></li>
        </ul>
    </div>
</nav>
