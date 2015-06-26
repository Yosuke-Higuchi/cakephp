<!-- アポ取りのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'アポ取り'); ?>

<!--  タイトル -->
<h2>アポ取り</h2>

<!-- アポ取り本文をここに作成 -->

<p>ここはアポ取りのページです．</p>


<!-- 戻るボタン-->
<p style="text-align:right;"><?php
echo $this->Html->link('<i class="fa fa-home"></i> HOMEに戻る',
array('controller'=>'pages', 'action'=> 'index'), array('escape' => false));
?></p>
