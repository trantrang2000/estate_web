<?php
include_once "models/ProductModel.php";
include_once "models/CategoryProductModel.php";
include_once "models/UserModel.php";

class ProductController extends BaseController
{
  public $model;
  public $categoryModel;
  public $userModel;

  public function __construct()
  {
    $this->model = new ProductModel();
    $this->categoryModel = new CategoryProductModel();
    $this->userModel = new UserModel();

    $id = $_GET['id'] ?? null;
    $type = $_GET['type'] ?? 'detail';

    switch ($type) {
      case 'detail':
        $data = $this->model->getDetailProduct($id);
        $this->model->updateProduct($id, [
          'views' => $data->views + 1,
        ]);
        $data = $this->model->getDetailProduct($id);

        $result = [
          'data' => $data,
          'recentsProduct' => $this->model->getListRecentProduct($id, $data->category_product_id),
          'user' => $this->userModel->getDetailUser($data->user_id)
        ];

        $this->setTemplate("client/product-detail/index", $result);
        $this->setHeadTag("client/product-detail/head");
        $this->setLayout("ClientLayout");

        break;
      default:
        $result = [
          'data' => $this->model->getListProductByCategoryProductId($id),
          'category' => $this->categoryModel->getDetailCategoryProduct($id)
        ];

        $this->setTemplate("client/product/index", $result);
        $this->setHeadTag("client/product/head");
        $this->setLayout("ClientLayout");
        break;
    }
  }
}