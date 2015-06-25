<!-- ゼミログの編集ページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '編集 - ゼミログ'); ?>


<!-- タイトル -->
<h2>編集</h2>

<!-- 編集内容 -->
<?php
echo $this->Form->create ( 'Zemilog', array (
		'action' => 'edit' 
) );
echo $this->Form->input ( 'title');
echo $this->Form->input ( 'host' );
echo $this->Form->input ( 'log' );
echo $this->Form->input ( 'body', array (
		'label' => '内容',
		'style' => 'width:60%',
		'rows' => '10'
) );
echo $this->Form->end ( '上書き保存' );

?>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Zemilogs', 'action'=> 'index'))?></p>