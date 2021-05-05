<?php global $APP_URL; ?>
<title><?php echo $data->title ?></title>
<?php include "utils/constants.php" ?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <div class="container">
    <ol class="breadcrumb bg-transparent pl-0">
      <li class="breadcrumb-item"><a href="<?php echo $APP_URL ?>">Trang chủ</a></li>
      <li class="breadcrumb-item">Bất động sản</li>
      <li class="breadcrumb-item active" aria-current="page">
        <?php echo $data->title ?>
      </li>
    </ol>
  </div>
</nav>

<!-- Main -->
<section id="content" class="container mb-5">
  <!-- Fancybox -->
  <div class="custom-fancybox mb-5">
    <div class="rounded overflow-hidden" style="max-height: 500px">
      <a href="https://source.unsplash.com/sGEHs-HY-Oo/1500x1000" data-fancybox="images-preview" data-width="1500"
        data-height="1000" data-thumbs='{"autoStart":true}'>
        <img src="<?php echo $data->thumbnail ?>" alt="" class="img-fluid" />
      </a>
    </div>
    <div style="display: none">
      <a href="https://source.unsplash.com/Ai2TRdvI6gM/1500x1000" data-fancybox="images-preview" data-width="1500"
        data-height="1000" data-thumb="https://source.unsplash.com/Ai2TRdvI6gM/240x160"></a>

      <a href="https://source.unsplash.com/Hau6K6VP5vs/1500x1000" data-fancybox="images-preview" data-width="1500"
        data-height="1000" data-thumb="https://source.unsplash.com/Hau6K6VP5vs/240x160"></a>

      <a href="https://source.unsplash.com/muFaKaGw0eE/1500x1000" data-fancybox="images-preview" data-width="1500"
        data-height="1000" data-thumb="https://source.unsplash.com/muFaKaGw0eE/240x160"></a>

      <a href="https://source.unsplash.com/eXHeq48Z-Q4/1500x1000" data-fancybox="images-preview" data-width="1500"
        data-height="1000" data-thumb="https://source.unsplash.com/eXHeq48Z-Q4/240x160"></a>

      <a href="https://source.unsplash.com/hBYzBU1xP6s/1500x1000" data-fancybox="images-preview" data-width="1500"
        data-height="1000" data-thumb="https://source.unsplash.com/hBYzBU1xP6s/240x160"></a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="shadow-sm border p-3 rounded mb-4">
        <div class="d-flex align-items-center mb-2">
          <span class="badge badge-primary mr-2">Sale</span>
          <span class="badge badge-success mr-2">Hot</span>
          <span class="mr-2">
            <i class="bi bi-clock"></i>
            <?php echo date_format(date_create($data->created_at), "d/M/Y"); ?>
          </span>
          <span>
            <i class="bi bi-eye"></i>
            <?php echo $data->views ?> lượt xem
          </span>
        </div>
        <h1 class="font-weight-bold mb-3"><?php echo $data->title ?></h1>
        <h4 class="text-right font-weight-bold text-danger"><?php echo number_format($data->price) ?>đ</h4>
        <address>
          <i class="bi bi-geo-alt mr-1"></i>
          <?php echo $data->address ?>
        </address>
        <p class="pl-3 border-left border-warning">
          <?php echo stripslashes($data->description) ?>
        </p>
      </div>
      <div class="custom-overview shadow-sm border p-3 rounded mb-4">
        <h5 class="font-weight-bold">Tổng quát</h5>
        <div class="row">
          <div class="col-6 col-md-3 mb-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-award shadow-sm text-warning"></i>
              <div>
                <div>ID</div>
                <div><b><?php echo $data->id ?></b></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-back shadow-sm text-warning"></i>
              <div>
                <div>LOẠI NHÀ ĐẤT</div>
                <div><b><?php echo $typesHouse[$data->type] ?></b></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-book shadow-sm text-warning"></i>
              <div>
                <div>PHÒNG NGỦ</div>
                <div><b><?php echo $data->bedrooms ?></b></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-clipboard-data shadow-sm text-warning"></i>
              <div>
                <div>PHÒNG TẮM</div>
                <div><b><?php echo $data->bathrooms ?></b></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-cloud-moon-fill shadow-sm text-warning"></i>
              <div>
                <div>GARAGES</div>
                <div><b><?php echo $data->garages ?></b></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-droplet shadow-sm text-warning"></i>
              <div>
                <div>DIỆN TÍCH</div>
                <div><b><?php echo $data->size ?>m<sup>2</sup></b></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-hammer shadow-sm text-warning"></i>
              <div>
                <div>NĂM XÂY DỰNG</div>
                <div><b><?php echo $data->year_build ?></b></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shadow-sm border p-3 rounded mb-4">
        <h5 class="font-weight-bold">Địa chỉ cụ thể</h5>
        <div class="row">
          <div class="col-12 row no-gutters">
            <div class="col-2"><b>Tỉnh/thành phố: </b></div>
            <div class="col-10"><?php echo $data->city ?></div>
          </div>
          <div class="col-12 row no-gutters">
            <div class="col-2"><b>Quận/Huyện: </b></div>
            <div class="col-10"><?php echo $data->district ?></div>
          </div>
          <div class="col-12 row no-gutters">
            <div class="col-2"><b>Địa chỉ: </b></div>
            <div class="col-10"><?php echo $data->address ?></div>
          </div>
        </div>
      </div>
      <div class="shadow-sm border p-3 rounded mb-4">
        <h5 class="font-weight-bold">Chi tiết</h5>
        <p>
          <?php echo stripslashes($data->content) ?>
        </p>
      </div>
      <div class="shadow-sm border p-3 rounded mb-4">
        <h5 class="font-weight-bold">Tính năng nổi bật</h5>
        <div class="row">
          <?php $features = !empty($data->features) ? json_decode($data->features) : null; ?>
          <?php if ($features != null) { ?>
          <?php foreach ($features as $item) { ?>
          <div class="col-6 col-sm-4 mb-2">
            <i class="bi bi-check2 text-warning"></i>
            <?php echo $featuresProduct[$item] ?>
          </div>
          <?php } ?>
          <?php } ?>
        </div>
      </div>
      <div class="shadow-sm border p-3 rounded mb-4">
        <h5 class="font-weight-bold mb-3">Căn hộ có thể bạn quan tâm</h5>
        <section id="similar-product">
          <div class="mx-n2">
            <?php if (count($recentsProduct) > 0) { ?>
            <div class="swiper-container px-2 pb-5">
              <div class="swiper-wrapper">
                <?php foreach ($recentsProduct as $item) { ?>
                <div class="swiper-slide">
                  <article class="custom-estate">
                    <div class="shadow-sm rounded d-flex flex-column bg-white">
                      <div class="background-cover position-relative" style="
                          background-image: url(<?php echo $item->thumbnail ?>);
                          padding-bottom: 60%;
                        ">
                        <span class="custom-estate-label badge badge-success">Liên quan</span>
                      </div>
                      <div class="flex-grow-1 border-bottom border-bottom">
                        <div class="p-3">
                          <h5 class="text-truncate">
                            <a href="product-detail/<?php echo $item->id ?>"
                              class="text-dark font-weight-bold"><?php echo $item->title ?></a>
                          </h5>
                          <address class="text-secondary text-truncate">
                            <?php echo $item->address ?>
                          </address>
                          <div class="row">
                            <div class="col-6 mb-1">
                              <i class="bi bi-cloud-sleet text-warning"></i>
                              <?php echo $item->bedrooms ?> phòng ngủ
                            </div>
                            <div class="col-6 mb-1">
                              <i class="bi bi-cup-straw text-warning"></i>
                              <?php echo $item->bathrooms ?> phòng tắm
                            </div>
                            <div class="col-6 mb-1">
                              <i class="bi bi-display text-warning"></i>
                              <?php echo $item->size ?> m<sup>2</sup>
                            </div>
                            <div class="col-6 mb-1">
                              <i class="bi bi-building text-warning"></i>
                              <?php echo $item->floors ?> tầng</sup>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3 justify-content-between align-items-center">
                        <div class="font-16">
                          <b><?php echo number_format($item->price) ?>đ</b>
                        </div>
                        <div class="custom-estate-icon d-flex align-items-center">
                          <i class="bi bi-eye mr-2"></i>
                          <?php echo $item->views ?>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <?php } ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <?php } else { ?>
            <div class="text-center">Không có dữ liệu</div>
            <?php } ?>
          </div>
        </section>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="shadow-sm border px-3 py-5 rounded sticky-top" style="top: 90px; z-index: 999">
        <div class="mb-4 text-center font-weight-bold">
          <img src="public/upload/no-image.jpg" alt="customer"
            class="img-thumbnail rounded-circle custom-avatar mb-3" />
          <div class="text-secondary mb-2"><?php echo $user->email ?></div>
          <div><?php echo $user->phone ?></div>
        </div>
        <hr />
        <div class="d-flex justify-content-center">
          <a href="#" class="custom-icon">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#" class="custom-icon">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" class="custom-icon">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="#" class="custom-icon">
            <i class="bi bi-twitter"></i>
          </a>
        </div>
        <hr />
        <a class="font-weight-bold btn btn-warning btn-block py-2 text-white" href="mailto:<?php echo $user->email ?>">
          <i class="bi bi-envelope mr-1"></i>
          <span>Gửi mail</span>
        </a>
        <a class="font-weight-bold btn btn-outline-warning btn-block py-2" href="tel:<?php echo $user->phone ?>">
          <i class="bi bi-telephone-forward mr-1"></i>
          <span>Liên hệ</span>
        </a>
      </div>
    </div>
  </div>
</section>