<?php
include_once "models/NewsModel.php";
include_once "models/CategoryNewsModel.php";
include_once "models/BannerModel.php";

class NewsController extends BaseController
{
  public $model;
  public $categoryModel;
  public $bannerModel;

  public function __construct()
  {
    $this->model = new NewsModel();
    $this->categoryModel = new CategoryNewsModel();
    $this->bannerModel = new BannerModel();

    $id = $_GET['id'] ?? null;
    $type = $_GET['type'] ?? 'detail';

    switch ($type) {
      case 'detail':
        $data = $this->model->getDetailNews($id);
        $this->model->updateNews($id, [
          'views' => $data->views + 1,
        ]);
        $data = $this->model->getDetailNews($id);

        $result = [
          'data' => $data,
          'categories' => $this->categoryModel->getListCategoryNews(),
          'lastestNews' => $this->model->getListNewsLastest(),
          'recentsNews' => $this->model->getListRecentNews($id, $data->category_news_id),
        ];

        $this->setTemplate("client/news-detail/index", $result);
        $this->setHeadTag("client/news-detail/head");
        $this->setLayout("ClientLayout");

        break;
      default:
        $result = [
          'data' => $this->model->getListNewsByCategoryNewsId($id),
          'categories' => $this->categoryModel->getListCategoryNews(),
          'lastestNews' => $this->model->getListNewsLastest(),
          'category' => $this->categoryModel->getDetailCategoryNews($id),
          'banners' => $this->bannerModel->getListBanner("where status = 1 and page = 'news'")
        ];

        $this->setTemplate("client/news/index", $result);
        $this->setHeadTag("client/news/head");
        $this->setLayout("ClientLayout");
        break;
    }
  }
}