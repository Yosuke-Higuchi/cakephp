<!-- ドキュメントの編集ページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '編集 - ドキュメント'); ?>


<!-- タイトル -->
<h2>編集</h2>

<!-- 編集内容 -->
<?php
echo $this->Form->create ( 'Document', array (
		'action' => 'edit' 
) );
echo $this->Form->input ( 'title' );
echo $this->Form->input ( 'body', array (
		'rows' => 10 
) );
echo $this->Form->end ( '保存' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Documents', 'action'=> 'index'))?></p>