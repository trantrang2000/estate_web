<?php
include_once "models/UserModel.php";

class UserController extends BaseController
{
  public $model;
  public $path = "user";

  public function __construct()
  {
    $this->model = new UserModel();

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? 0;

    switch ($action) {
      case 'add':
        $this->addUser();
        break;
      case 'do_add':
        $this->doAddUser();
        break;
      case 'edit':
        $this->showUser($id);
        break;
      case 'do_edit':
        $this->doEditUser($id);
        break;
      case 'delete':
        $this->deleteUser($id);
        break;
      default:
        $this->getListUser();
        break;
    }
  }

  /**
   * Lấy danh sách phần tử
   */
  public function getListUser()
  {
    $data = $this->model->getListUser();
    $result = [
      'data' => $data,
      'title' => 'tài khoản',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/index", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Mở trang thêm phần tử
   */
  public function addUser()
  {
    $result = [
      'formAction' => "admin/$this->path/do_add",
      'title' => 'Thêm mới tài khoản',
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Thêm phần tử
   */
  public function doAddUser()
  {
    global $APP_URL;
    $this->model->addNewUser([
      'username' => $_POST['username'],
      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'password' => md5($_POST['password']),
      'phone' => $_POST['phone'],
      'address' => $_POST['address'],
      'permission' => $_POST['permission'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Hiển thị chi tiết phần tử
   */
  public function showUser($id)
  {
    $result = [
      'formAction' => "admin/$this->path/do_edit/$id",
      'title' => 'Cập nhật tài khoản',
      'record' => $this->model->getDetailUser($id),
      'path' => $this->path
    ];

    $this->setTemplate("admin/$this->path/edit", $result);
    $this->setLayout("AdminLayout");
  }

  /**
   * Cập nhật phần tử
   */
  public function doEditUser($id)
  {
    global $APP_URL;
    $this->model->updateUser($id, [
      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'phone' => $_POST['phone'],
      'address' => $_POST['address'],
      'permission' => $_POST['permission'],
    ]);

    header("location:$APP_URL/admin/$this->path");
  }

  /**
   * Xoá phần tử
   */
  public function deleteUser($id)
  {
    global $APP_URL;
    $this->model->deleteUser($id);

    header("location:$APP_URL/admin/$this->path");
  }
}