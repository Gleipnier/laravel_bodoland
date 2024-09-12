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
      <h1 style="text-align: center; padding-top: 120px">Documents</h1>

      <div class="officer-container" style="padding-bottom: 5rem; background-color: cornsilk;">
        <div class="information-container">
            <div class="information-row" style="display: flex; flex-wrap: wrap; padding: 10px; border-bottom: 1px solid black;">
                <div class="information-column" style="flex: 1; padding: 10px;">
                    <strong style="font-size: 20px">ID:</strong>
                </div>
                <div class="information-column" style="flex: 2; padding: 10px;">
                    <strong style="font-size: 20px">Title:</strong>
                </div>
                <div class="information-column" style="flex: 3; padding: 10px;">
                    <strong style="font-size: 20px">Size Of File:</strong>
                </div>
                <div class="information-column" style="flex: 2; padding: 10px;">
                    <strong style="font-size: 20px">Published Date:</strong>
                </div>
                <div class="information-column" style="flex: 1; padding: 10px;">
                    <strong style="font-size: 20px">Download</strong>
                </div>
            </div>
            @foreach($document as $docu)
                <div class="information-row" style="display: flex; flex-wrap: wrap; padding: 10px; border-bottom: 1px solid black;">
                    <div class="information-column" style="flex: 1; padding: 10px;">
                        <strong>{{ $docu->id }}</strong>
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px;">
                        <strong>{{ $docu->title }}</strong>
                    </div>
                    <div class="information-column" style="flex: 3; padding: 10px;">
                        <strong>{{ $docu->size }}</strong>
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px;">
                        <strong>{{ \Carbon\Carbon::parse($docu->created_at)->format('Y-m-d')}}</strong>
                    </div>
                    <div class="information-column" style="flex: 1; padding: 10px;">
                        <a href="{{ asset($docu->document) }}" download>Download</a>
                    </div>
                </div>
            @endforeach
        </div>
      </div>

      
      <!-- document section end -->
      
     

      <!-- footer section start -->
      @include('home.footer')  
   </body>
</html>