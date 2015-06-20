<!-- ドキュメントの記事追加のページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '記事追加 - ドキュメント'); ?>

<!-- タイトル -->
<h2>記事追加</h2>

<!-- 追加内容 -->
<?php
echo $this->Form->create ( 'Document' );
echo $this->Form->input ( 'title' );
echo $this->Form->input ( 'body');
echo $this->Form->end ( '投稿' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Documents', 'action'=> 'index'))?></p>