<?php

class SampledbController extends AppController {

  public $name = "Sample";//コントローラーの名前　省略可能
  public $uses = "mydatas";//このコントローラで使用するモデル指定
  public $autoRender = true;//ビューの自動読み込みON/OFF
  // public $layout = "sample";
  public $autoLayout = true;//レイアウトの無効化 記述なしの場合は true
  public $scaffold;
}