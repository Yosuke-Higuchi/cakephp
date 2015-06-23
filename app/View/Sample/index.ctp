<!-- Item一覧 -->
<table>
<tr>
  <th>ID</th>
  <th>名前</th>
  <th>価格</th>
</tr>
<?php foreach ($items as $item) { ?>
<tr>
  <td><?php echo $item['Item']['id']; ?></td>
  <td><?php echo $item['Item']['name']; ?></td>
  <td><?php echo $this->Price->format($item['Item']['price']); ?></td>
</tr>
<?php } ?>
</table>
合計 : <?php echo $sum; ?><br />
平均 : <?php echo $avg; ?><br />
<br />

<!-- Item追加 -->
<form action="<?php echo $this->Html->url('/sample/add'); ?>" method="post">
  名前 : <input type="text" name="name" /><br />
  価格 : <input type="text" name="price" /><br />
  <input type="submit" value="追加" /><br />
</form>
