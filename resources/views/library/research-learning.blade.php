@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Research & Learning')
@section('content')


<div class="container-library">
    <div class="section-title">
        <h1>Research & Learning</h1>
        <p>Explore our resources to support your research and academic needs</p>
    </div>

    <div class="research-services">
        <div class="research-card">
            <div class="research-icon">📚</div>
            <h3>Research Support</h3>
            <p>
                We provide resources and services for researchers, including citation guides, access to research tools, and one-on-one consultations with our experts.
            </p>
            <a href="#" class="research-btn">Learn More</a>
        </div>

        <div class="research-card">
            <div class="research-icon">📅</div>
            <h3>Workshops & Training</h3>
            <p>
                Sign up for our workshops and training sessions on various topics including library resources, research methodologies, and academic writing skills.
            </p>
            <a href="#signup-sessions" class="research-btn">Join a Workshop</a>
        </div>
    </div>
</div>
<div id="signup-sessions" class="container-session">
    <h1>Workshops & Training</h1>
    <h3>Sign up for our upcoming sessions on library resources, research methodologies, and more.</h3>
<section class="sessions">
    <div class="session-card">
        <h2>Introduction to Research Tools</h2>
        <p>Learn how to use research databases, citation managers, and more.</p>
        <p><strong>Date:</strong> October 15, 2024</p>
        <p><strong>Time:</strong> 2:00 PM - 4:00 PM</p>
        <button class="session-btn">Sign Up</button>
    </div>

    <div class="session-card">
        <h2>Citation Mastery Workshop</h2>
        <p>Get hands-on practice with APA, MLA, and Chicago citation styles.</p>
        <p><strong>Date:</strong> October 22, 2024</p>
        <p><strong>Time:</strong> 11:00 AM - 1:00 PM</p>
        <button class="session-btn">Sign Up</button>
    </div>
</section>
</div>
    <div class="container-support">
        <h1>Our Subject Guides</h1>
        <p>Choose from a variety of subjects and disciplines to help you get the most out of your library.</p>
        
        <div class="support-options">
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">📚</div>
                <h3>Subject1</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">📚</div>
                <h3>Subject2</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">📚</div>
                <h3>Subject3</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">📚</div>
                <h3>Subject4</h3>
            </div>
            <div class="option" onclick="window.location.href='your-link-url-here'">
                <div class="option-icon">📚</div>
                <h3>Subject5</h3>
            </div>
        </div>
    </div> 
@endsection