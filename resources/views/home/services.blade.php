<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<div class="services_section layout_padding">
    <div class="services-container">
        <h1 class="services_taital">Services </h1>
        <p class="services_text">You can Apply for Tournaments or Personal/Team Coahing</p>

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
        




        <div class="services-slider">
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
        </div>

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






    
           {{-- <h1 class="services_taital">Latest </h1>
        <div class="download-button-space">   
         <a href="downloads/kanakeswarGovFile.pdf" download class="download-button">BOOK TICKET FOR DURANDCUP 2023</a>
        </div> --}}
    </div>
</div>