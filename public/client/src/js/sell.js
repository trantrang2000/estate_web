(function ($) {
  "use strict";

  document.title = "Quản lý bất động sản";

  $("#select-status").select2();
  $("#select-type").select2();
  $("#select-city").select2();
  $("#select-district").select2();
  $("#select-category").select2();

  if (window.ClassicEditor !== undefined) {
    ClassicEditor.create(document.querySelector("#description")).catch(
      (error) => {
        console.error(error);
      }
    );

    ClassicEditor.create(document.querySelector("#content")).catch((error) => {
      console.error(error);
    });
  }

  $("#dataTable").DataTable({
    order: [],
  });

  $("#form").validate({
    rules: {
      title: "required",
      price: "required",
      category_product_id: "required",
    },
    messages: {
      title: "Vui lòng nhập tên tên tiêu đề",
      price: "Vui lòng nhập giá bán/thuê",
      category_product_id: "Vui lòng nhập danh mục",
    },
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

  // Select city and provide
  localStorage.removeItem("address_2_saved");
  localStorage.removeItem("district");
  localStorage.removeItem("address_1_saved");
  let address_2 = localStorage.getItem("address_2_saved");
  if (address_2) {
    $('select[name="calc_shipping_district"] option').each(function () {
      if ($(this).text() == address_2) {
        $(this).attr("selected", "");
      }
    });
    $("input.billing_address_2").attr("value", address_2);
  }
  let district = localStorage.getItem("district");
  if (district) {
    $('select[name="calc_shipping_district"]').html(district);
    $('select[name="calc_shipping_district"]').on("change", function () {
      var target = $(this).children("option:selected");
      target.attr("selected", "");
      $('select[name="calc_shipping_district"] option')
        .not(target)
        .removeAttr("selected");
      address_2 = target.text();
      $("input.billing_address_2").attr("value", address_2);
      district = $('select[name="calc_shipping_district"]').html();
    });
  }
  let address_1 = localStorage.getItem("address_1_saved");
  $('select[name="calc_shipping_provinces"]').each(function () {
    var $this = $(this),
      stc = "";
    c.forEach(function (i, e) {
      e += +1;
      stc += "<option value=" + e + ">" + i + "</option>";
      $this.html('<option value="">Tỉnh / Thành phố</option>' + stc);
      if (address_1) {
        $('select[name="calc_shipping_provinces"] option').each(function () {
          if ($(this).text() == address_1) {
            $(this).attr("selected", "");
          }
        });
        $("input.billing_address_1").attr("value", address_1);
      }
      $this.on("change", function (i) {
        i = $this.children("option:selected").index() - 1;
        var str = "",
          r = $this.val();
        if (r != "") {
          arr[i].forEach(function (el) {
            str += '<option value="' + el + '">' + el + "</option>";
            $('select[name="calc_shipping_district"]').html(
              '<option value="">Quận / Huyện</option>' + str
            );
          });
          var address_1 = $this.children("option:selected").text();
          var district = $('select[name="calc_shipping_district"]').html();
          $('select[name="calc_shipping_district"]').on("change", function () {
            var target = $(this).children("option:selected");
            target.attr("selected", "");
            $('select[name="calc_shipping_district"] option')
              .not(target)
              .removeAttr("selected");
            var address_2 = target.text();
            $("input.billing_address_2").attr("value", address_2);
            district = $('select[name="calc_shipping_district"]').html();
          });
        } else {
          $('select[name="calc_shipping_district"]').html(
            '<option value="">Quận / Huyện</option>'
          );
          district = $('select[name="calc_shipping_district"]').html();
        }
      });
    });
  });
})(jQuery);
