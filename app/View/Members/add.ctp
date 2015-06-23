<!-- メンバーの記事追加のページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '記事追加 - メンバー'); ?>

<!-- タイトル -->
<h2>記事追加</h2>

<!-- 追加内容 -->
<?php
echo $this->Form->create ( 'Member' );
echo $this->Form->input ( 'name' );
echo $this->Form->select ( 'grade', array (
		'B4' => 'B4',
		'M1' => 'M1',
		'M2' => 'M2',
		'卒業生' => '卒業生' 
), array (
		'empty' => false,
		'label' => 'Grade',
		'default' => 'B4' 
) );
echo $this->Form->input ( 'body' );
echo $this->Form->end ( '投稿' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Members', 'action'=> 'index'))?></p>