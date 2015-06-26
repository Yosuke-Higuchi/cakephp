<!-- ドキュメントのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '勉強会＆輪講'); ?>

<div class="listindex">
	<div class="top">
		<div class="title">勉強会</div>
		<div class="icons">
			<!--  記事の追加ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-plus"></i>', array (
					'controller' => 'Studies',
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
		<?php foreach ($benkyoukais as $benkyoukai): ?>
		<li>
		<?php
			echo $this->Html->link ( $benkyoukai ['Study'] ['title'], '/Studies/view/' . $benkyoukai ['Study'] ['id'] );
			?>
		</li>
		<?php endforeach; ?>
		 <?php unset($benkyoukai); ?>
		</ul>
	</div>
</div>

<div class="listindex">
	<div class="top">
		<div class="title">輪講</div>
		<div class="icons">
			<!--  記事の追加ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-plus"></i>', array (
					'controller' => 'Studies',
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
		<?php foreach ($rinkous as $rinkou): ?>
		<li>
		<?php
			echo $this->Html->link ( $rinkou ['Study'] ['title'], '/Studies/view/' . $rinkou ['Study'] ['id'] );
			?>
		</li>
		<?php endforeach; ?>
		 <?php unset($rinkou); ?>
		</ul>
	</div>
</div>

<!-- 戻るボタン-->
<p style="text-align:right;"><?php
echo $this->Html->link('<i class="fa fa-home"></i> HOMEに戻る',
array('controller'=>'pages', 'action'=> 'index'), array('escape' => false));
?></p>
