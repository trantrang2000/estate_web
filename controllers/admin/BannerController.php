<?php
include_once "models/BannerModel.php";

class BannerController extends BaseController
{
  public $model;
  public $path = "banner";

  public function __construct()
  {
    $this->model = new BannerModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? 0;

    switch ($action) {
      case 'add':
        $this->addBanner();
        break;
      case 'do_add':
        $this->doAddBanner();
        break;
      case 'edit':
        $this->showBanner($id);
        break;
      case 'do_edit':
        $this->doEditBanner($id);
        break;
      case 'delete':
        $this->deleteBanner($id);
        break;
      default:
        $this->getListBanner();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListBanner()
  {
    $data = $this->model->getListBanner();
    $result = [
      'data' => $data,
      'title' => 'banner marketing',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/index", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Mở trang thêm phần tử
   */
  public function addBanner()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới banner marketing',
      'path' => $this->path,
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Thêm phần tử
   */
  public function doAddBanner()
  {
    global $APP_URL;

    $thumbnail = "";
    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;
    }

    $this->model->addNewBanner([
      'title' => $_POST['title'],
      'status' => $_POST['status'],
      'url' => $_POST['url'],
      'position' => $_POST['position'],
      'page' => $_POST['page'],
      'thumbnail' => $thumbnail,
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showBanner($id)
  {
    $result = [
      'formAction' => "admin/$this->path/do_edit/$id",
      'title' => 'Cập nhật banner marketing',
      'record' => $this->model->getDetailBanner($id),
      'path' => $this->path,
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Cập nhật phần tử
   */
  public function doEditBanner($id)
  {
    global $APP_URL;

    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;

      $this->model->updateBanner($id, [
        'thumbnail' => $thumbnail,
      ]);
    }

    $this->model->updateBanner($id, [
      'title' => $_POST['title'],
      'status' => $_POST['status'],
      'url' => $_POST['url'],
      'position' => $_POST['position'],
      'page' => $_POST['page'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Xoá phần tử
   */
  public function deleteBanner($id)
  {
    global $APP_URL;
    $this->model->deleteBanner($id);

    header("location:$APP_URL/admin/$this->path");
  }
}