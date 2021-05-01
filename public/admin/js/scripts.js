(function ($) {
  "use strict";

  // Add active state to sidbar nav links
  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
  $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
    if (this.href === path) {
      $(this).addClass("active");
    }
  });

  // Toggle the side navigation
  $("#sidebarToggle").on("click", function (e) {
    e.preventDefault();
    $("body").toggleClass("sb-sidenav-toggled");
  });

  $(".input-upload input[type=file]").on("change", function (e) {
    const file = e.currentTarget.files ? e.currentTarget.files[0] : null;
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        const imagePreview = $(this).siblings()[1];
        $(imagePreview).attr("src", e.target.result);
        $(imagePreview).removeClass("d-none");
      };
      reader.readAsDataURL(file);
    }
  });
})(jQuery);
