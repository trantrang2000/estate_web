<?php include "utils/constants.php" ?>
<!-- Banner marketing -->
<section id="banner-marketing" class="custom-banner carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($slides as $key => $item) { ?>
    <div class="carousel-item <?php if ($key == 0) { ?>active<?php } ?>">
      <img src="<?php echo $item->thumbnail ?>" class="d-block w-100 img-fluid" alt="..." />
    </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#banner-marketing" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#bannerMarketing" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</section>

<!-- Featured Properties -->
<section id="featured-roperties" class="pb-5 background-cover" style="
        background-image: url(https://demo1-homeid.g5plus.net/wp-content/uploads/2021/03/bg-home-demo-01.jpg?id=5506);
      ">
  <div class="container">
    <!-- Filter -->
    <section class="custom-filter">
      <form method="POST" action="search" class="shadow bg-dark text-white p-3 rounded row">
        <div class="col-12 col-md-6">
          <div class="form-group border-bottom mb-0">
            <label class="text-uppercase font-weight-bold" for="inputSearch">Từ khoá</label>
            <input name="keyword" class="text-white form-control bg-transparent border-0 outline-0 shadow-none pl-0"
              id="inputSearch" placeholder="Nhập từ khoá tìm kiếm..." />
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="row align-items-end">
            <div class="col-12 col-md-4">
              <div class="form-group border-bottom mb-0">
                <label class="text-uppercase font-weight-bold">Giá tiền</label>
                <div class="pt-2">
                  <select class="js-filter-status form-control w-100" name="price">
                    <option value="">Tất cả</option>
                    <?php foreach ($optionsPriceSearch as $key => $value) { ?>
                    <option value="<?php echo $key ?>">
                      <?php echo $value ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group border-bottom mb-0">
                <label class="text-uppercase font-weight-bold">Loại nhà đất</label>
                <div class="pt-2">
                  <select class="js-filter-type form-control w-100" name="type">
                    <option value="">Tất cả</option>
                    <?php foreach ($typesHouse as $key => $value) { ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <button type="submit" class="btn btn-warning text-white btn-block font-weight-bold">
                Tìm kiếm
              </button>
            </div>
          </div>
        </div>
      </form>
    </section>
    <!-- Info -->
    <section id="info">
      <div class="text-center pb-3">
        <h2 class="font-weight-bold">Chào mừng đến với HomeID</h2>
        <p>
          Cho dù bạn đang mua, bán hay thuê, chúng tôi có thể giúp bạn tạo lập kế hoạch.
        </p>
      </div>
      <div class="text-center custom-info d-flex flex-wrap justify-content-center mb-5">
        <div class="custom-info-item px-3 mb-2">
          <div class="rounded shadow-sm flex-center p-4 flex-column bg-white">
            <div class="pb-2 font-40">
              <i class="bi bi-building text-warning"></i>
            </div>
            <h4>Mua nhà mới</h4>
            <p>
              Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe
              ndisse suscipit
            </p>
          </div>
        </div>
        <div class="text-center custom-info-item px-3 mb-2">
          <div class="rounded shadow-sm flex-center p-4 flex-column bg-white">
            <div class="pb-2 font-40">
              <i class="bi bi-building text-warning"></i>
            </div>
            <h4>Bán nhà</h4>
            <p>
              Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe
              ndisse suscipit
            </p>
          </div>
        </div>
        <div class="text-center custom-info-item px-3 mb-2">
          <div class="rounded shadow-sm flex-center p-4 flex-column bg-white">
            <div class="pb-2 font-40">
              <i class="bi bi-building text-warning"></i>
            </div>
            <h4>Thuê nhà</h4>
            <p>
              Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe
              ndisse suscipit
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Main product -->
    <section id="main-product">
      <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
          <h3 class="font-weight-bold">Căn hộ được xem nhiều nhất</h3>
          <p>Tìm một nơi hoàn hảo cho bạn.</p>
        </div>
        <button class="btn btn-warning text-white font-weight-bold px-5 py-2">
          Xem tất cả
          <i class="bi bi-arrow-right"></i>
        </button>
      </div>
      <div class="mx-n2">
        <?php if (count($mostViewProducts) > 0) { ?>
        <div class="swiper-container px-2 pb-5">
          <div class="swiper-wrapper">
            <?php foreach ($mostViewProducts as $item) { ?>
            <div class="swiper-slide">
              <article class="custom-estate">
                <div class="shadow-sm rounded d-flex flex-column bg-white">
                  <div class="background-cover position-relative" style="
                          background-image: url(<?php echo $item->thumbnail ?>);
                          padding-bottom: 60%;
                        ">
                    <span class="custom-estate-label badge badge-danger">Hot</span>
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
</section>

<!-- Explore new lifestyles -->
<section id="explore-new" class="text-white py-5 text-center bg-dark mb-5">
  <h3 class="font-weight-bold">Khám phá lối sống mới</h3>
  <p>Tìm ngôi nhà tiếp theo của bạn, theo bất kỳ phong cách nào bạn thích.</p>
  <div class="d-flex flex-wrap justify-content-center">
    <div class="custom-explore flex-center flex-column">
      <div class="mb-3">
        <img alt="image-box-53" src="https://demo1-homeid.g5plus.net/wp-content/uploads/2021/03/image-box-53.png" />
      </div>
      <h5>Văn phòng</h5>
    </div>
    <div class="custom-explore flex-center flex-column">
      <div class="mb-3">
        <img alt="image-box-55" src="https://demo1-homeid.g5plus.net/wp-content/uploads/2021/03/image-box-55.png" />
      </div>
      <h5>Căn hộ</h5>
    </div>
    <div class="custom-explore flex-center flex-column">
      <div class="mb-3">
        <img alt="image-box-57" src="https://demo1-homeid.g5plus.net/wp-content/uploads/2021/03/image-box-57.png" />
      </div>
      <h5>Căn hộ cao cấp</h5>
    </div>
    <div class="custom-explore flex-center flex-column">
      <div class="mb-3">
        <img alt="image-box-59" src="https://demo1-homeid.g5plus.net/wp-content/uploads/2021/03/image-box-59.png" />
      </div>
      <h5>Villa</h5>
    </div>
  </div>
</section>

<!-- Lastest product -->
<section id="lastest-product" class="container mb-5">
  <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
    <div>
      <h3 class="font-weight-bold">Căn hộ mới được đăng bán/thuê</h3>
      <p>Tìm một nơi hoàn hảo cho bạn.</p>
    </div>
    <button class="btn btn-warning text-white font-weight-bold px-5 py-2">
      Xem tất cả
      <i class="bi bi-arrow-right"></i>
    </button>
  </div>
  <div class="mx-n2">
    <?php if (count($lastestProducts) > 0) { ?>
    <div class="swiper-container px-2 pb-5">
      <div class="swiper-wrapper">
        <?php foreach ($lastestProducts as $item) { ?>
        <div class="swiper-slide">
          <article class="custom-estate">
            <div class="shadow-sm rounded d-flex flex-column bg-white">
              <div class="background-cover position-relative" style="
                          background-image: url(<?php echo $item->thumbnail ?>);
                          padding-bottom: 60%;
                        ">
                <span class="custom-estate-label badge badge-primary">News</span>
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

<!-- Comment customer -->
<section id="feedback" class="bg-warning py-5 mb-5">
  <div class="container">
    <div class="text-center">
      <h3 class="font-weight-bold">
        Tại sao mọi người thích làm việc với HomeID?
      </h3>
      <p>
        Cho dù bạn đang mua, bán hay thuê, chúng tôi có thể giúp bạn tạo lập kế hoạch.
      </p>
    </div>
    <div class="mx-n2">
      <div class="swiper-container px-2 pb-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="rounded-lg shadow-sm bg-white p-3">
              <div class="media align-items-center">
                <img class="mr-3"
                  src="https://demo1-homeid.g5plus.net/wp-content/uploads/2020/07/testimonial-03-60x60.jpg" />
                <div class="media-body">
                  <h6 class="mt-0">Lydia Wise</h6>
                </div>
              </div>
              <p class="mt-3 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Natus iure tenetur consequuntur cum amet eum, nisi provident
                libero voluptate ratione aperiam assumenda quis illo
                laudantium voluptatibus ut! Repudiandae, est distinctio.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rounded-lg shadow-sm bg-white p-3">
              <div class="media align-items-center">
                <img class="mr-3"
                  src="https://demo1-homeid.g5plus.net/wp-content/uploads/2020/07/testimonial-03-60x60.jpg" />
                <div class="media-body">
                  <h6 class="mt-0">Lydia Wise</h6>
                </div>
              </div>
              <p class="mt-3 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Natus iure tenetur consequuntur cum amet eum, nisi provident
                libero voluptate ratione aperiam assumenda quis illo
                laudantium voluptatibus ut! Repudiandae, est distinctio.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>

<!-- New & Articles -->
<section id="news" class="container mb-5">
  <div class="text-center">
    <h3 class="font-weight-bold">Tin tức & Sự kiện</h3>
    <p>Xem Tin tức & Bài báo Gần đây</p>
  </div>
  <div class="mx-n2">
    <?php if (count($news) > 0) { ?>
    <div class="swiper-container px-2 pb-5">
      <div class="swiper-wrapper">
        <?php foreach ($news as $item) { ?>
        <div class="swiper-slide">
          <div class="rounded-lg shadow-sm bg-white">
            <div class="background-cover position-relative" style="
                    background-image: url(<?php echo $item->thumbnail ?>);
                    padding-bottom: 60%;
                  ">
            </div>
            <div class="flex-grow-1 border-bottom">
              <div class="p-3">
                <h5 class="text-truncate">
                  <a href="news-detail/<?php echo $item->id ?>"
                    class="text-dark font-weight-bold"><?php echo $item->title ?></a>
                </h5>
                <div class="mb-2">
                  <small><i class="bi bi-calendar-event mr-1 text-warning"></i>
                    <?php echo date_format(date_create($item->created_at), "d/M/Y"); ?></small>
                </div>
                <div class="mb-2">
                  <small><i class="bi bi-person-fill mr-1 text-warning"></i><?php echo $item->author ?></small>
                </div>
                <div>
                  <small><i class="bi bi-eye mr-1 text-warning"></i><?php echo $item->views ?></small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <?php } else { ?>
    <div>Không có bài viết</div>
    <?php } ?>
  </div>
</section>

<!-- Banner -->
<section id="banner" class="mb-5">
  <?php foreach ($banners as $item) { ?>
  <?php if ($item->position == 'bottom') { ?>
  <img src="<?php echo $item->thumbnail ?>" style="max-height: 120px; object-fit: cover" alt=""
    class="img-fluid w-100 mb-2">
  <?php } ?>
  <?php } ?>
</section>