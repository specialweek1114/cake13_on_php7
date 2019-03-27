<?php

class SampleController extends AppController {

  public $name = "Sample";//コントローラーの名前　省略可能
  public $uses = null;//このコントローラで使用するモデル指定
  public $autoRender = true;//ビューの自動読み込みON/OFF
  public $layout = "sample";
  public $autoLayout = true;//レイアウトの無効化 記述なしの場合は true

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
    $this->set("content_header","Sample Page.");
    $this->set("title_text", "Sample Page");
    $this->set("content", "これは、ビューを使った表示です。");
    $this->set("content_footer","copyright SYODA-Tuyano. 2010.");
  }

  function form(){
    $this->set("page_title","Sample Page");
    $this->set("content_header","Sample Page.");
    $this->set("content_footer","copyright SYODA-Tuyano. 2010.");
    $this->set("form_items",
      [
        "name" => ["text", "名前"]
        ,"mail" => ["text", "メール"]
        ,"tel" => ["text", "電話"]
        ,"password" => ["password", "パスワード"]
        ,"remarks" => ["textarea", "備考"]
        ,"time" => ["checkbox", "時間帯"]
        ,"sei" => ["radio","性別"]
        ,"feeling" => ["select","気分"]
      ]
    );
    $this->set("ArrValues", [
      "time" => [
        "morning" => "朝"
        ,"noon" => "昼"
        ,"evening" => "夕方"
        ,"night" => "夜"
      ]
      ,"sei"=>["男","女","その他"]
      ,"feeling"=>[
        "(未選択)"
        ,"最高"
        ,"普通"
        ,"悪い"
      ]
    ]);
    if ($this->data){
        $res = "【送信情報】<br />";
        $res .= "名前：　" . $this->data["name"] . "<br />";
        $res .= "メール：" . $this->data["mail"] . "<br />";
        $res .= "電話:　" . $this->data["tel"] . "<br />";
        $res_arr = $this->data;
    } else {
        $res = "記入してください。";
        $res_arr = [];
    }
    $this->set("result",$res);
    $this->set("res_arr", $res_arr);
  }

  function result(){
    //サニタイズ処理のロード　htmlspecialchars的なやつ
    //App::import( ライブラリ ); cakephp で用意されているライブラリ呼び出し
    App::import("sanitize");

    // $_POSTの取得
    $input = $this->params['form']['input'];

    // テキストのサニタイズ処理の実行
    $result = Sanitize::stripAll($input);
    $this->set("result", $result);
    $this->set("page_title","Sample Page");
    $this->set("content_header","Sample Page.");
    $this->set("content_footer","copyright SYODA-Tuyano. 2010.");
  }
}