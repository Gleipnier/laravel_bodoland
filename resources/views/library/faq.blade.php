@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Research & Learning')
@section('content')

<div class="faq-container">
        <div class="search-section">
            <h1>How can we help?</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button class="search-button">🔍</button>
            </div>
        </div>
    
        <div class="popular-guides">
            <p class="section-title">Popular Guides</p>
            <div class="guide-links">
                <a href="#">Types of Books</a>
                <a href="#">Getting Started with Library</a>
                <a href="#">Troubleshooting FAQs for Recordings</a>
                <a href="#">Reading Guides</a>
                <a href="#">Privacy FAQs</a>
                <a href="#">Troubleshooting FAQs for genres</a>
                <a href="#">Troubleshooting FAQs for genres</a>
            </div>
        </div>
    
        <div class="faq-section">
            <p class="section-title">Frequently Asked Questions</p>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">How do I Find a Book?</button>
                    <div class="faq-answer">
                        <p>To Find a Book, follow these steps:</p>
                        <ol>
                            <li>Sign up for a Library account</li>
                            <li>Get your unique tracking code for the book</li>
                            <li>Add the tracking code to your website's &lt;head&gt; section for the book</li>
                            <li>Verify the installation using Library's tools</li>
                        </ol>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">What pricing plans does Library offer?</button>
                    <div class="faq-answer">
                        <p>Library offers several pricing plans to suit different needs:</p>
                        <ul>
                            <li>Free Plan: Basic features for small websites and individuals</li>
                            <li>Pro Plan: Advanced features for growing businesses and organizations</li>
                            <li>Business Plan: Comprehensive solutions for large enterprises</li>
                            <li>Enterprise Plan: Custom solutions for high-traffic websites</li>
                        </ul>
                        <p>Visit our pricing page for detailed information on each plan's features and costs.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">How can I manage my account?</button>
                    <div class="faq-answer">
                        <p>You can manage your account through the following steps:</p>
                        <ol>
                            <li>Log in to your dashboard</li>
                            <li>Navigate to the 'Account Settings' section</li>
                            <li>Here you can update your profile, manage team members, and adjust billing information</li>
                            <li>For organization-wide settings, use the 'Organization Management' tab</li>
                        </ol>
                        <p>If you need further assistance, our support team is always ready to help!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');
                
                // Close all other answers
                document.querySelectorAll('.faq-question.active').forEach(activeQuestion => {
                    if (activeQuestion !== question) {
                        activeQuestion.classList.remove('active');
                        activeQuestion.nextElementSibling.classList.remove('active');
                    }
                });
                
                // Toggle the clicked question
                question.classList.toggle('active');
                answer.classList.toggle('active');
            });
        });
    });
    </script>


@endsection