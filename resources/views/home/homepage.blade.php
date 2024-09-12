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

      <!-- banner section start -->
      @include('home.banner')
      <!-- banner section end -->

      <!-- services section start -->
      @include('home.services')
      <!-- services section end -->

      <!-- about section start -->
      @include('home.about')
      <!-- about section end -->

      <!-- client section start -->
      @include('home.notifications')
      <!-- client section end -->
      
      <!-- footer section start -->
      @include('home.footer')  
      <!-- footer section end -->
      

   </body>
</html>
