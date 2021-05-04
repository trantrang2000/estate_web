<?php global $APP_URL; ?>
<title>Bất động sản - <?php echo $category->title ?></title>
<!-- Filter -->
<section class="custom-filter bg-light shadow-sm">
  <div class="container">
    <div class="text-dark py-3 row">
      <div class="col-12 col-md-6">
        <div class="form-group border-bottom mb-0">
          <label class="text-uppercase font-weight-bold" for="inputSearch">Từ khoá</label>
          <input class="form-control bg-transparent border-0 outline-0 shadow-none pl-0" id="inputSearch"
            placeholder="Nhập từ khoá tìm kiếm..." />
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="row align-items-end">
          <div class="col-12 col-md-4">
            <div class="form-group border-bottom mb-0">
              <label class="text-uppercase font-weight-bold">Trạng thái</label>
              <div class="pt-2">
                <select class="js-filter-status form-control" name="status">
                  <option value="all">All status</option>
                  <option value="rent">For Rent</option>
                  <option value="sale">For Sale</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="form-group border-bottom mb-0">
              <label class="text-uppercase font-weight-bold">Loại nhà đất</label>
              <div class="pt-2">
                <select class="js-filter-type form-control" name="type">
                  <option value="all">All types</option>
                  <option value="bar">Bar</option>
                  <option value="house">House</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <button class="btn btn-warning text-white btn-block font-weight-bold">
              Tìm kiếm
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <div class="container">
    <ol class="breadcrumb bg-transparent pl-0">
      <li class="breadcrumb-item"><a href="<?php echo $APP_URL ?>">Trang chủ</a></li>
      <li class="breadcrumb-item">Nhà đất <?php echo $category->type == 0 ? 'bán' : 'cho thuê' ?></li>
      <li class="breadcrumb-item"><?php echo $category->title ?></li>
    </ol>
  </div>
</nav>

<!-- Main -->
<section id="content" class="container mb-5">
  <div class="d-flex justify-content-end align-items-center flex-wrap mb-3">
    <div class="d-flex align-items-center">
      <div class="custom-select2 mr-3">
        <select class="js-sort form-control form-control-lg" name="sort">
          <option value="all">Mặc định</option>
          <option value="sale">Ngày gần nhất</option>
          <option value="sale">Giá: cao tới thấp</option>
          <option value="sale">Giá: thấp tới cao</option>
        </select>
      </div>
      <i class="bi bi-grid-3x3-gap-fill pointer mr-3 font-25"></i>
      <i class="bi bi-list-ul pointer font-25"></i>
    </div>
  </div>
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
              <span
                class="custom-estate-label badge badge-primary"><?php echo $category->type == 0 ? 'Bán' : 'Cho thuê' ?></span>
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