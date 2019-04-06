<?php
/**
 *
 */
class HelloController extends AppController
{
  public $name = "Hello";
  public $uses = null;
  public $autoLayout = false;
  public $autoRender = true;

  function index()
  {
    // echo "Hello world!";
  }

  function other()
  {
    echo "これは、index以外の表示です。";
  }
}
