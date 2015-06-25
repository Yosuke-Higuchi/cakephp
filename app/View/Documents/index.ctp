<!-- ドキュメントのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'ドキュメント'); ?>

<div class="listindex">
	<div class="top">
		<div class="title">ドキュメント</div>
		<div class="icons">
			<!--  記事の追加ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-plus"></i>', array (
					'controller' => 'Documents',
					'action' => 'add'
			), array (
					'escape' => false
			) );
			?>
		</div>
	</div>

	<div class="middle">
		<!-- ドキュメントリスト -->
		<ul>
		<?php foreach ($documents as $document): ?>
		<li>
		<?php
			echo $this->Html->link ( $document ['Document'] ['title'], '/Documents/view/' . $document ['Document'] ['id'] );
			?>
		</li>
		<?php endforeach; ?>
		 <?php unset($document); ?>
		</ul>
	</div>
</div>

<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('HOMEに戻る',array('controller'=>'pages', 'action'=> 'index'))?></p>
