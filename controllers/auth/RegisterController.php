<?php
include_once "models/AuthModel.php";

class RegisterController extends BaseController
{
  public $model;

  public function __construct()
  {
    $this->model = new AuthModel();

    if (isset($_SESSION['user'])) {
      header("location:index.php");
    } else {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $user = $this->model->getUserInfo($username);

        if (isset($user->username)) {
          header("location:admin.php?controller=register&type=auth&action=fail");
        } else {
          $this->model->register();
        }
      }
    }

    $this->setTemplate("auth/register/index");
    $this->setHeadTag("auth/register/head");
    $this->setLayout("AuthLayout");
  }
}