<?php
include_once "models/NewsModel.php";
include_once "models/ProductModel.php";
include_once "models/SlideModel.php";
include_once "models/BannerModel.php";
class HomeController extends BaseController
{
  public $newsModel;
  public $productModel;
  public $slideModel;
  public $bannerModel;

  public function __construct()
  {
    $this->newsModel = new NewsModel();
    $this->productModel = new ProductModel();
    $this->slideModel = new SlideModel();
    $this->bannerModel = new BannerModel();

    $result = [
      'news' => $this->newsModel->getListNews(0, 8),
      'mostViewProducts' => $this->productModel->getListProduct(0, 8, "views", "desc", "where status = 1"),
      'lastestProducts' => $this->productModel->getListProduct(0, 8, "id", "desc", "where status = 1"),
      'slides' => $this->slideModel->getListSlide("where status = 1"),
      'banners' => $this->bannerModel->getListBanner("where status = 1 and page = 'home'")
    ];

    $this->setTemplate("client/home/index", $result);
    $this->setHeadTag("client/home/head");
    $this->setLayout("ClientLayout");
  }
}
