<?php include "utils/constants.php" ?>
<!-- Filter -->
<section class="custom-filter bg-light shadow-sm">
  <form method="POST" action="search" class="container">
    <div class="text-dark py-3 row">
      <div class="col-12 col-md-6">
        <div class="form-group border-bottom mb-0">
          <label class="text-uppercase font-weight-bold" for="inputSearch">Từ khoá</label>
          <input value="<?php echo $keyword ?? '' ?>" name="keyword"
            class="form-control bg-transparent border-0 outline-0 shadow-none pl-0" id="inputSearch"
            placeholder="Nhập từ khoá tìm kiếm..." />
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
                  <option value="<?php echo $key ?>" <?php if ($price != '' && $price == $key) { ?>selected<?php } ?>>
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
                  <option value="<?php echo $key ?>" <?php if ($type != '' && $type == $key) { ?>selected<?php } ?>>
                    <?php echo $value ?>
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
    </div>
  </form>
</section>

<!-- Main -->
<section id="content" class="container my-5">
  <h4 class="mb-3">Kết quả tìm kiếm: <?php echo count($data) ?> bất động sản</h4>
  <?php if (count($data) > 0) { ?>
  <div>
    <div class="row">
      <?php foreach ($data as $item) { ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <article class="custom-estate">
          <div class="shadow-sm rounded d-flex flex-column bg-white">
            <div class="background-cover position-relative" style="
                          background-image: url(<?php echo $item->thumbnail ?>);
                          padding-bottom: 60%;
                        ">
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
    <nav class="custom-pagination">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <?php } else { ?>
  <div>Không có dữ liệu</div>
  <?php } ?>

</section>