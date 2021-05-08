<?php
include_once "models/UserModel.php";

class AuthModel extends Model
{
  public $model;

  public function __construct()
  {
    $this->model = new UserModel();
  }

  /**
   * Lấy thông tin user qua username
   */
  public function getUserInfo($username)
  {
    return parent::getRecord("Select * from users where username = '$username'");
  }

  /**
   * Đăng ký tài khoản
   */
  public function register()
  {
    $this->model->addNewUser([
      'username' => $_POST['username'],
      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'password' => md5($_POST['password']),
      'phone' => $_POST['phone'],
      'address' => $_POST['address'],
      'permission' => 0,
    ]);

    header("location:admin.php?controller=login&type=auth&action=register-success");
  }
}