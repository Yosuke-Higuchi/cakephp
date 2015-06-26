<!-- 在室管理のページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '在室管理'); ?>

<!--  タイトル -->
<h2>在室管理</h2>

<!-- 在室管理本文をここに作成 -->

<p>ここは在室管理のページです．</p>


<!-- 戻るボタン-->
<p style="text-align:right;"><?php
echo $this->Html->link('<i class="fa fa-home"></i> HOMEに戻る',
array('controller'=>'pages', 'action'=> 'index'), array('escape' => false));
?></p>
