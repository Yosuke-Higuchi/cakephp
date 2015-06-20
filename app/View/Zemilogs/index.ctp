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
	echo $this->Html->link ( $zemilog ['Zemilog'] ['title'], '/Zemilogs/view/' . $zemilog ['Zemilog'] ['id'] );
	
	?>
</li>
<?php endforeach; ?>
 <?php unset($zemilog); ?>
</ul>

<!--  記事の追加 -->
<?php

echo $this->Html->link ( '記事の追加', array (
		'controller' => 'Zemilogs',
		'action' => 'add' 
) );
?>


