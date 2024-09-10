
<div class="services_section layout_padding">
    <h1 class="services_taital" style="margin-top: 22px">Services </h1>
    <p class="services_text">You can Apply for Tournaments or Personal/Team Coahing</p>
    <div class="services-container">
        {{-- <div class="swiper-container services-slider">
            <div class="swiper-wrapper">
                @foreach($services as $service)
                    <div class="swiper-slide">
                        <div class="service-card">
                            <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}">
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                            <a href="#" class="view-details">View Details</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> --}}
        
        <div class="client_section_2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_main">
                        <div class="box_left">

                        </div>
                        <div class="box_right">

                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_main">
                        <div class="box_left">

                        </div>
                        <div class="box_right">

                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_main">
                        <div class="box_left">

                        </div>
                        <div class="box_right">

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>



        {{-- <div class="services-slider">
            <div class="services-track">
                <div class="service-card">
                    <img src="images/sports.png" alt="Sports Coaching">
                    <h3>Services</h3>
                    <p>Sports Tournaments</p>
                    <a href="#" class="view-details">View Details</a>
                </div>
                <div class="service-card">
                    <img src="images/coach.jpg" alt="Personal Coaching">
                    <h3>Services</h3>
                    <p>Personal Coaching</p>
                    <a href="#" class="view-details">View Details</a>
                </div>
                <div class="service-card">
                    <img src="images/soccer-coach-post.png" alt="Team Coaching">
                    <h3>Services</h3>
                    <p>Team Coaching</p>
                    <a href="#" class="view-details">View Details</a>
                </div>
                <div class="service-card">
                    <img src="placeholder" alt="Some training">
                    <h3>Services</h3>
                    <p>Some training</p>
                    <a href="#" class="view-details">View Details</a>
                </div>
                <div class="service-card">
                    <img src="placeholder" alt="Some training">
                    <h3>Services</h3>
                    <p>Some training</p>
                    <a href="#" class="view-details">View Details</a>
                </div>
                <div class="service-card">
                    <img src="placeholder" alt="Some training">
                    <h3>Services</h3>
                    <p>Some training</p>
                    <a href="#" class="view-details">View Details</a>
                </div>
                <!-- Add more service cards as needed -->
            </div>
        </div> --}}

    </div>
    

    {{-- Latest Container Section --}}


    <div class="latest-container">
        <div class="latest-section">
            <h2>Latest Updates</h2>
            <ul>
                <li>
                    <span class="new-tag">NEW</span>
                    <a href="downloads/kanakeswarGovFile.pdf" download>Book Ticket To DURANDCUP</a>
                    <div class="latest-date">2024-09-01</div>
                </li>
                <li>
                    <a href="downloads/file2.pdf" download>Update Title 2</a>
                    <div class="latest-date">2024-09-01</div>
                </li>
                <!-- Add more list items as needed -->
            </ul>
        </div>
        <div class="latest-section">
            <h2>How do I?</h2>
            <ul>
                <li>
                    <a href="https://example.com" target="_blank">Apply for Financial Assistance</a>
                </li>
                <li>
                    <a href="https://example.com" target="_blank">Apply for Sports Equipments</a>
                </li>
                <li>
                    <a href="https://example.com" target="_blank">Apply for Sports Certificates</a>
                </li>
                <!-- Add more list items as needed -->
            </ul>
        </div>
        <div class="latest-section">
            <h2>SUSTAINABLE DEVELOPMENT GOALS</h2>
            <ul>
                <li>
                    <span class="new-tag">NEW</span>
                    <a href="https://example.com" target="_blank">RTI</a>
                </li>
                <li>
                    <a href="https://example.com" target="_blank">Tenders</a>
                </li>
                <li>
                    <a href="https://example.com" target="_blank">Media Gallery</a>
                </li>
                <li>
                    <a href="https://example.com" target="_blank">Fit India Freedom Run 2.0</a>
                </li>
                <li>
                    <a href="https://example.com" target="_blank">Fit India Fitness Protocol</a>
                </li>
                <!-- Add more list items as needed -->
            </ul>
        </div>
    </div>
</div>