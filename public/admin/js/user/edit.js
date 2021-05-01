$(document).ready(function () {
  document.title = "Quản lý tài khoản";

  $("#select-permission").select2();

  $("#form-user").validate({
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
});
