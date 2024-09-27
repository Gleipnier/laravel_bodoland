@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Research & Learning')
<style>
  .social-community-page {
      font-family: Arial, sans-serif;
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
      line-height: 1.6;
  }

  .social-links {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
  }

  .social-link {
      display: inline-block;
      padding: 10px 20px;
      background-color: #f0f0f0;
      color: #333;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
  }

  .social-link:hover {
      background-color: #e0e0e0;
  }

  .program-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
  }

  .program-item {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .program-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);  
  }

  @media (max-width: 600px) {
      .social-links {
          flex-direction: column;
      }

      .social-link {
          width: 100%;
          text-align: center;
      }

      .program-list {
          grid-template-columns: 1fr;
      }
  }
</style>
@section('content')

<section class="feedback-section">
        <div class="feedback-left">
          <h2 class="feedback-title">Feel free to drop us your feedback.</h2>
          <img src="images/girlbook.jpeg" alt="Feedback Illustration" class="feedback-image">
        </div>
      
        <div class="feedback-right">
          <form class="feedback-form">
            <label for="satisfaction" class="form-label">How satisfied are you with our library catalogue?</label>
            <input type="range" id="satisfaction" name="satisfaction" min="0" max="10" value="5" class="slider">
            <div class="range-labels">
              <span>Not Satisfatory</span>
              <span>Extremely Satisfied</span>
            </div>
    
            <label for="reason" class="form-label">Select the reason why you gave this score:</label>
            <div class="dropdowns">
              <select id="reason" name="reason" class="dropdowner">
                <option>Book Collection</option>
                <option>Navigation</option>
                <option>User Interface</option>
                <option>Other</option>
              </select>
            </div>
      
            <label for="feedback" class="form-label">Please tell us your reasons for giving this score here:</label>
            <textarea id="feedback" name="feedback" class="feedback-input" placeholder="Please tell us your reasons for giving this score here.."></textarea>
      
    
      
            <button type="submit" class="submit-button">Send Feedback</button>
          </form>
        </div>
      </section>



      
<div class="social-community-page">
  <h1>Social Media & Community Engagement</h1>
  
  <section class="social-media-section">
      <h2>Social Media Links</h2>
      <p>Connect with the library on various platforms:</p>
      <div class="social-links">
          <a href="#" class="social-link facebook" style="background: #1877F2;color: white">Facebook</a>
          <a href="#" class="social-link twitter" style="background: #1DA1F2;color: white">Twitter</a>
          <a href="#" class="social-link instagram" style="background: #E1306C;color: white">Instagram</a>
          <a href="#" class="social-link youtube" style="background: #FF0000;color: white">YouTube</a>
          <a href="#" class="social-link linkedin" style="background: #0077B5;color: white ">LinkedIn</a>
      </div>
  </section>
  
  <section class="community-programs-section">
      <h2>Community Programs</h2>
      <p>Information on outreach programs, partnerships, and collaborations:</p>
      <div class="program-list">
          <div class="program-item">
              <h3>Book Club Partnerships</h3>
              <p>Join our monthly book clubs in collaboration with local cafes and bookstores.</p>
          </div>
          <div class="program-item">
              <h3>Literacy Outreach</h3>
              <p>We work with schools and community centers to promote literacy through workshops and reading programs.</p>
          </div>
          <div class="program-item">
              <h3>Tech Skills for Seniors</h3>
              <p>In partnership with local tech companies, we offer free technology workshops for seniors.</p>
          </div>
          <div class="program-item">
              <h3>Cultural Exchange Events</h3>
              <p>Collaborate with cultural organizations to host events celebrating diversity in literature and arts.</p>
          </div>
      </div>
  </section>
</div>

@endsection