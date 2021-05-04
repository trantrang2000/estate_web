<script defer src="public/admin/js/<?php echo $path ?>/edit.js"></script>
<?php include "utils/constants.php" ?>

<main class="container-fluid">
  <h1 class="mt-4"><?php echo $title ?></h1>
  <form id="form" action="<?php echo $formAction ?>" method="POST" class="custom-input" enctype="multipart/form-data">
    <div class="d-flex justify-content-between mb-2">
      <a href="admin/<?php echo $path ?>" class="btn btn-secondary">Quay lại</a>
      <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
    </div>
    <div class="p-3 border shadow-sm rounded mt-4">
      <div class="form-group">
        <div class="font-weight-medium mb-2">Hình ảnh</div>
        <label class="input-upload custom-upload" for="upload">
          <i class="fas fa-upload"></i>
          <img class="<?php if (empty($record)) { ?> d-none <?php } ?> img-fluid" src="<?php echo $record->thumbnail ?? '' ?>" alt="image upload">
          <input accept="image/*" type="file" id="upload" name="thumbnail" hidden />
        </label>
      </div>
      <div class="form-group">
        <label for="title">Tiêu đề *</label>
        <input id="title" class="form-control" placeholder="example" name="title" required value="<?php echo $record->title ?? '' ?>" />
      </div>
      <div class="form-group">
        <label for="url">Đường dẫn</label>
        <input id="url" class="form-control" placeholder="https://example.com.vn" name="url" value="<?php echo $record->url ?? '' ?>" />
      </div>
      <div class="custom-select2 mb-3">
        <label>Trạng thái</label>
        <select id="select-status" class="form-control" name="status">
          <?php foreach ($status as $key => $value) { ?>
            <option value="<?php echo $key ?>" <?php if (isset($record) && $record->status == $key) { ?>selected<?php } ?>><?php echo $value ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="custom-select2 mb-3">
        <label>Trang hiển thị</label>
        <select id="select-page" class="form-control" name="page">
          <?php foreach ($bannerPages as $key => $value) { ?>
            <option value="<?php echo $key ?>" <?php if (isset($record) && $record->page == $key) { ?>selected<?php } ?>>
              <?php echo $value ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="custom-select2 mb-3">
        <label>Vị trí hiển thị</label>
        <select id="select-position" class="form-control" name="position">
          <?php foreach ($bannerPositions as $key => $value) { ?>
            <option value="<?php echo $key ?>" <?php if (isset($record) && $record->position == $key) { ?>selected<?php } ?>><?php echo $value ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </form>
</main>