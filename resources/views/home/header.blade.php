<div class="header_main">
            <div class="mobile_menu">
               
               <div style="border: 3px solid #454545; background-color:#454545; padding: 10px; position: fixed; z-index: 1000;">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href=""><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('organizations') }}">Organizations</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('information') }}">Information & Service</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('documents') }}">Documents</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('contact') }}">Contact</a>
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
                  <div class="logo">
                     <a href="">
                     <img src="images/logo.png" style="width: 300px; height: auto;">
                     </a>
                     {{-- <a href="">
                     <img src="images/file.png" style="width: 100px; height: auto;">
                     </a> --}}
                  </div>
                  <ul>
                     
                     <li class="active"><a href="{{ route('homepage') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
                     <li><a href="{{ route('organizations') }}">Organizations</a></li>
                     <li><a href="{{ route('information') }}">Information</a></li>
                     <li><a href="{{ route('documents') }}">Documents</a></li>
                     <li><a href="{{ route('about') }}">About</a></li>
                     <li><a href="{{ route('gallery') }}">Gallery</a></li>
                     <li><a href="{{ route('contact') }}">Contact</a></li>
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