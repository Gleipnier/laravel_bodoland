<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')
   </head>
   <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 0px;
            background-color: #f4f4f4;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 16px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            padding-bottom: 100%; /* Creates a 1:1 aspect ratio */
        }

        .gallery-item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
    </style>
   <body>

      <!-- header section start -->
      <div class="header_section">

         @include('home.header')

         <!-- banner section start -->
         <!-- banner section end -->

      </div>
      <!-- header section end -->

      <!-- gallery section start -->
      {{-- <div class="about-section layout_padding" style="padding-bottom: 50%">

      </div> --}}
      <h1>Simple Image Gallery</h1>
      <div class="gallery">
          <div class="gallery-item">
              <img src="images/gov1.jpg" alt="Gallery Image 1">
          </div>
          <div class="gallery-item">
              <img src="images/gov2.jpg" alt="Gallery Image 2">
          </div>
          <div class="gallery-item">
              <img src="images/gov3.jpg" alt="Gallery Image 3">
          </div>
          <div class="gallery-item">
              <img src="images/gov4.jpg" alt="Gallery Image 4">
          </div>
          <div class="gallery-item">
              <img src="images/gov5.jpg" alt="Gallery Image 5">
          </div>
          <div class="gallery-item">
              <img src="images/gov6.jpg" alt="Gallery Image 6">
          </div>
          <div class="gallery-item">
              <img src="images/gov7.jpg" alt="Gallery Image 7">
          </div>
          <div class="gallery-item">
              <img src="images/gov8.jpg" alt="Gallery Image 8">
          </div>
          <div class="gallery-item">
              <img src="images/gov9.jpg" alt="Gallery Image 9">
          </div>
      </div>

       


      
      <!-- gallery section end -->
      
     

      <!-- footer section start -->
      <div class="about-section layout_padding" style="padding-bottom: 20%">

      </div>
        @include('home.footer')
   </body>
</html>