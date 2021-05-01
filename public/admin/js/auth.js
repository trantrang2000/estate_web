(function () {
  window.$toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });

  const UI = {
    toast: function () {
      const urlParams = new URLSearchParams(window.location.search);
      const action = urlParams.get("action");
      const controller = urlParams.get("controller");

      if (controller === "login" && action === "fail") {
        window.$toast.fire({
          icon: "error",
          title: "Thông tin tài khoản chưa đúng.",
        });
        return;
      }

      if (controller === "register" && action === "fail") {
        window.$toast.fire({
          icon: "error",
          title: "Tên tài khoản đã tồn tại.",
        });
        return;
      }
    },
    login: function () {
      $("#form-login").validate({
        rules: {
          username: "required",
          password: "required",
        },
        messages: {
          username: "Vui lòng nhập tên tài khoản",
          password: "Vui lòng nhập mật khẩu",
        },
      });
    },
    register: function () {
      $("#form-register").validate({
        rules: {
          username: "required",
          fullname: "required",
          email: "required",
          password: "required",
          confirmPassword: {
            equalTo: "#password",
          },
        },
        messages: {
          username: "Vui lòng nhập tên tài khoản",
          fullname: "Vui lòng nhập họ và tên",
          email: "Vui lòng nhập email",
          password: "Vui lòng nhập mật khẩu",
          confirmPassword: "Mật khẩu nhập lại không đúng",
        },
      });
    },
    ready: function () {
      this.toast();
      this.login();
      this.register();
    },
  };

  UI.ready();
})();
