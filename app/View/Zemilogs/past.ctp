<!-- 過去のゼミログのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '過去のゼミログ'); ?>


<div class="listindex">
	<div class="top">
		<div class="title">過去年度のゼミログ</div>
		<div class="icons">
			<!--  記事の追加ボタン 運用途中から不要？-->
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
		<!-- 過去のゼミログリスト -->

		<ul>
		<?php $nextyear = 0;?> 
		<?php foreach ($zemilogs_past_year as $zemilog): ?>
		<?php $year = substr($zemilog['Zemilog']['title'], 0,4);?>
		<h4><?php if($nextyear != $year){ echo $year.'年';}?></h4>
		<li>
		<?php
			echo $this->Html->link ( $zemilog ['Zemilog'] ['title'], '/Zemilogs/pastview/' . $zemilog ['Zemilog'] ['id'] );
			?>
		</li>
		<?php $nextyear = substr($zemilog['Zemilog']['title'], 0,4);?>
		<?php endforeach; ?>
		 <?php unset($zemilog); ?>
		</ul>


	</div>
</div>


<!-- 戻るボタン-->
<p style="text-align:right;">
    <?php
    echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> ゼミログへ戻る',
    array('controller'=>'Zemilogs', 'action'=> 'index'),
    array('escape' => false));
    ?>
</p>