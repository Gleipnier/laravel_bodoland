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
            /* margin: 0; */
            padding: 0;
            background-color: #ffffff;
        } 
                .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }
/* navbar section start */
    .navbar {
        background-color: #15292B;
        color: black;
        width: 99.8%;
        z-index: 1000;
        border-radius: 10px;
        /* padding-bottom: 22px; */
        /* position: fixed; */
    }
    
    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        /* margin-bottom: 52px; */
    }
    nav ul li a:hover {
            color: #cccccc;
        }
    .logo a {
        color: white;
        text-decoration: none;
        font-size: 1.5rem;
    }
    
    .logo img {
        width: 50px;
        height: 50px;
    }

    .menu-toggle {
        background: none;
        border: none;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        display: none;
    }
    
    .nav-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .nav-list .current a {
        color: #e8491d;
        font-weight: bold;
    }
    
    .nav-list li a {
        color: #fff;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
    }
    
    @media (max-width: 1330px) {
        .menu-toggle {
            display: block;
        }
    
        .nav-list {
            position: fixed;
            top: 0;
            right: -250px;
            width: 250px;
            height: 100vh;
            background-color: #15292B;
            flex-direction: column;
            transition: right 0.3s ease-in-out;
        }
    
        .nav-list.active {
            right: 0;
        }
    
        .nav-list li {
            border-bottom: 1px solid #444;
        }
    
        .nav-list li:last-child {
            border-bottom: none;
        }
    }


/* navbar section end */
    
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
        @include('partials.navbar')
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
<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var navList = document.querySelector('.nav-list');
        navList.classList.toggle('active');
    });
</script>

</html>