<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')
   </head>
   <body>

      <!-- header section start -->
      <div class="header_section">

         @include('home.header')

      </div>
      <!-- header section end -->

      <!-- about section start -->

      {{-- <div class="about-section layout_padding" style="padding-bottom: 60%">

      </div> --}}

      @include('home.about')
      <!-- about section end -->
      
      {{-- Organizations section start --}}

      <div class="about_section layout_padding">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-6">
                 <div class="about_taital_main">
                    <h2 class="about_taital">Sports Authority Of India</h2>
                    <p class="about_text"> </p>
                    <div class="readmore_bt"><a href="https://sportsauthorityofindia.nic.in/sai/"target="_blank">Official Website</a></div>
                 </div>
                 
              </div>
              <div class="col-md-6 padding_right_0">
                 <div><img src="images/sai.jpeg" class="about_img" style="padding-top: 120px; padding-left:20px;"></div>
              </div>
              
           </div>
        </div>
     </div>

      {{-- Organizations section end --}}

      <!-- footer section start -->
      @include('home.footer')  
   </body>
</html>