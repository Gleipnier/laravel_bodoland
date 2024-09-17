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
      
      @include('home.about')

      <div class="downnload-button" style="color:white">
         hi
      </div>

      <div class="about_section layout_padding">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-6">
                 <div class="about_taital_main">
                    <h1>Mission</h1>
                    <p class="about_text">To fulfill the designed vision of the Department in a pragmatic manner, a definite and constructive mission is the pivotal way. Sports and infrastructure are the most closely associated aspects that play a crucial role in enhancing any sports persons performance to a higher level of achievement. The department emphasizes on ensuring a pragmatic approach towards structured mission, promotion of competitive sports, physical activity, a healthy lifestyle, state of art sports infrastructure, sports coaching and training and sports related activities. The Department is also committed with a mission to reach every nook and corner of the BTR to identify budding sports talent in different sports disciplines. Further, our mission is to promote and develop sports performances at State, National and International level competitions along with health awareness and improving quality of life which is the core mission of Sports & Youth Welfare Department, BTC, Kokrajhar. </p>
                    <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
                 </div>
                 
              </div>
              <div class="col-md-6 padding_right_0">
                 <div><img src="images/gov6.jpg" class="about_img" style="padding-top: 120px; padding-left:20px; height: 420px; width: 590px;"></div>
              </div>
              
           </div>
        </div>
     </div>
     <div class="about_section layout_padding">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-6">
                 <div class="about_taital_main">
                    <h1>Vision</h1>
                    <p class="about_text">The vision of Sports & Youth Welfare Department is to bring about social transformation by promoting sports and spreading awareness of sports across different sections of the society, resulting in character building and inclusive development. It focuses on the all-round development of body, mind and health of the youth and common citizen of the BTR. An individual self-esteem, confidence and ability to deal with stress effectively is one of the major building blocks of a community and nation and therefore, the Department of Sports & Youth Welfare emphasizes on identifying and nurturing sporting talent in Bodoland giving them the opportunity to shine and excel in the global sports arena by creating a sports centric ecosystem. </p>
                 </div>
                 
              </div>
              <div class="col-md-6 padding_right_0">
                 <div><img src="images/gov9.jpg" class="about_img" style="padding-top: 120px; padding-left:20px; height: 420px; width: 590px;"></div>
              </div>
           </div>
        </div>
     </div>
     <div class="about_section layout_padding">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-6">
                 <div class="about_taital_main">
                    <h2 class="about_taital">WHAT WE DO</h2>
                        <p class="about_text">
                        <h3>Refresher Course:</h3>
                        Imparting Training and Refresher courses to the all Officers, Staff, Coaches and Physical Instructor under Sports & youth Welfare department BTC, Kokrajhar
                        <p>
                        <p class="about_text">
                        <h3>Financial Assistance to National & international arena participation:</h3>
                        The aims of scheme is to provided financial assistance to the National and International players for traveling expenses as Lum-Sum during the participation in various tournament and various discipline in National and International area. Applicant should apply with due fill up format provide by the department and countersigned by the concerned DSO under BTR.
                        <p>
                        <p class="about_text">
                        <h3>Cash Award:</h3>
                        The main aims of the scheme is providing One time financial assistant grant "Incentive Cash Award" to medal achievers who have participated in the various tournament in National & International arena as Encouragement Award. The department is also providing one time financial assistance to above 60 years old Sportsperson as Ex-Gratia. Applicant should apply with due fill up format provide by the department and countersigned by the concerned DSO under BTR for accepted time periods bounded.
                        <p>
                        <p class="about_text">
                        <h3>History</h3>
                        The Sports & Youth Welfare department is one of the transferred subjects of Bodoland Territorial Council. After creation of BTC in the year 2003 with 4 (Four) districts and 10 (Ten) sub divisions is now governed by elected Body with its head Quarter at Kokrajhar and implementing various developmental schemes in an accelerated manner.

                        It is mentioned here that as per the para “F” of the Office Memorandum No. TAD/BTC/222/03/51 dtd. Dispur the 16th October, 2004 in respect of transferred subjects the department of Sports & Youth Welfare is being run by CHD, Sports & Youth Welfare, BTC for the greater interest of games & sports as well as in the field of development of human resources in BTC area.
                        <p>
                 </div>
                 
              </div>
              <div class="col-md-6 padding_right_0">
                        <div class="about_taital_main">
                                <div><img src="images/gov4.jpg" class="about_img" style="padding-top: 120px; padding-left:20px;"></div>       
                        </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
      <!-- about section end -->
      <h1 style="text-align: center;">OUR DIVISIONS/FIELD OFFICES</h1>
      <p style="text-align: center;">NAME & CONTACT NUMBER OF DISTRICT SPORTS OFFICERS AND SUB-ORDINATE OFFICERS UNDER SPORTS & YOUTH WELFARE DEPTT. BTC, KOKRAJHAR.</p>
      <div class="officer-container" style="background-color: cornsilk;">

         <div class="information-container">
            <div class="information-row" style="display: flex; flex-wrap: wrap; padding: 10px; border-bottom: 1px solid black;">
               <div class="information-column" style="flex: 1; padding: 10px;">
                   <strong style="font-size: 20px">Sl No.:</strong>
               </div>
               <div class="information-column" style="flex: 2; padding: 10px;">
                   <strong style="font-size: 20px">District:</strong>
               </div>
               <div class="information-column" style="flex: 3; padding: 10px;">
                   <strong style="font-size: 20px">Name of Officer:</strong>
               </div>
               <div class="information-column" style="flex: 2; padding: 10px;">
                   <strong style="font-size: 20px">Designation:</strong>
               </div>
               <div class="information-column" style="flex: 2; padding: 10px;">
                   <strong style="font-size: 20px">Contact No.:</strong>
               </div>
           </div>
            @foreach($officers as $officer)
                <div class="information-row" style="display: flex; flex-wrap: wrap; padding: 10px; border-bottom: 1px solid black;">
                    <div class="information-column" style="flex: 1; padding: 10px;">
                        <strong>{{ $officer->id }}</strong>
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px;">
                        <strong>{{ $officer->district }}</strong>
                    </div>
                    <div class="information-column" style="flex: 3; padding: 10px;">
                        <strong>{{ $officer->name }}</strong>
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px;">
                        <strong>{{ $officer->designation}}</strong>
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px;">
                        <strong>{{ $officer->contact_number}}</strong>
                    </div>
                </div>
            @endforeach
        </div>
         
      </div>
      <!-- footer section start -->
      @include('home.footer')  
   </body>
</html>