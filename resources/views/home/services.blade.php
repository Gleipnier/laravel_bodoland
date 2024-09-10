
<div class="services_section layout_padding">
    <h1 class="services_taital" style="margin-top: 22px">Services </h1>
    <p class="services_text">You can Apply for Tournaments or Personal/Team Coahing</p>
    <div class="services-container">        
        <div class="services-slider">
            <div class="services-track">
                @foreach($services as $service)
                    @if(in_array($service->id, [1, 2, 3])) <!-- Display only services with ID 1, 2, or 3 -->
                        <div class="service-card">
                            <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}">
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                            <!-- Link to view individual service details using its ID -->
                            <a href="{{ route('services.show', $service->id) }}" class="view-details">View Details</a>
                        </div>
                    @endif
                @endforeach
            </div>
            
        </div>

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

