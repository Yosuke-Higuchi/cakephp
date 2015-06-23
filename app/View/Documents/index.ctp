<!-- ドキュメントのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'ドキュメント'); ?>

<!--  タイトル -->
<h2>ドキュメント</h2>

<!--  記事の追加ボタン -->
<p>
<?php
echo $this->Html->link ( '記事の追加', array (
		'controller' => 'Documents',
		'action' => 'add' 
) );
?>
</p>

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


<!-- 戻るボタン -->
<p><?php  echo $this->Html->link('HOMEに戻る',array('controller'=>'pages', 'action'=> 'index'))?></p>


