<!DOCTYPE html>
<html lang="en">

<head>
  <?php global $APP_URL; ?>
  <base href="<?php echo $APP_URL ?>/">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Import font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Import css -->
  <link href="public/admin/css/styles.css" rel="stylesheet" />
  <link href="public/admin/css/custom.css" rel="stylesheet" />
  <link rel="stylesheet" href="public/client/src/css/core.css" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Import js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
  </script>
  <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script defer src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script defer src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
  </script>
  <script defer src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script defer src="public/admin/js/scripts.js"></script>
  <?php
  echo $this->headTag;
  ?>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo "{$APP_URL}" ?>" target="_blank">LOGO</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <div class="ml-auto dropdown">
      <a class="btn btn-secondary dropdown-toggle" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">Cài đặt hệ thống</a>
        <a class="dropdown-item" href="#">Tài khoản</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo "{$APP_URL}/admin/logout" ?>">Đăng xuất</a>
      </div>
    </div>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Thống kê</div>
            <a class="nav-link" href="admin" ?>
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Quản lý</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              Tin tức
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="admin/category-news">Danh mục tin tức</a>
                <a class="nav-link" href="admin/news">Danh sách tin tức</a>
              </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
              Bất động sản
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link" href="admin/category-product">Danh mục bất động sản</a>
                <a class="nav-link" href="admin/product">Danh sách bất động sản</a>
              </nav>
            </div>
            <a class="nav-link" href="admin/user" ?>
              <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
              Tài khoản
            </a>
            <a class="nav-link" href="admin/banner" ?>
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Banner
            </a>
            <a class="nav-link" href="admin/slide">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Slide
            </a>
            <div class="sb-sidenav-menu-heading">Hệ thống</div>
            <a class="nav-link" href="admin/setting">
              <div class="sb-nav-link-icon"><i class="fas fa-setting"></i></div>
              Cài đặt hệ thống
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Đăng nhập với:</div>
          <?php echo $_SESSION['user']->username ?>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <?php
      echo $this->content;
      ?>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="text-muted small">Copyright &copy; 2021</div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>