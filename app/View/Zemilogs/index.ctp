<!-- Zemilogs -->
<!--  pagetitle -->

<?php $this->set('title_for_layout', 'ゼミログ'); ?>

<h2>ゼミログ</h2>

<ul>
<?php foreach ($zemilogs as $zemilog): ?>
<li>
<?php
	// debug($zemilog);
	// echo h($zemilog['Zemilog']['title']);
	echo $this->Html->link ( $zemilog ['Zemilog'] ['title'], '/zemilogs/view/' . $zemilog ['Zemilog'] ['id'] );
	
	?>
</li>
<?php endforeach; ?>
</ul>

<p>ゼミログの一覧を表示しよう！</p>
