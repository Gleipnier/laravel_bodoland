

{{-- added separate style here because style.css was not applying --}}


<style>
   body {
       font-family: Arial, sans-serif;
       background-color: #f0f0f0;
       margin: 0;
       padding: 20px;
   }
   .container {
       display: flex;
       flex-wrap: wrap;
       justify-content: left;
       gap: 20px;
       max-width: 100%;
       margin: 0 auto;
   }
   .card {
       background-color: white;
       border-radius: 10px;
       box-shadow: 0 4px 6px rgba(0,0,0,0.1);
       overflow: hidden;
       width: 290px;
       transition: transform 0.3s ease;
       
   }
   .card:hover {
       transform: translateY(-5px);
   }
   .card-image {
       height: 350px;
       background-color: #e0e0e0;
       display: flex;
       justify-content: center;
       align-items: center;
       overflow: hidden;
   }
   .card-image img {
       width: 100%;
       height: 100%;
       object-fit: contain;
   }
   .card-content {
       padding: 20px;
   }
   .card-title {
       font-size: 1.35rem;
       font-weight: bold;
       color: #333;
       margin-bottom: 10px;
   }
   .card-description {
       font-size: 1.1rem;
       color: #666;
       margin-bottom: 15px;
   }
   .card-link {
       display: inline-block;
       color: #ff4081;
       text-decoration: none;
       font-weight: bold;
       font-size: 0.9rem;
   }
   .card-link:hover {
       text-decoration: underline;
   }
</style>
<div class="services_section layout_padding">
         <div class="container">         
            <h1 class="services_taital">Services </h1>
            <p class="services_text">You can Apply for Tournaments or Personal/Team Coahing</p>
            <div class="container">
               <div class="card">
                   <div class="card-image">
                       <img src="images/sports.png" alt="Sports Coaching">
                   </div>
                   <div class="card-content">
                       <h2 class="card-title">Services</h2>
                       <p class="card-description">Sports Tournaments</p>
                       <a href="#" class="card-link">View Details</a>
                   </div>
               </div>
               <div class="card">
                   <div class="card-image">
                       <img src="images/coach.jpg" alt="Personal Coaching">
                   </div>
                   <div class="card-content">
                       <h2 class="card-title">Services</h2>
                       <p class="card-description">Personal Coaching</p>
                       <a href="#" class="card-link">View Details</a>
                   </div>
               </div>
               <div class="card">
                   <div class="card-image">
                       <img src="images/soccer-coach-post.png" alt="Team Coaching">
                   </div>
                   <div class="card-content">
                       <h2 class="card-title">Services</h2>
                       <p class="card-description">Team Coaching</p>
                       <a href="#" class="card-link">View Details</a>
                   </div>
               </div>
               <div class="card">
                   <div class="card-image">
                       <img src="Placeholder.jpg" alt="Placeholder">
                   </div>
                   <div class="card-content">
                       <h2 class="card-title">Services</h2>
                       <p class="card-description">Some training</p>
                       <a href="#" class="card-link">View Details</a>
                   </div>
               </div>
               <div class="card">
                  <div class="card-image">
                      <img src="Placeholder.jpg" alt="Placeholder">
                  </div>
                  <div class="card-content">
                      <h2 class="card-title">Services</h2>
                      <p class="card-description">Some training</p>
                      <a href="#" class="card-link">View Details</a>
                  </div>
              </div>
           </div>
           <h1 class="services_taital">Latest </h1>
         <a href="downloads/kanakeswarGovFile.pdf" download class="download-button">BOOK TICKET FOR DURANDCUP 2023</a>
         </div>
      </div>