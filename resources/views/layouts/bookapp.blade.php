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
            background-color: #ffffff;
        }
        /* Header container styling */
        .header-container {
            display: flex;
            justify-content: space-between; /* Align branding to the left, nav to the right */
            align-items: center;
            padding: 10px 20px;
            background: linear-gradient(to right, white, #faf0e6);
            border-radius: 22px;
            z-index: 1000;
            /* position: absolute; */
            /* position: relative; */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Branding style */
        #branding {
            float: left;
        }

        #branding h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        /* Nav list styling */
        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            justify-content: flex-end;
        }

        nav ul li {
            position: relative;
            padding: 0 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            text-transform: uppercase;
        }

        /* Dropdown menu styling */
        .displaydropdown:hover .dropdown {
            display: block;
        }
        .displaydropdown {
            position: absolute;
            z-index: 999;
            position: relative;
        }

        .dropdown {
            display: none;
            flex-direction: column;
            position: absolute;
            background-color: #ffffff;
            width: 150px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 999;
            border-radius: 8px;
            top: 10%;
            left: 40%;
            bottom: 
        }

        .dropdown li {
            padding: 10px;
            text-align: left;
        }

        .dropdown li a {
            color: black;
            text-transform: none;
            display: block;
            padding: 10px;
        }

        .dropdown li a:hover {
            background-color: #e8491d;
            color: white;
        }

        /* Hover effect for links */
        nav ul li a:hover {
            color: #cccccc;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: center;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                padding: 10px 0;
            }

            #branding {
                margin-bottom: 10px;
            }
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
                
        .copyright_section {
        margin-top: 222px;
        width: 100%;
        float: left;
        background-color: #122c2d;
        height: auto;
        }

        .copyright_text {
            width: 100%;
            float: left;
            color: #ffffff;
            text-align: center;
            font-size: 1rem;
            margin-left: 0px;
            padding-top: 22px;
        }

        .copyright_text a {
            color: #ffffff;
        }

        .copyright_text a:hover {
            color: #e27141;
        }

        .social_icon {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        .social_icon ul {
            margin: 0px;
            padding: 0px;
            display: inline-block;
            text-align: center;
        }

        .social_icon li {
            float: left;
            padding: 30px 5px;
        }

    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div id="branding">
                <h1>Collections</h1>
            </div>
            <nav>
                <ul>
                    <li class="{{ Request::is('homepage*') ? 'current' : '' }}"><a href="{{ route('homepage') }}">HomePage</a></li>
                    <li class="{{ Request::is('bookhome*') ? 'current' : '' }}"><a href="{{ route('bookhome') }}">Recents</a></li>
                    <li class="{{ Request::is('books*') ? 'current' : '' }}"><a href="{{ route('books') }}">Books</a></li>
                    <li class="{{ Request::is('journals*') ? 'current' : '' }}"><a href="{{ route('journals') }}">Journals</a></li>
                    <li class="{{ Request::is('eresources*') ? 'current' : '' }}"><a href="{{ route('eresources') }}">E-Resources</a></li>
                    <li class="{{ Request::is('book-services*') ? 'displaydropdown' : '' }}">
                        <a href="{{ route('book-services') }}">Services</a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown">
                            <li><a href="#">Option 1</a></li>
                            <li><a href="#">Option 2</a></li>
                            <li><a href="#">Option 3</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('research-learning*') ? 'current' : '' }}"><a href="{{ route('research-learning') }}">Research & Learning</a></li>
                    <li class="{{ Request::is('events-news*') ? 'current' : '' }}"><a href="{{ route('events-news') }}">Events & News</a></li>
                </ul>
            </nav>
        </div>
    </header>
    

    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="copyright_section">
         
               
               <div class="social_icon">
                  <p class="copyright_text">Content Ownership Directorate of Sports & Youth Welfare, Govt. of BTR. </p>
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
               </div>
                

         </div>
    </footer>
</body>

</html>