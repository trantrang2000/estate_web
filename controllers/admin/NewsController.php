<?php
include_once "models/NewsModel.php";
include_once "models/CategoryNewsModel.php";

class NewsController extends BaseController
{
  public $model;
  public $categoryNewsModel;
  public $path = "news";

  public function __construct()
  {
    $this->model = new NewsModel();
    $this->categoryNewsModel = new CategoryNewsModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? 0;

    switch ($action) {
      case 'add':
        $this->addNews();
        break;
      case 'do_add':
        $this->doAddNews();
        break;
      case 'edit':
        $this->showNews($id);
        break;
      case 'do_edit':
        $this->doEditNews($id);
        break;
      case 'delete':
        $this->deleteNews($id);
        break;
      default:
        $this->getListNews();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListNews()
  {
    $data = $this->model->getListNews();
    $result = [
      'data' => $data,
      'title' => 'tin tức',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/index", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Mở trang thêm phần tử
   */
  public function addNews()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới tin tức',
      'path' => $this->path,
      'categories' => $this->categoryNewsModel->getListCategoryNews()
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Thêm phần tử
   */
  public function doAddNews()
  {
    global $APP_URL;

    $thumbnail = "";
    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;
    }

    $this->model->addNewNews([
      'title' => $_POST['title'],
      'description' => $_POST['description'],
      'content' => $_POST['content'],
      'author' => $_POST['author'],
      'source' => $_POST['source'],
      'category_news_id' => $_POST['category_news_id'],
      'thumbnail' => $thumbnail,
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showNews($id)
  {
    $result = [
      'formAction' => "admin/$this->path/do_edit/$id",
      'title' => 'Cập nhật tin tức',
      'record' => $this->model->getDetailNews($id),
      'path' => $this->path,
      'categories' => $this->categoryNewsModel->getListCategoryNews()
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Cập nhật phần tử
   */
  public function doEditNews($id)
  {
    global $APP_URL;

    if ($_FILES["thumbnail"]["name"] != "") {
      $filename = time() . $_FILES["thumbnail"]["name"];
      move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "public/upload/$this->path/$filename");
      $thumbnail = $APP_URL . "/public/upload/$this->path/" . $filename;

      $this->model->updateNews($id, [
        'thumbnail' => $thumbnail,
      ]);
    }

    $this->model->updateNews($id, [
      'title' => $_POST['title'],
      'description' => $_POST['description'],
      'content' => $_POST['content'],
      'author' => $_POST['author'],
      'source' => $_POST['source'],
      'category_news_id' => $_POST['category_news_id'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Xoá phần tử
   */
  public function deleteNews($id)
  {
    global $APP_URL;
    $this->model->deleteNews($id);

    header("location:$APP_URL/admin/$this->path");
  }
}