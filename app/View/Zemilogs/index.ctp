<!-- ゼミログのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'ゼミログ'); ?>


<div class="listindex">
	<div class="top">
		<div class="title">
			ゼミログ
		</div>
		<div class="icons">
			<!--  記事の追加ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-plus"></i>', array (
					'controller' => 'Zemilogs',
					'action' => 'add') , array('escape' => false));
			?>
		</div>
	</div>

	<div class="middle">
		<!-- ゼミログリスト -->
		<ul>
		<?php foreach ($zemilogs as $zemilog): ?>
		<li>
		<?php
			// debug($zemilog);
			// echo h($zemilog['Zemilog']['title']);
			echo $this->Html->link ( $zemilog ['Zemilog'] ['title'], '/Zemilogs/view/' . $zemilog ['Zemilog'] ['id'] );
			?>
		</li>
		<?php endforeach; ?>
		 <?php unset($zemilog); ?>
		</ul>
	</div>
</div>


<!-- 戻るボタン
<p><?php  echo $this->Html->link('HOMEに戻る',array('controller'=>'pages', 'action'=> 'index'))?></p>
-->
