<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')
   </head>
   <style>
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center
    }
    .container .box {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .container .box .dream {
        display: flex;
        flex-direction: column;
        width: 33%;
    }
    .container .box .dream .image {
        width: 100%;
        height: auto;
        padding-bottom: 15px;
        border-radius: 5px;
        cursor: pointer;
        overflow: hidden;
    }
    .container .box .dream .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.2s linear;
    }
    .container .box .dream .image:hover img {
        transform: scale(1.1);
    }
    .container .box .popup-image {
        position: fixed;
        top: 5%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 100;
        display: none;
    }
    .container .box .popup-image span {
        position: absolute;
        top: 20%;
        left: 53%;
        right: 10px;
        font-size: 60px;
        font-weight: bolder;
        color: #fff;
        cursor: pointer;
        z-index: 100;
    }
    .container .box .popup-image img {
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border:5px solid #fff;
        border-radius: 5px;
        width: 750px;
        object-fit: cover;
    }
    @media only screen and (max-width: 768px) {
        .container .box {
        flex-direction: column;
        }
        .container .box .dream {
            width: 100%;
        }
        .container .box .popup-image img {
            width: 95%;
        }
    }
    @media only screen and (max-width: 643px) {
        .container .box {
        flex-direction: column;
        }
        .container .box .dream {
            width: 100%;
        }
        .container .box .popup-image img {
            width: 95%;
        }
    }

      /* .gallery-container {
  padding: 20px;
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 20px;
}

.gallery-item {
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.gallery-item:hover img {
  transform: scale(1.1);
} */

/* Responsive adjustments */
/* @media screen and (max-width: 768px) {
  .gallery-grid {
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  }
}

@media screen and (max-width: 480px) {
  .gallery-grid {
    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
  }
} */
    </style>
   <body>

      <!-- header section start -->
      <div class="header_section">

         @include('home.header')

      </div>
      <!-- header section end -->

      <!-- gallery section start -->

      <div class="about-section layout_padding" style="padding-bottom: 2%"></div>

      <div class="container">
        <div class="box">
            <div class="dream">
                <img class="image" src="images/gov1.jpg" alt="Gallery Image 1">
                <img class="image" src="images/gov2.jpg" alt="Gallery Image 2">
                <img class="image" src="images/gov3.jpg" alt="Gallery Image 3">
                <img class="image" src="images/gov4.jpg" alt="Gallery Image 4">
            </div>
            <div class="dream">
                <img class="image" src="images/gov2.jpg" alt="Gallery Image 1">
                <img class="image" src="images/gov7.jpg" alt="Gallery Image 2">
                <img class="image" src="images/gov5.jpg" alt="Gallery Image 3">
                <img class="image" src="images/gov6.jpg" alt="Gallery Image 4">
            </div>
            <div class="dream">
                <img class="image" src="images/gov1.jpg" alt="Gallery Image 1">
                <img class="image" src="images/gov2.jpg" alt="Gallery Image 2">
                <img class="image" src="images/gov3.jpg" alt="Gallery Image 3">
                <img class="image" src="images/gov4.jpg" alt="Gallery Image 4">
            </div>
            <div class="popup-image">
                <span>&times;</span>
                <img src="images/gov1.jpg" alt="Gallery Image 1">
            </div>
        </div>
      </div>
      {{-- <div class="gallery-container">
      <div class="gallery-grid">
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
      </div> --}}

       


      
      <!-- gallery section end -->
      
     

      <!-- footer section start -->
      <div class="about-section layout_padding" style="padding-bottom: 20%">

      </div>
        @include('home.footer')
        <script>
            document.querySelectorAll(".dream img").forEach(image=>{
                  image.onclick=()=>{
                        document.querySelector(".popup-image").style.display="block";
                        document.querySelector(".popup-image img").src=image.getAttribute("src");
                  }
            });
            document.querySelector(".popup-image span").onclick=()=>{
                  document.querySelector(".popup-image").style.display="none";
            };
      </script>
   </body>
</html>