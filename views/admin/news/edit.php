<script defer src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script defer src="public/admin/js/<?php echo $path ?>/edit.js"></script>

<main class="container-fluid">
  <h1 class="mt-4"><?php echo $title ?></h1>
  <form id="form" action="<?php echo $formAction ?>" method="POST" class="custom-input" enctype="multipart/form-data">
    <div class="d-flex justify-content-between mb-2">
      <a href="admin/<?php echo $path ?>" class="btn btn-secondary">Quay lại</a>
      <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
    </div>
    <div class="p-3 border shadow-sm rounded mt-4">
      <div class="row">
        <div class="col-12 col-md-9">
          <div class="form-group">
            <label for="title">Tên bài viết *</label>
            <input id="title" class="form-control" placeholder="example" name="title" required value="<?php echo $record->title ?? '' ?>" />
          </div>
          <div class="custom-select2 mb-3">
            <label>Danh mục *</label>
            <select id="select-category" class="form-control" name="category_news_id">
              <option value="">-- Chọn danh mục --</option>
              <?php foreach ($categories as $category) { ?>
                <option value="<?php echo $category->id ?>" <?php if (!empty($record) && $record->category_news_id == $category->id) { ?> selected <?php } ?>>
                  <?php echo $category->title ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Mô tả ngắn</label>
            <textarea name="description" id="description">
              <?php echo $record->description ?? '' ?>
            </textarea>
          </div>
          <div class="form-group">
            <label>Nội dung</label>
            <textarea name="content" id="content">
              <?php echo $record->content ?? '' ?>
            </textarea>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="form-group">
            <div class="font-weight-medium mb-2">Hình ảnh</div>
            <label class="input-upload custom-upload" for="upload">
              <i class="fas fa-upload"></i>
              <img class="<?php if (empty($record)) { ?> d-none <?php } ?> img-fluid" src="<?php echo $record->thumbnail ?? '' ?>" alt="image upload">
              <input accept="image/*" type="file" id="upload" name="thumbnail" hidden />
            </label>
          </div>
          <div class="form-group">
            <label for="author">Tác giả</label>
            <input id="author" class="form-control" placeholder="Tác giả" name="author" value="<?php echo $record->author ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="source">Nguồn</label>
            <input id="source" class="form-control" placeholder="Nguồn" name="source" value="<?php echo $record->source ?? '' ?>" />
          </div>
        </div>
      </div>
    </div>
  </form>
</main>