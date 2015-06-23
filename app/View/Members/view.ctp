<!-- メンバーの表示 -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout',$member['Member']['name']); ?>

<!-- 名前をタイトルとしては使わない -->

<!-- 記事本文 -->
<?php
echo Markdown ( $member ['Member'] ['body'] );
?>

<!-- 編集ボタン -->
<?php  echo $this->Html->link('編集',array('action'=>'edit', $member ['Member'] ['id']))?>

<!-- 削除ボタン -->
<?php
echo $this->Form->postLink ( '削除', array (
		'action' => 'delete',
		$member ['Member'] ['id'] 
), array (
		'confirm' => '削除しますか？' 
) );
?>


<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('戻る',array('controller'=>'Members', 'action'=> 'index'))?></p>