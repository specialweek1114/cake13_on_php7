<h1>データの一覧リスト</h1>
<table>
<tr><th>名前</th><th>メール</th><th>電話</th></tr>
<?php foreach($datas as $data){ ?>
<tr>
<td><?php echo $data['Mydata']['name']; ?></td>
<td><?php echo $data['Mydata']['mail']; ?></td>
<td><?php echo $data['Mydata']['tel']; ?></td>
<?php } ?>
</tr>
</table>


<style media="screen">

table {
  background: #393;
  margin: 10px;
}
table tr th {
  background: #393;
  color: #EFE;
}
table tr td {
  background: #EFE;
  color: #3A3;
  padding: 3px;
}
</style>
