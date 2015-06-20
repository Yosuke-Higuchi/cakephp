<!-- ゼミログの表示 -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout',$zemilog['Zemilog']['title']); ?>

<!-- タイトル -->
<h2><?php echo h($zemilog['Zemilog']['title']);?></h2>

<!-- 担当者 -->
<p>司会：<?php echo h($zemilog['Zemilog']['host']);?>
   ログ：<?php echo h($zemilog['Zemilog']['log']);?></p>

<!-- 本文 -->
<p><?php echo h($zemilog['Zemilog']['body']);?></p>

<!-- 編集ボタン -->
<?php  echo $this->Html->link('編集',array('action'=>'edit', $zemilog ['Zemilog'] ['id']))?>

<!-- 削除ボタン -->
<?php
echo $this->Form->postLink ( '削除', array (
		'action' => 'delete',
		$zemilog ['Zemilog'] ['id'] 
), array (
		'confirm' => '削除しますか？' 
) );
?>


<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Zemilogs', 'action'=> 'index'))?></p>