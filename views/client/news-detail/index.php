<?php global $APP_URL; ?>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="bg-detail">
  <div class="container">
    <ol class="breadcrumb bg-transparent pl-0 mb-0">
      <li class="breadcrumb-item"><a href="<?php echo $APP_URL ?>">Trang chủ</a></li>
      <li class="breadcrumb-item">Tin tức</li>
      <li class="breadcrumb-item"><?php echo $data->title ?></li>
    </ol>
  </div>
</nav>

<!-- Main -->
<section id="content" class="py-5 bg-detail">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <section class="mb-5">
          <div class="background-cover rounded mb-3" style="
                  background-image: url(<?php echo $data->thumbnail ?>);
                  padding-bottom: 60%;
                "></div>
          <h3 class="font-weight-bold">
            <?php echo $data->title ?>
          </h3>
          <div class="d-flex py-3">
            <span class="mr-3">
              <i class="bi bi-person mr-1"></i>
              admin
            </span>
            <span class="mr-3">
              <i class="bi bi-calendar-check mr-1"></i>
              <?php echo date_format(date_create($data->created_at), "d/M/Y"); ?>
            </span>
            <span class="mr-3">
              <i class="bi bi-chat mr-1"></i>
              0 comments
            </span>
            <span class="mr-3">
              <i class="bi bi-eye mr-1"></i>
              <?php echo $data->views ?> views
            </span>
          </div>
          <p class="text-secondary pl-3 border-left border-warning">
            <?php echo stripslashes($data->description) ?>
          </p>
          <div>
            <?php echo stripslashes($data->content) ?>
          </div>
        </section>
        <section id="related-post">
          <h5 class="font-weight-bold mb-3">Bài viết liên quan</h5>
          <?php if (count($recentsNews) > 0) { ?>
          <div class="mx-n2">
            <div class="swiper-container px-2 pb-5">
              <div class="swiper-wrapper">
                <?php foreach ($recentsNews as $item) { ?>
                <div class="swiper-slide">
                  <div class="rounded-lg shadow-sm bg-white">
                    <div class="background-cover position-relative" style="
                            background-image: url(<?php echo $item->thumbnail ?>);
                            padding-bottom: 60%;
                          ">
                      <span class="custom-estate-label badge badge-primary">Home land</span>
                    </div>
                    <div class="flex-grow-1 border-bottom">
                      <div class="p-3">
                        <h5 class="text-truncate">
                          <a href="news-detail/<?php echo $item->id ?>"
                            class="text-dark font-weight-bold"><?php echo $item->title ?></a>
                        </h5>
                        <div class="mb-2">
                          <small><?php echo date_format(date_create($item->created_at), "d/M/Y"); ?></small>
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
          </div>
          <?php } else { ?>
          <div>Không có bài viết liên quan</div>
          <?php } ?>
        </section>
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
        </div>
      </div>
    </div>
  </div>
</section>