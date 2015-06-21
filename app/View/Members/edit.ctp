<!-- メンバーの編集ページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '編集 - メンバー'); ?>


<!-- タイトル -->
<h2>編集</h2>

<!-- 編集内容 -->
<?php
echo $this->Form->create ( 'Member', array (
		'action' => 'edit' 
) );
echo $this->Form->input ( 'name' );
echo $this->Form->select ( 'grade', array (
		'B4' => 'B4',
		'M1' => 'M1',
		'M2' => 'M2',
		'卒業生' => '卒業生' 
), array (
		'empty' => false,
) );
echo $this->Form->input ( 'body', array (
		'rows' => 10 
) );
echo $this->Form->end ( '保存' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Members', 'action'=> 'index'))?></p>