<!-- メンバーのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'メンバー'); ?>

<div class="listindex">
	<div class="top">
		<div class="title">メンバー</div>
		<div class="icons">
			<!--  メンバーの追加ボタン -->
			<?php
			echo $this->Html->link ( '<i class="fa fa-plus"></i>', array (
					'controller' => 'Members',
					'action' => 'add'
			), array (
					'escape' => false
			) );
			?>
		</div>
	</div>

	<div class="middle">
		<h4>M2</h4>
		<ul>
		<?php foreach ($M2members as $member): ?>
		<li>
		<?php
			echo $this->Html->link ( $member ['Member'] ['name'], '/Members/view/' . $member ['Member'] ['id'] );
				?>
		</li>
		<?php endforeach; ?>
		</ul>
		 <?php unset($member); ?>

		<!--   M1   -->
		 <h4>M1</h4>
		<ul>
		<?php foreach ($M1members as $member): ?>
		<li>
		<?php
			echo $this->Html->link ( $member ['Member'] ['name'], '/Members/view/' . $member ['Member'] ['id'] );
				?>
		</li>
		<?php endforeach; ?>
		</ul>
		 <?php unset($member); ?>

		 <!--   B4   -->
		 <h4>B4</h4>
		<ul>
		<?php foreach ($B4members as $member): ?>
		<li>
		<?php
			echo $this->Html->link ( $member ['Member'] ['name'], '/Members/view/' . $member ['Member'] ['id'] );
				?>
		</li>
		<?php endforeach; ?>
		</ul>
		 <?php unset($member); ?>

		 <!--   卒業生   -->
		 <h4>卒業生</h4>
		<ul>
		<?php foreach ($Othermembers as $member): ?>
		<li>
		<?php
			echo $this->Html->link ( $member ['Member'] ['name'], '/Members/view/' . $member ['Member'] ['id'] );
				?>
		</li>
		<?php endforeach; ?>
		</ul>
		 <?php unset($member); ?>
	</div>
</div>

<!-- 戻るボタン-->
<p style="text-align:right;"><?php
echo $this->Html->link('<i class="fa fa-home"></i> HOMEに戻る',
array('controller'=>'pages', 'action'=> 'index'), array('escape' => false));
?></p>
