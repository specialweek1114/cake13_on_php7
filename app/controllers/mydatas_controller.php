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

        // $this->モデル名->関数
        $datas = $this->Mydata->find("all");
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

}