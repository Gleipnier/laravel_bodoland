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

      <!-- notice section start -->

      {{-- <div class="about-section layout_padding" style="padding-bottom: 60%">

      </div> --}}
      <h1 style="text-align: center; padding-top:120px">Department Notice</h1>

    <div class="officer-container" style="padding-bottom: 5rem; background-color: lightcyan;">

        <div class="information-container">
            <div class="information-row" style="display: flex; flex-wrap: wrap; padding: 10px; border-bottom: 1px solid black;">
                <div class="information-column" style="flex: 1; padding: 10px;">
                    <strong  style="font-size: 20px">ID:</strong>
                </div>
                <div class="information-column" style="flex: 2; padding: 10px;">
                    <strong  style="font-size: 20px">Title:</strong>
                </div>
                <div class="information-column" style="flex: 3; padding: 10px;">
                    <strong  style="font-size: 20px">Description:</strong>
                </div>
                <div class="information-column" style="flex: 2; padding: 10px;">
                    <strong  style="font-size: 20px">Published Date:</strong>
                </div>
                <div class="information-column" style="flex: 1; padding: 10px;">
                    <strong  style="font-size: 20px">Download:</strong>
                </div>
            </div>
            @foreach($information as $info)
                <div class="information-row" style="display: flex; flex-wrap: wrap; padding: 10px; border-bottom: 1px solid black;">
                    <div class="information-column" style="flex: 1; padding: 10px; color:#36454F;">
                        {{ $info->id }}
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px; color:#36454F;">
                        {{ $info->title }}
                    </div>
                    <div class="information-column" style="flex: 3; padding: 10px; color:#36454F;">
                       {{ $info->description }}
                    </div>
                    <div class="information-column" style="flex: 2; padding: 10px; color:#36454F;">
                        {{ \Carbon\Carbon::parse($info->created_at)->format('Y-m-d')}}
                    </div>
                    <div class="information-column" style="flex: 1; padding: 10px;">
                        <a href="{{ asset($info->document) }}" download>Download</a>
                    </div>
                </div>
            @endforeach
        </div>    
    </div>

    
    <!-- notice section end -->
      
      

      <!-- footer section start -->
      @include('home.footer')  
   </body>
</html>