<script defer src="public/admin/js/<?php echo $path ?>/edit.js"></script>
<?php include "utils/constants.php" ?>

<main class="container-fluid">
  <h1 class="mt-4"><?php echo $title ?></h1>
  <form id="form" action="<?php echo $formAction ?>" method="POST" class="custom-input">
    <div class="d-flex justify-content-between mb-2">
      <a href="admin/<?php echo $path ?>" class="btn btn-secondary">Quay lại</a>
      <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
    </div>
    <div class="p-3 border shadow-sm rounded mt-4">
      <div class="form-group">
        <label for="title">Tên danh mục *</label>
        <input id="title" class="form-control" placeholder="example" name="title" required value="<?php echo $record->title ?? '' ?>" />
      </div>
      <div class="custom-select2 mb-3">
        <label>Loại danh mục</label>
        <select id="select-type" class="form-control" name="type">
          <?php foreach ($typesCategoryProduct as $key => $value) { ?>
            <option value="<?php echo $key ?>" <?php if (isset($record) && $record->type == $key) { ?>selected<?php } ?>>
              <?php echo $value ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </form>
</main>