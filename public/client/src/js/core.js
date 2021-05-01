(function () {
  const win = window,
    doc = document.documentElement,
    body = document.body;

  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
  $("#layoutMenu a.nav-link").each(function () {
    if (this.href === path) {
      $(this).addClass("active");
    }
  });

  const UI = {
    backToTop: function () {
      const btnBackTop = document.getElementById("back-to-top"),
        offset = 400;

      btnBackTop.addEventListener("click", function () {
        doc.scrollTop = 0;
      });
      win.addEventListener("scroll", function () {
        btnBackTop.style.opacity = doc.scrollTop > offset ? "1" : "0";
      });
    },
    select2: function () {
      $(".js-filter-status").select2();
      $(".js-filter-type").select2();
    },
    ready: function () {
      this.backToTop();
      this.select2();
    },
  };

  UI.ready();
})();
