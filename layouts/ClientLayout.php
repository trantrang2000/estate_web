<!DOCTYPE html>
<html lang="en">

<head>
  <?php global $APP_URL; ?>
  <base href="<?php echo $APP_URL ?>/">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Import css -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="public/client/src/css/core.css" />

  <!-- Import js -->
  <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script defer src="public/client/src/js/core.js"></script>
  <?php
  echo $this->headTag;
  ?>
</head>

<body>
  <?php
  include_once "models/CategoryNewsModel.php";
  include_once "models/CategoryProductModel.php";
  $categoryNewsModel = new CategoryNewsModel();
  $categoryProductModel = new CategoryProductModel();

  $categoriesNews = $categoryNewsModel->getListCategoryNews();
  $categoriesSellProduct = $categoryProductModel->getListCategoryProduct("where type = 0");
  $categoriesRentProduct = $categoryProductModel->getListCategoryProduct("where type = 1");
  ?>
  <!-- Header -->
  <header class="py-2 border-bottom d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-flex">
        <a class="text-dark mr-4" href="tel:(123) 345-6789">
          <i class="bi bi-telephone-forward mr-1"></i>
          <span>(123) 345-6789</span>
        </a>
        <div class="text-dark mr-4">
          <i class="bi bi-geo-alt mr-1"></i>
          <span>518-520 5th Ave, New York, USA </span>
        </div>
        <a class="text-dark" href="mail:support@tangibledesign.net">
          <i class="bi bi-envelope mr-1"></i>
          <span>support@tangibledesign.net</span>
        </a>
      </div>
      <?php if (empty($_SESSION['user'])) { ?>
      <div>
        <a href="login" class="text-dark mr-3">Đăng nhập</a>
        <a href="register" class="text-dark">Đăng ký</a>
      </div>
      <?php } else { ?>
      <div class="dropdown" style="z-index: 1500">
        <a class="btn dropdown-toggle" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="bi bi-person"></i>
          <small><?php echo $_SESSION['user']->username ?></small>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="sell">Bất động sản của tôi</a>
          <a class="dropdown-item" href="sell/add">Đăng bán bất động sản</a>
          <a class="dropdown-item" href="#">Tài khoản</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admin/logout">Đăng xuất</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </header>

  <!-- Nav -->
  <nav id="layoutMenu" class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
    <div class="container">
      <a class="navbar-brand" style="font-size: 35px" href="<?php echo "{$APP_URL}"; ?>">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo "{$APP_URL}/"; ?>">Trang chủ <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">Giới thiệu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProductBuy" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nhà đất bán
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownProductBuy">
              <?php foreach ($categoriesSellProduct as $item) { ?>
              <a class="dropdown-item" href="product/<?php echo $item->id ?>"><?php echo $item->title ?></a>
              <?php } ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProductEstate" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nhà đất cho thuê
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownProductEstate">
              <?php foreach ($categoriesRentProduct as $item) { ?>
              <a class="dropdown-item" href="product/<?php echo $item->id ?>"><?php echo $item->title ?></a>
              <?php } ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Tin tức
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach ($categoriesNews as $item) { ?>
              <a class="dropdown-item" href="news/<?php echo $item->id ?>"><?php echo $item->title ?></a>
              <?php } ?>
            </div>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="contact">Liên hệ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  echo $this->content;
  ?>

  <!-- Footer -->
  <footer class="text-white">
    <div class="bg-secondary py-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <h2>LOGO</h2>
            <p>
              After a time we drew near the road, and as we did so we heard
              the clatter of hoofs and saw through the tree stems three
              cavalry soldiers riding slowly towards Woking.
            </p>
            <p>
              <i class="bi bi-telephone-forward mr-1"></i>
              Số 3, Cầu Giấy, Hà Nội 
            </p>
            <p><i class="bi bi-geo-alt mr-1"></i> (123) 345-6789</p>
            <p>
              <i class="bi bi-envelope mr-2"></i>support@tangibledesing.net
            </p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <h4 class="text-uppercase mb-4">Bài viết mới nhất</h4>
            <div>
              <div class="py-2 border-bottom">
                <a href="#" class="text-white">October 2021</a>
              </div>
              <div class="py-2 border-bottom">
                <a href="#" class="text-white">September 2021</a>
              </div>
              <div class="py-2 border-bottom">
                <a href="#" class="text-white">August 2021</a>
              </div>
              <div class="py-2 border-bottom">
                <a href="#" class="text-white">July 2021</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <h4 class="text-uppercase mb-4">Tags</h4>
            <div class="d-flex flex-wrap">
              <div class="px-3 py-1 border mr-2 mb-2">Wifi 2</div>
              <div class="px-3 py-1 border mr-2 mb-2">Air conditioning</div>
              <div class="px-3 py-1 border mr-2 mb-2">Fans</div>
              <div class="px-3 py-1 border mr-2 mb-2">Porch</div>
              <div class="px-3 py-1 border mr-2 mb-2">Pato</div>
              <div class="px-3 py-1 border mr-2 mb-2">High ceiling</div>
              <div class="px-3 py-1 border mr-2 mb-2">Wifi</div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <h4 class="text-uppercase mb-4">Mạng xã hội</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-dark text-center py-3">&copy; Copyright 2021</div>
  </footer>

  <!-- Back to top -->
  <div id="back-to-top" class="custom-back flex-center">
    <i class="bi bi-chevron-up"></i>
  </div>
</body>

</html>