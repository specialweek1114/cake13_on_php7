<h1>データの追加</h1>
<?php echo $form->create("Mydata",array("type"=>"post","action"=>"./edit")); ?>
<?php echo $form->input("id"); ?>
<?php echo $form->input("name"); ?>
<?php echo $form->input("mail"); ?>
<?php echo $form->input("tel"); ?>
<?php echo $form->textarea("comment"); ?>
<?php echo $form->end("送信"); ?>