<?php
include_once "models/ProductModel.php";

class SearchController extends BaseController
{
  public $model;

  public function __construct()
  {
    $this->model = new ProductModel();

    $keyword = $_POST['keyword'];
    $price = $_POST['price'];
    $type = $_POST['type'];

    $sqlSearch = '';
    if ($keyword != '') {
      $sqlSearch = "where title like '%$keyword%'";
    }
    if ($price != '') {
      $sqlSearch = $keyword == '' ? "where price $price" : "$sqlSearch and price $price";
    }
    if ($type != '') {
      $sqlSearch = ($keyword != '' || $price != '') ? "$sqlSearch and type = $type" : "where type = $type";
    }

    $data = $this->model->getListProduct(0, null, "id", "desc", $sqlSearch);
    $result = [
      'data' => $data,
      'keyword' => $keyword,
      'price' => $price,
      'type' => $type
    ];

    $this->setTemplate("client/search/index", $result);
    $this->setHeadTag("client/search/head");
    $this->setLayout("ClientLayout");
  }
}