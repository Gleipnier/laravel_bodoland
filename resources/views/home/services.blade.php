
<div class="services_section layout_padding" style="padding-top: 120px">
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
                            <a href="{{ route('services.show', $service->id) }}" class="view-details">View Details</a>
                        </div>
                    @endif
                @endforeach
            </div>
            
        </div>

    </div>
</div>

    {{-- Latest Container Section --}}

<div class="latest-info-container">

    <div class="latest-section">
        <h1>Latest Updates</h1>
        <div class="latest-update-box">
        <ul>
            @foreach($latestUpdates as $update)
                <li>
                    @if($update->is_new)
                        <span class="new-tag">NEW</span>
                    @endif
                    <h2><a href="{{ $update->link }}" download>{{ $update->title }}</a></h2>
                    <div class="latest-date">{{ $update->date }}</div>
                </li>
            @endforeach
        </ul>
        </div>
     </div>

</div>

