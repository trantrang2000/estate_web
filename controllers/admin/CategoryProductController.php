<?php
include_once "models/CategoryProductModel.php";

class CategoryProductController extends BaseController
{
  public $model;
  public $path = "category-product";

  public function __construct()
  {
    $this->model = new CategoryProductModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? 0;

    switch ($action) {
      case 'add':
        $this->addCategoryProduct();
        break;
      case 'do_add':
        $this->doAddCategoryProduct();
        break;
      case 'edit':
        $this->showCategoryProduct($id);
        break;
      case 'do_edit':
        $this->doEditCategoryProduct($id);
        break;
      case 'delete':
        $this->deleteCategoryProduct($id);
        break;
      default:
        $this->getListCategoryProduct();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListCategoryProduct()
  {
    $data = $this->model->getListCategoryProduct();
    $result = [
      'data' => $data,
      'title' => 'danh mục bất động sản',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/index", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Mở trang thêm phần tử
   */
  public function addCategoryProduct()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới danh mục bất động sản',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Thêm phần tử
   */
  public function doAddCategoryProduct()
  {
    global $APP_URL;
    $this->model->addNewCategoryProduct([
      'title' => $_POST['title'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showCategoryProduct($id)
  {
    $result = [
      'formAction' => "admin/$this->path/do_edit/$id",
      'title' => 'Cập nhật danh mục bất động sản',
      'record' => $this->model->getDetailCategoryProduct($id),
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Cập nhật phần tử
   */
  public function doEditCategoryProduct($id)
  {
    global $APP_URL;
    $this->model->updateCategoryProduct($id, [
      'title' => $_POST['title'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Xoá phần tử
   */
  public function deleteCategoryProduct($id)
  {
    global $APP_URL;
    $this->model->deleteCategoryProduct($id);

    header("location:$APP_URL/admin/$this->path");
  }
}