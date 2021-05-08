<?php
include_once "models/ProductModel.php";
include_once "models/CategoryProductModel.php";

class ProductController extends BaseController
{
  public $model;
  public $categoryProductModel;
  public $path = "product";

  public function __construct()
  {
    $this->model = new ProductModel();
    $this->categoryProductModel = new CategoryProductModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? 0;
    $status = $_GET['status'] ?? 0;

    switch ($action) {
      case 'add':
        $this->addProduct();
        break;
      case 'do_add':
        $this->doAddProduct();
        break;
      case 'edit':
        $this->showProduct($id);
        break;
      case 'do_edit':
        $this->doEditProduct($id);
        break;
      case 'delete':
        $this->deleteProduct($id);
        break;
      case 'view':
        $this->viewProduct($id);
        break;
      case 'update_status':
        $this->updateStatusProduct($id, $status);
        break;
      default:
        $this->getListProduct();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListProduct()
  {
    $data = $this->model->getListProduct();
    $result = [
      'data' => $data,
      'title' => 'bất động sản',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/index", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Mở trang thêm phần tử
   */
  public function addProduct()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới bất động sản',
      'path' => $this->path,
      'categories' => $this->categoryProductModel->getListCategoryProduct()
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Thêm phần tử
   */
  public function doAddProduct()
  {
    global $APP_URL;

    $thumbnail = null;
    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;
    }

    $features = $_POST['features'] ?? null;
    if ($features != null) {
      $features = json_encode($_POST['features']);
    }

    $this->model->addNewProduct([
      'title' => $_POST['title'],
      'address' => $_POST['address'],
      'city' => $_POST['city'],
      'district' => $_POST['district'],
      'garages' => $_POST['garages'],
      'type' => $_POST['type'],
      'bedrooms' => $_POST['bedrooms'],
      'bathrooms' => $_POST['bathrooms'],
      'floors' => $_POST['floors'],
      'direction' => $_POST['direction'],
      'year_build' => $_POST['year_build'],
      'size' => $_POST['size'],
      'description' => $_POST['description'],
      'content' => $_POST['content'],
      'images' => $_POST['images'] ?? null,
      'features' => $features,
      'price' => $_POST['price'],
      'category_product_id' => $_POST['category_product_id'],
      'user_id' => $_POST['user_id'],
      'status' => $_POST['status'],
      'thumbnail' => $thumbnail,
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showProduct($id)
  {
    $result = [
      'formAction' => "admin/$this->path/do_edit/$id",
      'title' => 'Cập nhật bất động sản',
      'record' => $this->model->getDetailProduct($id),
      'path' => $this->path,
      'categories' => $this->categoryProductModel->getListCategoryProduct()
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Cập nhật phần tử
   */
  public function doEditProduct($id)
  {
    global $APP_URL;

    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;

      $this->model->updateProduct($id, [
        'thumbnail' => $thumbnail,
      ]);
    }

    $features = $_POST['features'] ?? null;
    if ($features != null) {
      $features = json_encode($_POST['features']);
    }

    $this->model->updateProduct($id, [
      'title' => $_POST['title'],
      'address' => $_POST['address'],
      'city' => $_POST['city'],
      'district' => $_POST['district'],
      'garages' => $_POST['garages'],
      'type' => $_POST['type'],
      'bedrooms' => $_POST['bedrooms'],
      'bathrooms' => $_POST['bathrooms'],
      'floors' => $_POST['floors'],
      'direction' => $_POST['direction'],
      'year_build' => $_POST['year_build'],
      'size' => $_POST['size'],
      'description' => $_POST['description'],
      'content' => $_POST['content'],
      'images' => $_POST['images'] ?? null,
      'features' => $features,
      'price' => $_POST['price'],
      'category_product_id' => $_POST['category_product_id'],
      'user_id' => $_POST['user_id'],
      'status' => $_POST['status'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Xoá phần tử
   */
  public function deleteProduct($id)
  {
    global $APP_URL;
    $this->model->deleteProduct($id);

    header("location:$APP_URL/admin/$this->path");
  }


  /**
   * Show phần tử
   */
  public function viewProduct($id)
  {
    $result = [
      'title' => 'Cập nhật bất động sản',
      'record' => $this->model->getDetailProduct($id),
      'path' => $this->path,
      'categories' => $this->categoryProductModel->getListCategoryProduct()
    ];

    $this->setTemplate("admin/$this->path/view", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Update status
   */
  public function updateStatusProduct($id, $status)
  {
    global $APP_URL;
    $this->model->updateProduct($id, [
      'status' => $status,
    ]);

    header("location:$APP_URL/admin/$this->path");
  }
}