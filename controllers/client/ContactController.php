<?php

class ContactController extends BaseController
{
  public function __construct()
  {
    $this->setTemplate("client/contact/index");
    $this->setHeadTag("client/contact/head");
    $this->setLayout("ClientLayout");
  }
}