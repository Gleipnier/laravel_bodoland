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

         <!-- banner section start -->
         @include('home.banner')
         <!-- banner section end -->

      </div>
      <!-- header section end -->

      <!-- service section start -->
      @include('home.services')
      <!-- service section end -->
      
      <!-- footer section start -->
      @include('home.footer')  
   </body>
</html>