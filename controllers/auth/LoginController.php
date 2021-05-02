<?php
include_once "models/AuthModel.php";

class LoginController extends BaseController
{
  public $model;

  public function __construct()
  {
    $this->model = new AuthModel();
    global $APP_URL;

    if (isset($_SESSION["user"])) {
      header("location:index.php");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $password = md5($password);
      $user = $this->model->getUserInfo($username);

      if (isset($user->username) && $user->password == $password) {
        $_SESSION["user"] = $user;

        if ($user->permission == 1) {
          header("location:$APP_URL/admin");
        } else {
          header("location:$APP_URL");
        }
      } else {
        header("location:admin.php?controller=login&type=auth&action=fail");
      }
    }

    $this->setTemplate("auth/login/index");
    $this->setHeadTag("auth/login/head");
    $this->setLayout("AuthLayout");
  }
}