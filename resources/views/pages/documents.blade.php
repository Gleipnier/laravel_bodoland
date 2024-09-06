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

      <!-- document section start -->

      <div class="about-section layout_padding" style="padding-bottom: 60%">

      </div>
      <div class="officer-container" style="padding-bottom: 5rem">
        <h1 style="padding-left: 37rem">Documents</h1>

        
        <table class="offices-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Size</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sports & Youth</td>
                    <td>287.9 KB</td>
                    <td><a href="downloads/roadmap.pdf" download>Download</a></td>
                </tr>
                <tr>
                    <td>Vision for 2025.pdf</td>
                    <td>136.09</td>
                    <td><a href="downloads/vision2025.pdf" download>Download</a></td>
                </tr>
                <tr>
                    <td>Action Plan</td>
                    <td>369 KB</td>
                    <td><a href="downloads/actionplan.pdf" download>Download</a></td>
                </tr>
                <tr>
                    <td>Calender</td>
                    <td>169 KB</td>
                    <td><a href="downloads/calender.pdf" download>Download</a></td>
                </tr>
            </tbody>
        </table>
        </div>

      
      <!-- document section end -->
      
     

      <!-- footer section start -->
      @include('home.footer')  
   </body>
</html>