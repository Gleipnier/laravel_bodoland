@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Library Services')
<style>
  .support-section {
  padding: 50px 20px;
  background-color: #f4f4f4;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.support-header {
  text-align: center;
  margin-bottom: 40px;
}

.support-header h1 {
  font-size: 36px;
  color: #004d40;
  margin-bottom: 10px;
}

.support-header p {
  font-size: 18px;
  color: #555;
}

.support-content {
  margin-bottom: 50px;
}

.support-content h2 {
  font-size: 28px;
  color: #004d40;
  margin-bottom: 15px;
}

.support-content p, .support-content ul {
  font-size: 16px;
  color: #555;
}

.support-content ul {
  padding-left: 20px;
}

.support-content ul li {
  list-style-type: disc;
  margin-bottom: 5px;
}

.contact-list {
  list-style: none;
  padding-left: 0;
}

.contact-list li {
  margin-bottom: 10px;
}
/* Reset margins, paddings, and box sizing */
* {
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
}

body {
    font-family: Arial, sans-serif;
}

/* Help Section */
.help-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color: #8b4d34;
    padding: 40px;
    border-radius: 15px;
}

.form-container {
    flex: 1;
    min-width: 300px;
    padding: 20px;
}

.help-form h2 {
    color: white;
    text-align: center;
    margin-bottom: 20px;
}

.form-row {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

textarea {
    resize: none;
    height: 100px;
    margin-bottom: 20px;
}

button {
    background-color: #e44a2b;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #d03f25;
}

.image-container img {
    max-width: 100%;
    border-radius: 15px;
}

/* Volunteer Section */
.volunteer-section {
    background-color: #2e2e2e;
    color: white;
    padding: 40px 20px;
    text-align: center;
}

.volunteer-content h2 {
    margin-bottom: 20px;
    font-size: 36px;
}

.volunteer-content p {
    font-size: 18px;
    margin-bottom: 20px;
}

.apply-btn {
    background-color: #ccc;
    color: #333;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.apply-btn:hover {
    background-color: #bbb;
}

.stats {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-top: 40px;
}

.stats div {
    text-align: center;
}

.stats h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.stats p {
    font-size: 32px;
    font-weight: bold;
}
.research-btn {
            display: inline-block;
            background-color: #5a67d8;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .research-btn:hover {
            background-color: #434190;
        }
        .container-supp {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .volunteer-form-wrapper {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .volunteer-form-wrapper h2 {
        text-align: center;
        color: #333;
    }
    .volunteer-form .form-group {
        margin-bottom: 20px;
    }
    .volunteer-form label {
        display: block;
        margin-bottom: 5px;
    }
    .volunteer-form input[type="text"],
    .volunteer-form input[type="email"],
    .volunteer-form input[type="tel"],
    .volunteer-form select,
    .volunteer-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .volunteer-form textarea {
        height: 100px;
    }
    .volunteer-form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #5a67d8;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .volunteer-form button:hover {
        background-color: #434190;
    }
    .volunteer-form .error {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }
    @media (max-width: 600px) {
        .volunteer-form-wrapper {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
    }
/* Responsiveness */
@media (max-width: 768px) {
  .support-section{
      padding: 0px;
    }
    .help-section {
        flex-direction: column;
        padding: 20px;
    }

    .form-row {
        flex-direction: column;
    }

    .stats {
        flex-direction: column;
        gap: 20px;
    }

  .support-header h1 {
    font-size: 30px;
  }

  .support-content h2 {
    font-size: 24px;
  }

  .support-header p, .support-content p, .support-content ul {
    font-size: 14px;
  }
}


</style>
@section('content')

<div class="container-membership" style="padding-top: 130px">
  <div class="content">
          <h1>Help Your Library</h1>
          <p>Be a part of our community and help us serve the needs of our users. Your contribution helps us continue serving the community through education, resources, and services. Discover ways you can support us below.</p>
          <a href="#" class="btn">Donate →</a>
  </div>
  <div class="image">
      <div>
          <img src="images/bookdonate.jpg" alt="books donate" style="height: 222px;">
      </div>
  </div>
</div>

<!-- Volunteer Section -->
<section class="volunteer-section">
    <div class="volunteer-content">
        <h2>Become a volunteer</h2>
        <p>Help the helpless during your holidays for a better world. We believe that every child deserves a childhood filled with hope, joy, and the opportunity to pursue their dreams and career.</p>
        <a href="#volunteernow" class="research-btn">Apply Now</a>
      </div>
    <div class="stats">
        <div>
            <h3>Projects</h3>
            <p>0+</p>
        </div>
        <div>
            <h3>Volunteers</h3>
            <p>0+</p>
        </div>
    </div>
</section>

<section class="support-section">
  <div class="container-supp">
    <div class="support-header">
      <h1>Support Your Library</h1>
      <p>Your contribution helps us continue serving the community through education, resources, and services. Discover ways you can support us below.</p>
    </div>

    <!-- Donations & Support Section -->
    <div class="support-content">
      <h2>Donations & Support</h2>
      <p>We accept donations of books, resources, and funds to help expand our collections and services. Your generous contribution enables us to keep improving the library for the benefit of all community members.</p>
      <ul>
        <li>Donate Books: We accept new or gently used books.</li>
        <li>Donate Resources: Educational materials, technology, and other resources are welcome.</li>
        <li>Donate Funds: Your monetary donation helps fund programs, resources, and more.</li>
      </ul>
      <p>If you’re interested in donating, please reach out to us through the contact information provided below.</p>
      <a href="#contactid" >Contact Info</a>
    </div>

    <!-- Volunteer Opportunities Section -->
    <div class="support-content">
      <h2>Volunteer Opportunities</h2>
      <p>Looking to give back to your community? Volunteering with us is a great way to help promote education and literacy. We offer a range of volunteer opportunities:</p>
      <ul>
        <li>Assist with organizing and shelving books.</li>
        <li>Help plan and host community events.</li>
        <li>Tutor students in reading and writing.</li>
        <li>Support technology programs and workshops.</li>
      </ul>
      <p>If you're interested in becoming a volunteer, contact us, and we’ll provide more details about how you can get involved.</p>
    </div>

    <!-- Contact Information Section -->
    <div id="contactid" class="support-content">
      <h2>Contact Information</h2>
      <p>For more information on donations, volunteering, or general inquiries, feel free to reach out to us:</p>
      <ul class="contact-list">
        <li><strong>Address:</strong> City, State, ZIP</li>
        <li><strong>Phone:</strong> (91) 1234567890</li>
        <li><strong>Email:</strong> contact@yourlibrary.org</li>
        <li><strong>Hours of Operation:</strong></li>
        <ul>
          <li>Monday - Friday: 9 AM - 6 PM</li>
          <li>Saturday: 10 AM - 4 PM</li>
          <li>Sunday: Closed</li>
        </ul>
      </ul>
    </div>
  </div>
</section>

<!-- Help Form Section -->
<div id="volunteernow" class="volunteer-form-wrapper" style="margin-top: 110px">
  <h2>Volunteer Sign-up Form</h2>
  <form id="volunteerForm" class="volunteer-form">
      <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
          <label for="availability">Availability:</label>
          <select id="availability" name="availability" required>
              <option value="">Select an option</option>
              <option value="weekdays">Weekdays</option>
              <option value="weekends">Weekends</option>
              <option value="both">Both</option>
          </select>
      </div>
      <div class="form-group">
          <label for="interests">Areas of Interest:</label>
          <textarea id="interests" name="interests" required></textarea>
      </div>
      <div class="form-group">
          <button type="submit">Sign Up</button>
      </div>
  </form>
</div>


<script>
  document.getElementById('volunteerForm').addEventListener('submit', function(e) {
      e.preventDefault();
      let isValid = true;

      // Simple validation
      ['name', 'email', 'phone', 'availability', 'interests'].forEach(function(field) {
          let value = document.getElementById(field).value.trim();
          let errorElement = document.getElementById(field + 'Error');
          
          if (!value) {
              isValid = false;
              if (!errorElement) {
                  let error = document.createElement('div');
                  error.id = field + 'Error';
                  error.className = 'error';
                  error.textContent = 'This field is required.';
                  document.getElementById(field).parentNode.appendChild(error);
              }
          } else if (errorElement) {
              errorElement.remove();
          }
      });

      if (isValid) {
          alert('Form submitted successfully!');
          this.reset();
      }
  });
</script>
@endsection

