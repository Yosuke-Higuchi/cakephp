<!-- 勉強会＆輪講の記事追加のページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '記事追加 - 勉強会＆輪講'); ?>

<!-- タイトル -->
<h2>記事追加</h2>

<!-- 追加内容 -->
<?php
echo $this->Form->create ( 'Study' );
echo $this->Form->input ( 'title' ,array('label' => 'タイトル'));
echo $this->Form->select ( 'item', array (
		'勉強会' => '勉強会',
		'輪講' => '輪講'
), array (
		'empty' => false,
		'label' => '勉強会か輪講かどっち？',
		'default' => '勉強会'
) );
echo $this->Form->input ( 'content' ,array('label' => '内容','style' => 'width:60%','rows' => '10'));
echo $this->Form->end ( '投稿' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Studies', 'action'=> 'index'))?></p>
