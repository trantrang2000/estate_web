$(document).ready(function () {
  document.title = "Quản lý slide trang chủ";

  $("#select-status").select2();

  $("#form").validate({
    rules: {
      title: "required",
    },
    messages: {
      title: "Vui lòng nhập tên tên danh mục",
    },
  });
});
