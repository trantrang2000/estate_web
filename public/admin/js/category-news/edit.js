$(document).ready(function () {
  document.title = "Quản lý danh mục tin tức";

  $("#form").validate({
    rules: {
      title: "required",
    },
    messages: {
      title: "Vui lòng nhập tên tên danh mục",
    },
  });
});
