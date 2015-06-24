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
		,'label' => 'タイトル'
) );
echo $this->Form->input ( 'host' , array('label' => '司会'));
echo $this->Form->input ( 'log' , array('label' => 'ログ'));
echo $this->Form->input ( 'body' , array('label' => '内容',  'style' => 'width:60%', 'rows' => '10'));
echo $this->Form->end ( '投稿' );
?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Zemilogs', 'action'=> 'index'))?></p>