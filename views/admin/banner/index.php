<script defer src="public/admin/js/<?php echo $path ?>/index.js"></script>
<?php include "utils/constants.php" ?>

<main class="container-fluid">
  <h1 class="mt-4">Quản lý <?php echo $title ?></h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Quản lý <?php echo $title ?></li>
  </ol>
  <div class="d-flex justify-content-end mb-2">
    <a href="admin/<?php echo $path ?>/add" class="btn btn-primary">Thêm mới</a>
  </div>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table mr-1"></i>
      Danh sách <?php echo $title ?>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tiêu đề</th>
              <th>Ảnh</th>
              <th>Vị trí</th>
              <th>Trang hiển thị</th>
              <th>Trạng thái</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $item) { ?>
              <tr>
                <td><?php echo $item->id ?></td>
                <td><?php echo $item->title ?></td>
                <td>
                  <img src="<?php echo $item->thumbnail ?? 'public/upload/no-image.jpg' ?>" class="custom-avatar">
                </td>
                <td><?php echo $bannerPositions[$item->position] ?></td>
                <td><?php echo $bannerPages[$item->page] ?></td>
                <td><?php echo $status[$item->status] ?></td>
                <td class="text-center">
                  <a href="admin/<?php echo $path ?>/edit/<?php echo $item->id ?>" class="text-info px-1"><i class="fa fa-pen"></i></a>
                  <a href="admin/<?php echo $path ?>/delete/<?php echo $item->id ?>" class="text-danger px-1"><i class="fa fa-trash" onclick="confirm('Xác nhận xoá bản ghi?')"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>