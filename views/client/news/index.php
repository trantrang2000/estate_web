<?php global $APP_URL; ?>
<title>Tin tức - <?php echo $category->title ?></title>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="bg-detail">
  <div class="container">
    <ol class="breadcrumb bg-transparent pl-0 mb-0">
      <li class="breadcrumb-item"><a href="<?php echo $APP_URL ?>">Trang chủ</a></li>
      <li class="breadcrumb-item">Tin tức</li>
      <li class="breadcrumb-item"><?php echo $category->title ?></li>
    </ol>
  </div>
</nav>

<!-- Main -->
<section id="content" class="py-5 bg-detail">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <?php if (count($data) > 0) { ?>
        <div>
          <section>
            <?php foreach ($data as $item) { ?>
            <article class="pb-4 border-bottom mb-4">
              <div class="background-cover rounded" style="
                    background-image: url(<?php echo $item->thumbnail ?>);
                    padding-bottom: 60%;
                  "></div>
              <div class="d-flex py-3">
                <span class="mr-3">
                  <i class="bi bi-person mr-1"></i>
                  admin
                </span>
                <span class="mr-3">
                  <i class="bi bi-calendar-check mr-1"></i>
                  <?php echo date_format(date_create($item->created_at), "d/M/Y"); ?>
                </span>
                <span class="mr-3">
                  <i class="bi bi-chat mr-1"></i>
                  0 comments
                </span>
                <span class="mr-3">
                  <i class="bi bi-eye mr-1"></i>
                  <?php echo $item->views ?> lượt xem
                </span>
              </div>
              <h3 class="font-weight-bold mb-4">
                <a href="news-detail/<?php echo $item->id ?>" class="text-dark"><?php echo $item->title ?></a>
              </h3>
              <a href="news-detail/<?php echo $item->id ?>" class="btn btn-outline-warning py-2 px-4">Xem thêm <i
                  class="bi bi-arrow-right"></i></a>
            </article>
            <?php } ?>
          </section>
          <nav class="custom-pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
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
        <div class="text-center">Không có bài viết</div>
        <?php } ?>
      </div>
      <div class="col-12 col-md-4">
        <div class="sticky-top" style="top: 70px; z-index: 999 !important">
          <div class="shadow-sm border p-3 rounded mb-4 bg-white">
            <h6 class="font-weight-bold mb-3">Tìm kiếm</h6>
            <form action="" class="custom-input">
              <div class="form-group">
                <input class="form-control" placeholder="Nhập từ khoá tìm kiếm..." />
              </div>
            </form>
          </div>
          <div class="shadow-sm border p-3 rounded mb-4 bg-white">
            <h6 class="font-weight-bold mb-3">Danh mục tin tức</h6>
            <div class="custom-categories d-flex flex-column">
              <?php foreach ($categories as $item) { ?>
              <a href="news/<?php echo $item->id ?>" class="mb-2"><?php echo $item->title ?></a>
              <?php } ?>
            </div>
          </div>
          <div class="shadow-sm border p-3 rounded mb-4 bg-white">
            <h6 class="font-weight-bold mb-3">Bài viết mới nhất</h6>
            <section>
              <?php foreach ($lastestNews as $item) { ?>
              <article class="row pb-3 no-gutters mx-n1 mb-3 border-bottom">
                <div class="col-4 px-2">
                  <div class="background-cover rounded" style="
                          background-image: url(<?php echo $item->thumbnail ?>);
                          padding-bottom: 60%;
                        "></div>
                </div>
                <div class="col-8 px-2">
                  <h6 class="text-truncate font-weight-bold">
                    <a href="news-detail/<?php echo $item->id ?>" class="text-dark"><?php echo $item->title ?></a>
                  </h6>
                  <small
                    class="text-secondary"><?php echo date_format(date_create($item->created_at), "d/M/Y"); ?></small>
                </div>
              </article>
              <?php } ?>
            </section>
          </div>
          <section id="banner-sidebar" class="mb-5">
            <?php foreach ($banners as $item) { ?>
            <?php if ($item->position == 'sidebar') { ?>
            <img src="<?php echo $item->thumbnail ?>" alt="" class="img-fluid w-100 mb-2">
            <?php } ?>
            <?php } ?>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>