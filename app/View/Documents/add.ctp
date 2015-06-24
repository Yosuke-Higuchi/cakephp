<!-- ドキュメントの記事追加のページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '記事追加 - ドキュメント'); ?>

<!-- タイトル -->
<h2>記事追加</h2>

<!-- 追加内容 -->
<?php
echo $this->Form->create ( 'Document' );
echo $this->Form->input ( 'title', array (
		'label' => 'タイトル' 
) );
echo $this->Form->input ( 'body', array (
		'label' => '内容',
		'style' => 'width:60%',
		'rows' => '10' 
) );
echo $this->Form->end ( '投稿' );
?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Documents', 'action'=> 'index'))?></p>