<!-- ゼミログのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'ゼミログ'); ?>


<div class="listindex">
	<div class="top">
		<div class="title">ゼミログ</div>
		<div class="icons">
			<!--  記事の追加ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-plus"></i>', array (
					'controller' => 'Zemilogs',
					'action' => 'add'
			), array (
					'escape' => false
			) );
			?>
		</div>
	</div>

	<div class="middle">
		<!-- ゼミログリスト -->
		<!-- 今年 -->

		<ul>
		<h4><?php echo date("Y年")?></h4>
		<?php foreach ($zemilogs_this_year as $zemilog): ?>
		<li>
		<?php
			echo $this->Html->link ( $zemilog ['Zemilog'] ['title'], '/Zemilogs/view/' . $zemilog ['Zemilog'] ['id'] );
			?>
		</li>
		<?php endforeach; ?>
		 <?php unset($zemilog); ?>
		</ul>
		<p>
			<br>
		</p>
		<!-- 昨年 -->

		<ul>
		<h4><?php echo date("Y年",strtotime("-1 year"))?></h4>
		<?php foreach ($zemilogs_last_year as $zemilog): ?>
		<li>
		<?php
			echo $this->Html->link ( $zemilog ['Zemilog'] ['title'], '/Zemilogs/view/' . $zemilog ['Zemilog'] ['id'] );
			?>
		</li>
		<?php endforeach; ?>
		 <?php unset($zemilog); ?>
		</ul>
		<p>
			<br>
		</p>
		<!-- 過去 -->

		<ul>
		<h4>過去のゼミログ</h4>
		<li>
		<?php
		echo $this->Html->link ( '過去のゼミログはこちら', '/Zemilogs/past');
		?>
		</li>
		</ul>

	</div>
</div>

<!-- 戻るボタン-->
<p style="text-align:right;"><?php
echo $this->Html->link('<i class="fa fa-home"></i> HOMEに戻る',
array('controller'=>'pages', 'action'=> 'index'), array('escape' => false));
?></p>
