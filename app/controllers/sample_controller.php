<?php

class SampleController extends AppController {

  public $name = "Sample";//コントローラーの名前　省略可能
  public $uses = null;//このコントローラで使用するモデル指定
  public $autoRender = true;//ビューの自動読み込みON/OFF
  public $autoLayout = false;//レイアウトの無効化 記述なしの場合は true

  // アクションメソッド　このコントローラで利用される。さまざまな処理を示すもの
  // http://ドメイン名/cakeroot/コントローラ名/アクション名　というURLが割り当てられる
  // この場合は, http://localhost/cake13/sample/index　だが　indexは省略する決まり
  // なので http://localhost/cake13/sample/にアクセス　＝　indexアクションを呼ぶことになる
  function index()
  {
    // この書き方はおしゃれじゃない
    // echo "<html><head></head><body>";
    // echo "<h1>サンプルページ</h1>";
    // echo "<p>これがサンプルページです。</p>";
    // echo "</body></html>";

    // $this->set("変数名","値")でindex.ctpで使用できる変数定義
    $this->set("title_text", "Sample Page");
    $this->set("content", "これは、ビューを使った表示です。");
  }

  function form(){}

  function result(){
    //サニタイズ処理のロード　htmlspecialchars的なやつ
    //App::import( ライブラリ ); cakephp で用意されているライブラリ呼び出し
    App::import("sanitize");

    // $_POSTの取得
    $input = $this->params['form']['input'];

    // テキストのサニタイズ処理の実行
    $result = Sanitize::stripAll($input);
    $this->set("result", $result);
  }
}