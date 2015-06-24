<!-- メンバーのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'メンバー'); ?>

<!--  タイトル -->
<h2>メンバー</h2>

<!--  記事の追加ボタン -->
<p>
<?php
echo $this->Html->link ( '記事の追加', array (
		'controller' => 'Members',
		'action' => 'add' 
) );
?>
</p>

<!-- メンバーリスト -->
<!--   M2   -->
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

<!-- 戻るボタン
<p><?php  echo $this->Html->link('HOMEに戻る',array('controller'=>'pages', 'action'=> 'index'))?></p>
 -->

