<!-- メンバーの表示 -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout',$member['Member']['name']); ?>

<!-- 名前をタイトルとしては使わない -->


<div class="listview">
	<div class="top">
		<div class="title">
			<!-- タイトル -->
			<?php echo h($member['Member']['name']);?>
		</div>
		<div class="icons">
			<!-- 編集と消去ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-pencil"></i>', array (
			'action' => 'edit',
			$member ['Member'] ['id']
		), array (
		'escape' => false
		) );
		?>
		<?php
		echo $this->Form->postLink ( '<i class="fa fa-trash-o"></i>',
		array ('action' => 'delete',$member ['Member'] ['id']),
		array ('confirm' => '削除しますか？','escape' => false) );
		?>
		</div>
	</div>
	<div class="middle">
		<!-- 記事本文 -->
		<?php
		echo Markdown ( $member ['Member'] ['body'] );
		?>
	</div>
</div>

<!-- 戻るボタン -->
<p style="text-align: right;">
	<?php
	echo $this->Html->link ( '<i class="fa fa-arrow-circle-left"></i> メンバーへ戻る', array (
	'controller' => 'Members',
	'action' => 'index'),
	array ('escape' => false) );
	?>
</p>
