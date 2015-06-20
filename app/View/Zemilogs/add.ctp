<!-- ゼミログの記事追加のページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '記事追加 - ゼミログ'); ?>

<!-- タイトル -->
<h2>記事追加</h2>

<!-- 追加内容 -->
<?php
echo $this->Form->create ( 'Zemilog' );
echo $this->Form->input ( 'title', array (
		'default' => date ( "Y年m月d日" )	#日付自動入力
) );
echo $this->Form->input ( 'host' );
echo $this->Form->input ( 'log' );
echo $this->Form->input ( 'body' );
echo $this->Form->end ( '投稿' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Zemilogs', 'action'=> 'index'))?></p>