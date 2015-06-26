<!-- スケジュールのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'スケジュール'); ?>

<!--  タイトル -->
<h2>スケジュール</h2>

<!-- スケジュール本文をここに作成 -->

<p>ここはスケジュールのページです．</p>


<!-- 戻るボタン-->
<p style="text-align:right;"><?php
echo $this->Html->link('<i class="fa fa-home"></i> HOMEに戻る',
array('controller'=>'pages', 'action'=> 'index'), array('escape' => false));
?></p>
