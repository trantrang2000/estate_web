(function () {
  const UI = {
    slider: function () {
      new Swiper("#similar-product .swiper-container", {
        loop: true,
        spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 3,
          },
        },
      });
    },
    ready: function () {
      this.slider();
    },
  };

  UI.ready();
})();
