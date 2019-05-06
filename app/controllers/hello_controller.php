<?php
/**
 *
 */
class HelloController extends AppController
{
  public $name = "Hello";
  public $uses = null;
  // public $autoLayout;
  // public $autoRender;
  public $layout = "hello";

  function index()
  {
    // $this->autoLayout = true;
    // $this->autoRender = true;
  }

  function other()
  {
    // $this->autoLayout = false;
    // $this->autoRender = true;
  }
}
