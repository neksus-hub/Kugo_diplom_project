const swiper = new Swiper(".swiper", {
  loop: false,
  slidesPerView: 4,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    576: {
      slidesPerView: 2,
    },
    756: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});
