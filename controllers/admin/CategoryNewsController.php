<?php
include_once "models/CategoryNewsModel.php";

class CategoryNewsController extends BaseController
{
  public $model;
  public $path = "category-news";

  public function __construct()
  {
    $this->model = new CategoryNewsModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? 0;

    switch ($action) {
      case 'add':
        $this->addCategoryNews();
        break;
      case 'do_add':
        $this->doAddCategoryNews();
        break;
      case 'edit':
        $this->showCategoryNews($id);
        break;
      case 'do_edit':
        $this->doEditCategoryNews($id);
        break;
      case 'delete':
        $this->deleteCategoryNews($id);
        break;
      default:
        $this->getListCategoryNews();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListCategoryNews()
  {
    $data = $this->model->getListCategoryNews();
    $result = [
      'data' => $data,
      'title' => 'danh mục tin tức',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/index", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Mở trang thêm phần tử
   */
  public function addCategoryNews()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới danh mục tin tức',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Thêm phần tử
   */
  public function doAddCategoryNews()
  {
    global $APP_URL;
    $this->model->addNewCategoryNews([
      'title' => $_POST['title'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showCategoryNews($id)
  {
    $result = [
      'formAction' => "admin/$this->path/do_edit/$id",
      'title' => 'Cập nhật danh mục tin tức',
      'record' => $this->model->getDetailCategoryNews($id),
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Cập nhật phần tử
   */
  public function doEditCategoryNews($id)
  {
    global $APP_URL;
    $this->model->updateCategoryNews($id, [
      'title' => $_POST['title'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Xoá phần tử
   */
  public function deleteCategoryNews($id)
  {
    global $APP_URL;
    $this->model->deleteCategoryNews($id);

    header("location:$APP_URL/admin/$this->path");
  }
}