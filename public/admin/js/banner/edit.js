$(document).ready(function () {
  document.title = "Quản lý banner marketing";

  $("#select-page").select2();
  $("#select-position").select2();
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
