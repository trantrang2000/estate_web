<?php

class SuccessController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("client/success/index");
    $this->setHeadTag("client/success/head");
    $this->setLayout("ClientLayout");
  }
}