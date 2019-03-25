<h1>フォームの入力</h1>
<pre><?php echo $result; ?></pre>
<table>
  <tbody>
      <?php
      foreach ($form_items as $item_key => $item_name) {
        echo "<tr>";
        echo "<th>{$item_name[1]}</th>";
        if(!empty($res_arr) && isset($ArrValues[$item_key])){
          if(is_array($res_arr[$item_key])){
            echo "<td>";
            foreach ($res_arr[$item_key] as $id => $boolean) {
              echo $boolean ? $ArrValues[$item_key][$id]." " : "";
            }
            echo "</td>";
          }else {
            echo "<td>".(isset($res_arr[$item_key]) ? $ArrValues[$item_key][$res_arr[$item_key]] : '-')."</td>";
          }
        }else {
          echo "<td>".(isset($res_arr[$item_key]) ? $res_arr[$item_key] : '-')."</td>";
        }
        echo "</tr>";
      }
?>
  </tbody>
</table>
<?php
// var_dump($res_arr);
    echo $form->create(null,array('type'=>'post','action'=>'./form'));
    foreach ($form_items as $item_key => $item_name) {
      if( $item_name[0] != "select" ){
        echo $form->label($item_key, $item_name[1]);
      }
      switch ($item_name[0]) {
        case 'text':echo $form->text($item_key);break;
        case 'password':echo $form->password( $item_key );break;
        case 'textarea':echo $form->textarea( $item_key );break;
        case 'checkbox':
          foreach ($ArrValues[$item_key] as $for => $text) {
            echo $form->checkbox( $item_key.".".$for );
            echo $form->label( $for ,$text);
          }
          break;
        case 'radio':
          echo $form->radio( $item_key, $ArrValues[$item_key] );
          break;
        case 'select':
          echo $form->input( $item_key, ["label"=>["text" => $item_name[1]], "options" => $ArrValues[$item_key] ]);
          break;
        default:break;
      }
    }

    // //選択リスト
    echo $form->end("送信");
?>