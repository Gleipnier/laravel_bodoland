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

      <!-- document section start -->

      {{-- <div class="about-section layout_padding" style="padding-bottom: 60%">

      </div> --}}
      <h1 style="text-align: center">Documents</h1>

      <div class="officer-container" style="padding-bottom: 5rem">

        
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