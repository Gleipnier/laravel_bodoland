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
            @foreach($document as $docu)
                <div class="information-row" style="display: flex; flex-wrap: wrap; padding: 10px; border-bottom: 1px solid black;">
                    <div class="information-column" style="flex: 1; padding: 10px;">
                        <strong>ID:</strong> {{ $docu->id }}
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px;">
                        <strong>Title:</strong> {{ $docu->title }}
                    </div>
                    <div class="information-column" style="flex: 3; padding: 10px;">
                        <strong>Size Of File:</strong> {{ $docu->size }}
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px;">
                        <strong>Published Date:</strong> {{ \Carbon\Carbon::parse($docu->created_at)->format('Y-m-d')}}
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