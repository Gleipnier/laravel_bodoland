<!DOCTYPE html>
<html lang="en">
   <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .swiper {
            width: 100%;
            max-width: 1200px;
            height: auto;
            margin: 0 auto;
            padding: 40px 0;
            position: relative;
        }
        .swiper-slide {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            height: auto;
        }
        .service-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .service-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }
        .service-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .service-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }
        .view-details {
            display: inline-block;
            background: #ff1493;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            align-self: flex-start;
        }
        .swiper-button-prev, .swiper-button-next {
        color: #ff1493;
        top: 50%; /* Center buttons vertically */
        transform: translateY(-50%); /* Adjust centering */
        width: 35px;
        height: 35px;
        background-color: white;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .swiper-pagination-bullet-active {
            background-color: #ff1493;
        }
        .swiper-pagination {
         position: absolute;
        bottom: -30px; /* Move the pagination below the swiper */
        left: 0;
        right: 0;
        text-align: center;
        }
        .swiper-button-next {
        right: -20px; /* Move the next button outside the swiper */
        }

        .swiper-button-prev {
        left: -20px; /* Move the prev button outside the swiper */
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   </head>
   <body>
    <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/gov1.jpg" alt="Sports Tournament" class="service-image">
            <div class="service-content">
                <div class="service-title">Sports Tournament</div>
                <div class="service-description">Organize and participate in exciting sports tournaments.</div>
                <a href="#" class="view-details">View Details</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/gov6.jpg" alt="Personal Coaching" class="service-image">
            <div class="service-content">
                <div class="service-title">Sports Tournament</div>
                <div class="service-description">Organize and participate in exciting sports tournaments.</div>
                <a href="#" class="view-details">View Details</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/gov3.jpg" alt="Personal Coaching" class="service-image">
            <div class="service-content">
                <div class="service-title">Personal Coaching</div>
                <div class="service-description">Get one-on-one coaching to improve your skills.</div>
                <a href="#" class="view-details">View Details</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/gov4.jpg" alt="Personal Coaching" class="service-image">
            <div class="service-content">
                <div class="service-title">Team Coaching</div>
                <div class="service-description">Enhance your team's performance with professional coaching.</div>
                <a href="#" class="view-details">View Details</a>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/gov4.jpg" alt="Personal Coaching" class="service-image">
            <div class="service-content">
                <div class="service-title">Team Coaching</div>
                <div class="service-description">Enhance your team's performance with professional coaching.</div>
                <a href="#" class="view-details">View Details</a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>  
   </body>
   <script type="module">
    import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";
    const swiper = new Swiper(".swiper", {
      direction: "horizontal",
      loop: true,
      slidesPerView: 4,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 15
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20
        }
      }
    });
    </script>
</html>