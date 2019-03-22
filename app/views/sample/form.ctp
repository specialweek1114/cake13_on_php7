<h1>フォームの入力</h1>
<pre><?php echo $result; ?></pre>
<?php
    echo $form->create(null,array('type'=>'post','action'=>'./form'));
    echo $form->input("name");
    echo $form->input("mail");
    echo $form->input("tel");
    //パスワードフィールド
    echo $form->password( "pass" );
    //非表示フィールド
    echo $form->hidden( "hidden" );
    //テキストエリア
    echo $form->textarea( "textarea" );
    //チェックボックス
    echo $form->checkbox( "checkbox" );
    //ラベル
    echo $form->label( "checkbox" );
    //ラジオボタン
    echo $form->radio( "radio" , ["ラジオ１", "ラジオ２", "ラジオ３"]);
    // //選択リスト
    echo $form->select( "select", ["test", "test2", "test3"]);
    echo $form->end("終了");
?>