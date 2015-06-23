<!-- 論文DBの編集ページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '編集 - 論文DB'); ?>

<!-- タイトル -->
<h2>論文の編集</h2>

<!-- 編集内容 -->
<?php
echo $this->Form->create ( 'Paper', array (
		'action' => 'edit'
) );
echo $this->Form->input ( 'readername' );
echo $this->Form->input ( 'title' );
echo $this->Form->input ( 'content', array (
		'rows' => 4 
) );
echo $this->Form->end ( '論文を上書きする' );
echo $this->Form->submit ( 'キャンセル', array (
		'name' => 'cancel',
		'onClick' => 'history.back()' 
) );
?>
