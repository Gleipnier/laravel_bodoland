<style>
   
   .swiper-container {
    position: relative;
    padding: 0 60px 50px; /* Increased bottom padding for pagination */
    max-width: 1200px;
    margin: 0 auto;
   }
   .swiper {
       width: 100%;
       max-width: 1200px;
       height: auto;
       margin: 0 auto;
       padding: 20px 0;
   }
   .swiper-slide {
       background: #fff;
       border-radius: 8px;
       box-shadow: 0 4px 8px rgba(0,0,0,0.1);
       padding: 0;
       text-align: center;
       display: flex;
       flex-direction: column;
       height: auto;
   }
   .service-image {
       width: 100%;
       height: 200px;
       object-fit: contain;
       border-top-left-radius: 8px;
       border-top-right-radius: 8px;
   }
   .service-content {
       padding: 20px;
       display: flex;
       flex-direction: column;
       justify-content: space-between;
   }
   .service-title {
       font-size: 20px;
       font-weight: bold;
       margin-bottom: 10px;
       color: #333;
   }
   .service-description {
       font-size: 14px;
       color: #666;
       margin-bottom: 15px;
   }
   .view-details {
       display: inline-block;
       background: #ff1493;
       color: white;
       padding: 8px 16px;
       text-decoration: none;
       border-radius: 5px;
       font-weight: bold;
       font-size: 14px;
       align-self: center;
   }
   .swiper-button-next, .swiper-button-prev {
       color: #ff1493;
   }
   .swiper-pagination {
      position: absolute;
      bottom: 10px;
      left: 0;
      right: 0;
   }
   .swiper-pagination-bullet-active {
       background-color: #ff1493;
   }

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

{{-- <div class="services_section layout_padding" style="padding-top: 120px">
   <div class="latest-container">
      <div class="latest-section" style="padding-left: 50px">
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
     <div class="latest-section" style="padding-right: 50px">
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
</div> --}}
<div class="client_section layout_padding" style="padding-top: 120px">
         <div class="container">
        
         <div class="banner_section layout_padding">



            <div class="swiper">
               <div class="swiper-wrapper">
                 <div class="swiper-slide">
                   <img src="images/financeasisst.png" alt="financeasisst" class="service-image">
                   <div class="service-content">
                       <a href="#"><div class="service-title">Finance Assistance</div></a>
                       
                       {{-- <a href="#" class="view-details">View Details</a> --}}
                   </div>
                 </div>
                 <div class="swiper-slide">
                   <img src="images/sportsacademy.png" alt="Sports Academy" class="service-image">
                   <div class="service-content">
                       <a href="#"><div class="service-title">Sports Academy</div></a>
                       
                       {{-- <a href="#" class="view-details">View Details</a> --}}
                   </div>
                 </div>
                 <div class="swiper-slide">
                   <img src="images/kheloindia.png" alt="kheloindia" class="service-image">
                   <div class="service-content">
                       <a href="#"><div class="service-title">Khelo India</div></a>
                       
                       {{-- <a href="#" class="view-details">View Details</a> --}}
                   </div>
                 </div>
                 <div class="swiper-slide">
                   <img src="images/statelevelcommittee.png" alt="statelevelcommittee" class="service-image">
                   <div class="service-content">
                       <a href="#"><div class="service-title">State Level Committee</div></a>
                       
                       {{-- <a href="#" class="view-details">State Level Committee</a> --}}
                   </div>
                 </div>
               </div>
               <div class="swiper-pagination"></div>
               <div class="swiper-button-prev"></div>
               <div class="swiper-button-next"></div>
           </div>  

         {{-- Notifications Section --}}

         </div>
            <h1 class="client_taital">Recent Notifications</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="customer_text">Notice for directing to attend the selected candidates for the document verification for the post of Sub-Divisional Sports Officer, Coach & Physical Instructor.
                              </p>
                              <p class="lorem_text">All the concerned selected candidates for the post of post of Sub-Divisional Sports Officer, Coach & Physical Instructor under Sports and Youth Welfare, BTC Kokrajhar as per vide Letter No: CHD/SYW/122/Pt.II/2023/533 Dated: 8th March, 2024 are hereby directed to attend for the document verification with all the original testimonials/documents as per the venue, date & time mentioned in the attached file.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                <a href="{{ asset('downloads/SubDivSportsGovFile.pdf') }}" download>
                                         <img src="images/downloadbut.png" alt="Download Button" style="cursor: pointer;">
                                </a>


                                 <!-- <div class="client_img"><img src="images/downloadbut.png"></div> -->
                                 <!-- <div class="quick_icon"><img src="images/quick-icon.png"></div> -->
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Publish Date: 2024-03-08</h4>
                                 <p class="customer_text">CLick on Image for download</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="customer_text">Notice for result declaration for the post of SDSO, COACH and PHYSICAL INSTRUCTOR under Sports & YW Dept. BTC, Kokrajhar</p>
                              <p class="lorem_text">In pursuance of Letter Vide No. BTC/SYW-124/2023/31-32 Dated: Kokrajhar, the 7th March, 2024, the Directorate of Sports & YW, BTC declares the merit candidates selected by the Selection Committee for appointment for the post of Sub-Divisional Sports Officer (SDSO), Coach & Physical Instructor (PI) under Directorate of Sports and Youth Welfare, BTC, Kokrajhar of the Direct Recruitment Drive held w.e.f. 7 to 10* November, 2023 with reference to the Advertisement. NO. CHD/SYW/122/Pt. 1I/2023/11 Dated: Kok. the 11* May, 2023 for filling up the sanctioned vacant posts of Sub-Divisional Sports Officer (SDSO) Coach & Physical Instructor (PI)</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                              <a href="{{ asset('downloads/ResultDecGovFile.pdf') }}" download>
                                         <img src="images/downloadbut.png" alt="Download Button" style="cursor: pointer;">
                                </a>

                                 <!-- <div class="client_img"><img src="images/downloadbut.png"></div> -->
                                 <!-- <div class="quick_icon"><img src="images/quick-icon.png"></div> -->
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Publish Date: 2024-03-08</h4>
                                 <p class="customer_text">CLick on Image for download</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="customer_text">Kanakeswar Narzary Sports Excellence Award, 2023-24.</p>
                              <p class="lorem_text">With reference to the subject cited above, It is to inform you that the Govt. of BTR, Kokrajhar has taken up an initiative to provide a cash award of Rs. 1,00,000.00 (Rupees One Lakh) only each to 100 nos. of Prominent Sportsperson of BTR as a "Kanakeswar Narzary Sports Excellence Award" during the year 2023-24.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                              <a href="{{ asset('downloads/kanakeswarGovFile.pdf') }}" download>
                                         <img src="images/downloadbut.png" alt="Download Button" style="cursor: pointer;">
                                </a>

                                 <!-- <div class="client_img"><img src="images/downloadbut.png"></div> -->
                                 <!-- <div class="quick_icon"><img src="images/quick-icon.png"></div> -->
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Publish Date: 2023-11-29</h4>
                                 <p class="customer_text">Click on Image for download</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>



      <script type="module">
         import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";
         const swiper = new Swiper(".swiper", {
           direction: "horizontal",
           loop: true,
           slidesPerView: 4,
           spaceBetween: 20,
           pagination: {
             el: '.swiper-pagination',
             clickable: true,
             type: 'bullets',
           },
           navigation: {
             nextEl: ".swiper-button-next",
             prevEl: ".swiper-button-prev",
           },
           breakpoints: {
             320: {
               slidesPerView: 1,
               spaceBetween: 10
             },
             768: {
               slidesPerView: 2,
               spaceBetween: 15
             },
             1024: {
               slidesPerView: 4,
               spaceBetween: 20
             }
           }
         });
         </script>