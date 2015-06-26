<!-- ドキュメントの編集ページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '編集 - 勉強会＆輪講'); ?>


<!-- タイトル -->
<h2>編集</h2>

<!-- 編集内容 -->
<?php
echo $this->Form->create ( 'Study', array (
		'action' => 'edit'
) );
echo $this->Form->input ( 'title', array (
		'label' => 'タイトル'
) );
echo $this->Form->select ( 'item', array (
		'勉強会' => '勉強会',
		'輪講' => '輪講'
), array (
		'empty' => false,
		'label' => '勉強会か輪講かどっち？',
		'default' => '勉強会'
) );
echo $this->Form->input ( 'content', array (
		'label' => '内容',
		'style' => 'width:60%',
		'rows' => '10'
) );
echo $this->Form->end ( '上書き保存' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Studies', 'action'=> 'index'))?></p>
