(function () {
  const UI = {
    select2: function () {
      $(".js-sort").select2();
    },
    ready: function () {
      this.select2();
    },
  };

  UI.ready();
})();
