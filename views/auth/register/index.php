<?php global $APP_URL; ?>
<div class="row flex-grow-1 justify-content-center container-fluid">
  <div class="col-12 col-sm-8 col-lg-4 rounded bg-white shadow p-5">
    <div class="text-center mb-5">
      <i class="bi bi-brightness-low font-40 text-warning"></i>
      <h2 class="font-weight-bold">Đăng ký</h2>
    </div>
    <form id="form-register" action="" method="POST" class="custom-input">
      <div class="form-group">
        <input class="form-control" placeholder="Tên tài khoản *" name="username" />
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Họ và tên *" name="fullname" />
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Email *" type="email" name="email" />
      </div>
      <div class="form-group">
        <input class="form-control" id="password" placeholder="Mật khẩu *" type="password" name="password" />
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Xác nhận mật khẩu *" type="password" name="confirmPassword" />
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Số điện thoại" name="phone" />
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Địa chỉ" name="address" />
      </div>
      <button type="submit" class="btn btn-warning btn-block py-2 text-white font-weight-bold mb-3">
        Tạo tài khoản
      </button>
    </form>
    <div class="text-center mt-4">
      <div>
        Nếu bạn đã có tài khoản, vui lòng <a href="<?php echo "{$APP_URL}/login" ?>">đăng nhập</a>
      </div>
    </div>
  </div>
</div>