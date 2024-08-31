<div class="header_main">
            <div class="mobile_menu">
               <div style="border: 3px solid black; background-color: rgb(211, 211, 211); padding: 10px;">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href=""><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">Organizations</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Information & Service</a>
                        </li>
                        {{-- <li class="nav-item">
                           <a class="nav-link " href="about.html">Documents</a>
                        </li> --}}
                        <li class="nav-item">
                           <a class="nav-link " href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="about.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contact.html">Contact</a>
                        </li>
                        @if (Route::has('login'))

                        @auth
                        <li> 
                            <x-app-layout></x-app-layout>
                        </li>

                        @else
                        <li class="nav-item">
                           <a class="nav-link " href="{{route('login')}}">Log In</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{route('register')}}">Register</a>
                        </li>
                        @endauth
                        @endif
                     </ul>
                  </div>
               </nav>
               </div>
            </div>
            <div class="container-fluid">
               
            </div>
            
            <div class="container-fluid">
               

               <div class="menu_main">
                  {{-- <div style="border: 3px solid white; background-image: linear-gradient(to right, white, #faf0e6); padding: 0px; border-radius: 15px;">                   --}}
                  <ul>
                     <div class="logo">
                        <a href="">
                        <img src="images/logo.png" style="width: 300px; height: auto;">
                        </a>
                        {{-- <a href="">
                        <img src="images/file.png" style="width: 100px; height: auto;">
                        </a> --}}
                     </div>
                     <li class="active"><a href="index.html">Home</a></li>
                     <li><a href="about.html">Organizations</a></li>
                     <li><a href="about.html">Information</a></li>
                     <li><a href="about.html">Documents</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="about.html">Gallery</a></li>
                     <li><a href="contact.html">Contact</a></li>
                     @if (Route::has('login'))
                     @auth
                     <li><x-app-layout></x-app-layout></li>

                     @else
                     <li><a href="{{route('login')}}">LogIn</a></li>
                     <li><a href="{{route('register')}}">Register</a></li>
                     @endauth
                     @endif
                  </ul>
                  {{-- </div> --}}
               </div>
            </div>
         </div>