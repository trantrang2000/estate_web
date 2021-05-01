$(document).ready(function () {
  document.title = "Quản lý tin tức";

  $("#select-category").select2();

  ClassicEditor.create(document.querySelector("#description")).catch(
    (error) => {
      console.error(error);
    }
  );

  ClassicEditor.create(document.querySelector("#content")).catch((error) => {
    console.error(error);
  });

  $("#form").validate({
    rules: {
      title: "required",
      category_news_id: "required",
    },
    messages: {
      title: "Vui lòng nhập tên bài viết",
      category_news_id: "Vui lòng chọn danh mục",
    },
  });
});
