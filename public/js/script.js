document.addEventListener('DOMContentLoaded', function() {
  var swiper = new Swiper('.my-custom-swiper', {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      grabCursor: true,
      pagination: {
          el: '.my-custom-swiper .swiper-pagination',
          clickable: true,
      },
      navigation: {
          nextEl: '.my-custom-swiper .swiper-button-next',
          prevEl: '.my-custom-swiper .swiper-button-prev',
      },
      breakpoints: {
          0: { slidesPerView: 1 },
          520: { slidesPerView: 2 },
          950: { slidesPerView: 3 },
      },
  });
});