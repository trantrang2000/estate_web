<?php

class AdminController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("admin/dashboard/index");
    $this->setHeadTag("admin/dashboard/head");
    $this->setLayout("AdminLayout");
  }
}