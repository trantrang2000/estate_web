<?php

class AboutController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("client/about/index");
    $this->setHeadTag("client/about/head");
    $this->setLayout("ClientLayout");
  }
}