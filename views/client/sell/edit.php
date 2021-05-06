<script defer src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script defer src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
</script>
<script defer src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script defer src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
<script defer src="public/client/src/js/<?php echo $path ?>.js"></script>
<?php include "utils/constants.php" ?>

<main class="container-fluid">
  <h1 class="mt-4"><?php echo $title ?></h1>
  <form id="form" action="<?php echo $formAction ?>" method="POST" class="custom-input" enctype="multipart/form-data">
    <div class="d-flex justify-content-between mb-2">
      <a href="<?php echo $path ?>" class="btn btn-secondary">Quay lại</a>
      <button class="btn btn-warning text-white" type="submit">Lưu thay đổi</button>
    </div>
    <div class="p-3 border shadow-sm rounded mt-4">
      <div class="row">
        <div class="col-12 col-md-9">
          <div class="form-group">
            <label for="title">Tiêu đề *</label>
            <input id="title" class="form-control" placeholder="example..." name="title" required
              value="<?php echo $record->title ?? '' ?>" />
          </div>
          <div class="custom-select2 mb-3">
            <select id="select-category" class="form-control" name="category_product_id">
              <option value="">-- Chọn danh mục --</option>
              <?php foreach ($categories as $category) { ?>
              <option value="<?php echo $category->id ?>"
                <?php if (!empty($record) && $record->category_product_id == $category->id) { ?> selected <?php } ?>>
                <?php echo $category->title ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label for="price">Giá bán *</label>
                <input id="price" min="0" class="form-control" type="number" name="price"
                  value="<?php echo $record->price ?? '' ?>" />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="custom-select2 mb-3">
                <label>Loại nhà</label>
                <select id="select-type" class="form-control" name="type">
                  <?php foreach ($typesHouse as $key => $value) { ?>
                  <option value="<?php echo $key ?>"
                    <?php if (isset($record) && $record->status == $key) { ?>selected<?php } ?>><?php echo $value ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="custom-select2 mb-3">
                <label>Tỉnh/Thành phố</label>
                <select id="select-city" class="form-control" name="calc_shipping_provinces">
                  <option value="">Tỉnh/Thành phố</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="custom-select2 mb-3">
                <label>Quận/Huyện</label>
                <select id="select-district" class="form-control" name="calc_shipping_district">
                  <option value="">Quận/Huyện</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input id="address" class="form-control" placeholder="example..." name="address"
                  value="<?php echo $record->address ?? '' ?>" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="font-weight-medium mb-2">Tính năng</div>
            <div class="row">
              <?php $features = !empty($record->features) ? json_decode($record->features) : null; ?>
              <?php foreach ($featuresProduct as $key => $value) { ?>
              <div class="col-4">
                <div class="form-check">
                  <input class="form-check-input" value="<?php echo $key ?>" type="checkbox"
                    name="features[<?php echo $key ?>]" id="features[<?php echo $key ?>]"
                    <?php if (isset($features->$key)) { ?> checked <?php } ?> />
                  <label class="form-check-label" for="features[<?php echo $key ?>]">
                    <?php echo $value ?>
                  </label>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label for="description">Mô tả ngắn</label>
            <textarea name="description" id="description">
              <?php echo $record->description ?? '' ?>
            </textarea>
          </div>
          <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea name="content" id="content">
              <?php echo $record->content ?? '' ?>
            </textarea>
          </div>
          <input class="billing_address_1" name="city" value="<?php echo $record->city ?? '' ?>" hidden />
          <input class="billing_address_2" name="district" value="<?php echo $record->district ?? '' ?>" hidden />
          <input name="user_id" value="<?php echo $_SESSION['user']->id ?>" hidden />
        </div>
        <div class="col-12 col-md-3">
          <div class="form-group">
            <div class="font-weight-medium mb-2">Hình ảnh</div>
            <label class="input-upload custom-upload" for="upload">
              <i class="fas fa-upload"></i>
              <img class="<?php if (!isset($record)) { ?> d-none <?php } ?> img-fluid"
                src="<?php echo $record->thumbnail ?? '' ?>" alt="image upload">
              <input accept="image/*" type="file" id="upload" name="thumbnail" hidden />
            </label>
          </div>
          <div class="form-group">
            <label for="direction">Hướng nhà</label>
            <input id="direction" class="form-control" placeholder="Đông Nam..." name="direction"
              value="<?php echo $record->direction ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="garages">Garages</label>
            <input id="garages" min="0" class="form-control" type="number" name="garages"
              value="<?php echo $record->garages ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="floors">Số tầng</label>
            <input id="floors" min="1" class="form-control" type="number" name="floors"
              value="<?php echo $record->floors ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="bedrooms">Số phòng ngủ</label>
            <input id="bedrooms" min="0" class="form-control" type="number" name="bedrooms"
              value="<?php echo $record->bedrooms ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="bathrooms">Số phòng tắm</label>
            <input id="bathrooms" min="0" class="form-control" type="number" name="bathrooms"
              value="<?php echo $record->bathrooms ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="size">Diện tích</label>
            <input id="size" min="0" class="form-control" type="number" name="size"
              value="<?php echo $record->size ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="year_build">Năm xây dựng</label>
            <input id="year_build" class="form-control" type="number" name="year_build"
              value="<?php echo $record->year_build ?? '' ?>" />
          </div>
        </div>
      </div>
    </div>
  </form>
</main>