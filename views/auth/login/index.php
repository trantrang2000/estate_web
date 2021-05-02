<?php global $APP_URL; ?>
<div class="row flex-grow-1 justify-content-center container-fluid">
  <div class="col-12 col-sm-8 col-lg-4 rounded bg-white shadow p-5">
    <div class="text-center mb-5">
      <i class="bi bi-brightness-low font-40 text-warning"></i>
      <h2 class="font-weight-bold">Đăng nhập</h2>
    </div>
    <form id="form-login" action="" class="custom-input" method="POST">
      <div class="form-group">
        <input class="form-control" value="trangtth" placeholder="Tên tài khoản" name="username" />
      </div>
      <div class="form-group">
        <input type="password" value="password" class="form-control" placeholder="Mật khẩu" name="password" required />
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="remember" />
        <label class="form-check-label" for="remember">Ghi nhớ đăng nhập?</label>
      </div>
      <button type="submit" class="btn btn-warning py-2 text-white font-weight-bold mb-3">
        Đăng nhập
      </button>
    </form>
    <div class="text-center mt-4">
      <a href="#">Quên mật khẩu?</a>
      <div>
        Nếu bạn chưa có tài khoản, vui lòng <a href="<?php echo "{$APP_URL}/register" ?>">đăng ký</a>
      </div>
    </div>
  </div>
</div>