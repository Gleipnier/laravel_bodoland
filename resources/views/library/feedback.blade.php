@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Research & Learning')
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
              <select id="reason" name="reason" class="dropdown">
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

@endsection