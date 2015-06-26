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
echo $this->Form->input ( 'readername' ,array('label' => '読者'));
echo $this->Form->input ( 'title' ,array('label' => '論文名', 'style' => 'width:60%'));
echo $this->Form->input ( 'content', array (
		'label' => '研究内容',
		'style' => 'width:60%',
		'rows' => '10'
) );
echo $this->Form->input ('upload file', array('type' => 'file','label' => 'PDFファイル'));
echo $this->Form->end ( '論文を上書きする' );
echo $this->Form->submit ( 'キャンセル', array (
		'name' => 'cancel',
		'onClick' => 'history.back()'
) );
?>
