<!-- ゼミログのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'ゼミログ'); ?>

<!--  タイトル -->
<h2>ゼミログ</h2>

<!--  記事の追加ボタン -->
<p>
<?php

echo $this->Html->link ( '記事の追加', array (
		'controller' => 'Zemilogs',
		'action' => 'add' 
) );
?>

</p>

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


<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('HOMEに戻る',array('controller'=>'pages', 'action'=> 'index'))?></p>



