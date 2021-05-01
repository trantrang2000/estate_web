(function () {
  const UI = {
    slider: function () {
      new Swiper("#main-product .swiper-container", {
        loop: true,
        spaceBetween: 20,
        autoHeight: true,
        autoplay: false,
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
          1600: {
            slidesPerView: 4,
          },
        },
      });
      new Swiper("#lastest-product .swiper-container", {
        loop: true,
        spaceBetween: 20,
        autoHeight: true,
        autoplay: false,
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
          1600: {
            slidesPerView: 4,
          },
        },
      });
      new Swiper("#feedback .swiper-container", {
        loop: true,
        spaceBetween: 20,
        autoHeight: true,
        autoplay: false,
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
      new Swiper("#news .swiper-container", {
        loop: true,
        spaceBetween: 20,
        autoHeight: true,
        autoplay: false,
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
          1600: {
            slidesPerView: 4,
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
