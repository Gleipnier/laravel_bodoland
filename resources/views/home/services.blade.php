

<div class="services_section layout_padding" style="padding-top: 120px">
    <h1 class="services_taital" style="margin-top: 22px">Services </h1>
    <p class="services_text">You can Apply for Tournaments or Personal/Team Coahing</p>
    <div class="swiper-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($services as $service)
                
                    <div class="swiper-slide">
                        <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}" class="service-image">
                        <div class="service-content">
                            <div class="service-title">{{ $service->title }}</div>
                            <div class="service-description">{{ $service->description }}</div>
                            <a href="{{ route('services.show', $service->id) }}" class="view-details">View Details</a>
                        </div>
                    </div>
                
            @endforeach
        </div>
            <div class="swiper-pagination"></div>
    </div>
    
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        
    </div>

    {{-- Latest Container Section --}}
    <div class="updates-container">
        <div class="latest-info-container">
            <div class="latest-section">
                <h2>Latest Updates</h2>
                <div class="update-card">
                    <ul>
                        @foreach($latestUpdates as $update)
                            <li class="update-item">
                                <div class="update-title">
                                    @if($update->is_new)
                                        <span class="new-tag">NEW</span>
                                    @endif
                                    <a href="{{ $update->link }}" download>{{ $update->title }}</a>
                                </div>
                                <div class="update-date">{{ $update->date }}</div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="latest-info-container">
            <div class="latest-section">
                <h2>How do I</h2>
                <div class="update-card" style="text-align: center">
                    <ul>
                            <li class="update-item">
                                <div class="update-title">
                                    <a href="https://example.com" target="_blank">Apply for Financial Assistance</a>
                                </div>
                            </li>
                            <li class="update-item">
                                <div class="update-title">
                                    <a href="https://example.com" target="_blank">Apply for Sports Equipments</a>
                                </div>
                            </li>
                            <li class="update-item">
                                <div class="update-title">
                                    <a href="https://example.com" target="_blank">Apply for Sports Certificates</a>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="services_section layout_padding" style="margin-bottom: 69px"></div>

   