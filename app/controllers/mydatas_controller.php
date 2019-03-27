<?php

// モデル名+sのコントローラ
class MydatasController extends AppController {

    public $name = "mydatas";  // なくてもいい
    public $uses = "Mydata";   // なくてもいい
    public $autoRender = true; // なくてもいい
    public $layout = "sample";
    public $autoLayout = true; // なくてもいい

    function index(){
        $this->set("page_title","Sample Page");
        $this->set("content_header","Sample Page.");
        $this->set("content_footer","copyright SYODA-Tuyano. 2010.");

        if (!empty($this->data)){
            // id検索
            // $datas = $this->Mydata->findAllById($this->data["Mydata"]["FIND"]);

            // Name検索 完全一致
            // $datas = $this->Mydata->findAllByName($this->data["Mydata"]["FIND"]);

            // 全件検索　オプション指定："conditions"=> array( 項目の指定 => 検索する値の指定 );　部分一致
            $options = [
              "conditions" => [
                "Mydata.name like ?" => [
                  "%{$this->data["Mydata"]["FIND"]}%"
                ]
              ]
            ];
            $datas = $this->Mydata->find("all", $options);
        } else {
            // $this->モデル名->関数 全件検索
            $datas = $this->Mydata->find("all");
        }
        $this->set("datas",$datas);
    }

    function add()
    {
        $this->set("page_title","Sample Add Page");
        $this->set("content_header","Sample Add Page.");
        $this->set("content_footer","copyright SYODA-Tuyano. 2010.");

        if (!empty($this->data)){
            $this->Mydata->save($this->data);
            $this->redirect(".");
        }
    }

    function del(){
        $this->set("page_title","Sample Page");
        $this->set("content_header","Sample Page.");
        $this->set("content_footer","copyright SYODA-Tuyano. 2010.");

        if (!empty($this->data)){
            // 完全一致　削除
            $this->Mydata->deleteAll(array("Mydata.name"=>$this->data["Mydata"]["DELETE"]));
        }
        $datas = $this->Mydata->find("all");
        $this->set("datas",$datas);
    }

}