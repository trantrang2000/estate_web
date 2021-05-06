<?php
include_once "models/SlideModel.php";

class SlideController extends BaseController
{
  public $model;
  public $path = "slide";

  public function __construct()
  {
    $this->model = new SlideModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? 0;

    switch ($action) {
      case 'add':
        $this->addSlide();
        break;
      case 'do_add':
        $this->doAddSlide();
        break;
      case 'edit':
        $this->showSlide($id);
        break;
      case 'do_edit':
        $this->doEditSlide($id);
        break;
      case 'delete':
        $this->deleteSlide($id);
        break;
      default:
        $this->getListSlide();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListSlide()
  {
    $data = $this->model->getListSlide();
    $result = [
      'data' => $data,
      'title' => 'slide trang chủ',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/index", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Mở trang thêm phần tử
   */
  public function addSlide()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới slide trang chủ',
      'path' => $this->path,
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Thêm phần tử
   */
  public function doAddSlide()
  {
    global $APP_URL;

    $thumbnail = "";
    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;
    }

    $this->model->addNewSlide([
      'title' => $_POST['title'],
      'status' => $_POST['status'],
      'url' => $_POST['url'],
      'thumbnail' => $thumbnail,
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showSlide($id)
  {
    $result = [
      'formAction' => "admin/$this->path/do_edit/$id",
      'title' => 'Cập nhật slide trang chủ',
      'record' => $this->model->getDetailSlide($id),
      'path' => $this->path,
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Cập nhật phần tử
   */
  public function doEditSlide($id)
  {
    global $APP_URL;

    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;

      $this->model->updateSlide($id, [
        'thumbnail' => $thumbnail,
      ]);
    }

    $this->model->updateSlide($id, [
      'title' => $_POST['title'],
      'status' => $_POST['status'],
      'url' => $_POST['url'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Xoá phần tử
   */
  public function deleteSlide($id)
  {
    global $APP_URL;
    $this->model->deleteSlide($id);

    header("location:$APP_URL/admin/$this->path");
  }
}