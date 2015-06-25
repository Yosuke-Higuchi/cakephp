<!-- 論文DBの記事追加のページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '論文追加 - 論文DB'); ?>

<!-- タイトル -->
<h2>論文を追加する</h2>

<!-- 追加内容 -->
<?php
echo $this->Form->create ( 'Paper' );
echo $this->Form->input ( 'readername' ,array('label' => '読者'));
echo $this->Form->input ( 'title' ,array('label' => '論文名', 'style' => 'width:60%'));
echo $this->Form->input ( 'content', array (
		'label' => '研究内容',
		'style' => 'width:60%',
		'rows' => '10'
) );
echo $this->Form->end ( '論文を保存する' );
echo $this->Form->submit ( 'キャンセル', array (
		'name' => 'cancel',
		'onClick' => 'history.back()'
) );
?>
