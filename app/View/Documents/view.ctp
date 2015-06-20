<!-- ドキュメントの表示 -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout',$document['Document']['title']); ?>

<!-- タイトル -->
<h2><?php echo h($document['Document']['title']);?></h2>


<!-- 記事本文 -->
<?php
echo Markdown ( $document ['Document'] ['body'] );
?>

<!-- 編集ボタン -->
<?php  echo $this->Html->link('編集',array('action'=>'edit', $document ['Document'] ['id']))?>

<!-- 削除ボタン -->
<?php
echo $this->Form->postLink ( '削除', array (
		'action' => 'delete',
		$document ['Document'] ['id'] 
), array (
		'confirm' => '削除しますか？' 
) );
?>


<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Documents', 'action'=> 'index'))?></p>