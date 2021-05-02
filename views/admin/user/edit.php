<script defer src="public/admin/js/<?php echo $path ?>/edit.js"></script>
<?php include "utils/constants.php" ?>

<main class="container-fluid">
  <h1 class="mt-4"><?php echo $title ?></h1>
  <form id="form-user" action="<?php echo $formAction ?>" method="POST" class="custom-input">
    <div class="d-flex justify-content-between mb-2">
      <a href="admin/user" class="btn btn-secondary">Quay lại</a>
      <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
    </div>
    <div class="p-3 border shadow-sm rounded mt-4">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label for="username">Tên tài khoản *</label>
            <input id="username" class="form-control" placeholder="example" name="username" required value="<?php echo $record->username ?? '' ?>" <?php if (!empty($record)) { ?> disabled <?php } ?> />
          </div>
          <div class="custom-select2 mb-3">
            <label>Phân quyền</label>
            <select id="select-permission" class="form-control" name="permission">
              <?php foreach ($permissions as $key => $value) { ?>
                <option value="<?php echo $key ?>" <?php if (isset($record) && $record->permission == $key) { ?>selected<?php } ?>><?php echo $value ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="fullname">Họ và tên *</label>
            <input id="fullname" class="form-control" placeholder="Họ và tên *" name="fullname" required value="<?php echo $record->fullname ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input id="email" class="form-control" placeholder="example@gmail.com" type="email" name="email" required value="<?php echo $record->email ?? '' ?>" />
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label for="password">Mật khẩu *</label>
            <input id="password" class="form-control" placeholder="********" id="password" type="password" name="password" required <?php if (!empty($record)) { ?> disabled <?php } ?> />
          </div>
          <div class="form-group">
            <label for="confirmPassword">Xác nhận mật khẩu</label>
            <input class="form-control" placeholder="********" type="password" name="confirmPassword" required <?php if (!empty($record)) { ?> disabled <?php } ?> />
          </div>
          <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input id="phone" class="form-control" placeholder="0973793xxx" name="phone" value="<?php echo $record->phone ?? '' ?>" />
          </div>
          <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input id="address" class="form-control" placeholder="44 Street example" name="address" value="<?php echo $record->address ?? '' ?>" />
          </div>
        </div>
      </div>
    </div>
  </form>
</main>