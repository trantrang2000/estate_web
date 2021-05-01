$(document).ready(function () {
  document.title = "Quản lý danh mục bất động sản";

  $("#select-type").select2();

  $("#form").validate({
    rules: {
      title: "required",
    },
    messages: {
      title: "Vui lòng nhập tên tên danh mục",
    },
  });
});
