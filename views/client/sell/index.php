<script defer src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script defer src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
</script>

<script defer src="public/client/src/js/sell.js"></script>
<?php include "utils/constants.php" ?>

<main class="container-fluid">
  <h1 class="mt-4">Quản lý <?php echo $title ?></h1>
  <div class="d-flex justify-content-end mb-2">
    <a href="<?php echo $path ?>/add" class="btn btn-warning text-white">Thêm mới <?php echo $title ?></a>
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
              <th>Loại nhà</th>
              <th>Số tầng</th>
              <th>Diện tích</th>
              <th>Năm xây dựng</th>
              <th>Giá bán/thuê</th>
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
              <td><?php echo $typesHouse[$item->type] ?></td>
              <td><?php echo $item->floors ?></td>
              <td><?php echo $item->size ?>m<sup>2</sup></td>
              <td><?php echo $item->year_build ?></td>
              <td><?php echo number_format($item->price) ?>đ</td>
              <td><?php echo $statusProduct[$item->status] ?></td>
              <td class="text-center">
                <a href="<?php echo $path ?>/edit/<?php echo $item->id ?>" class="text-info px-1"><i
                    class="fa fa-pen"></i></a>
                <a href="<?php echo $path ?>/delete/<?php echo $item->id ?>" class="text-danger px-1"><i
                    class="fa fa-trash" onclick="confirm('Xác nhận xoá bản ghi?')"></i></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>