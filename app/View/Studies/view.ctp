<!-- ドキュメントの表示 -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout',$study['Study']['title']); ?>

<div class="listview">
	<div class="top">
		<div class="title">
			<!-- タイトル -->
			<?php echo h($study['Study']['title']);?>
		</div>
		<div class="icons">
			<!-- 編集と消去ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-pencil"></i>', array (
			'action' => 'edit',
			$study ['Study'] ['id']
		), array (
		'escape' => false
		) );
		?>
		<?php
		echo $this->Form->postLink ( '<i class="fa fa-trash-o"></i>',
		array ('action' => 'delete',$study ['Study'] ['id']),
		array ('confirm' => '削除しますか？','escape' => false) );
		?>
	</div>
</div>
<div class="middle">
	<!-- 記事本文 -->
	<?php
	echo Markdown($study ['Study'] ['content']);
	?>
</div>
</div>

<!-- 戻るボタン -->
<p style="text-align: right;">
	<?php
	echo $this->Html->link ( '<i class="fa fa-arrow-circle-left"></i> 勉強会＆輪講へ戻る', array (
	'controller' => 'Studies',
	'action' => 'index'
), array (
'escape' => false
) );
?>
</p>
