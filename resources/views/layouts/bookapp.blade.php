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
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }
        header {
            background: #35424a;
            color: black;
            min-height: 70px;
            background-image: linear-gradient(to right, white, #faf0e6);

            border-radius: 22px;
        }
        header a {
            color: black;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            margin: 0;
            list-style: none;
            overflow: hidden;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        header .highlight, header .current a {
            color: #e8491d;
            font-weight: bold;
        }
        header a:hover {
            color: #cccccc;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Collections</h1>
            </div>
            <nav>
                <ul>
                    <li class="{{ Request::is('bookhome*') ? 'current' : '' }}"><a href="{{ route('bookhome') }}">Home</a></li>
                    <li class="{{ Request::is('books*') ? 'current' : '' }}"><a href="{{ route('books') }}">Books</a></li>
                    <li class="{{ Request::is('journals*') ? 'current' : '' }}"><a href="{{ route('journals') }}">Journals</a></li>
                    <li class="{{ Request::is('eresources*') ? 'current' : '' }}"><a href="{{ route('eresources') }}">E-Resources</a></li>
                    <li class="{{ Request::is('book-services*') ? 'current' : '' }}"><a href="{{ route('book-services') }}">Services</a></li>
                    <li class="{{ Request::is('research-learning*') ? 'current' : '' }}"><a href="{{ route('research-learning') }}">Research & Learning</a></li>
                    <li class="{{ Request::is('events-news*') ? 'current' : '' }}"><a href="{{ route('events-news') }}">Events & News</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>