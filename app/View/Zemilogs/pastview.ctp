<!-- 過去のゼミログの表示 -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout',$zemilog['Zemilog']['title']); ?>

<div class="listview">
    <div class="top">
        <div class="title">
            <!-- タイトル -->
            <?php echo h($zemilog['Zemilog']['title']);?>
        </div>
        <div class="icons">
            <!-- 編集と消去ボタン -->
            <?php
            echo $this->Html->link('<i class="fa fa-pencil"></i>'
            ,array('action'=>'edit', $zemilog ['Zemilog'] ['id']), array('escape' => false));
            ?>
            <?php
            echo $this->Form->postLink ('<i class="fa fa-trash-o"></i>',
            array ('action' => 'delete',$zemilog ['Zemilog'] ['id']),
            array ('confirm' => '削除しますか？','escape' => false));
            ?>
        </div>
    </div>
    <div class="middle">
        <!-- 担当者 -->
        <p>司会：<?php echo h($zemilog['Zemilog']['host']);?>
            ログ：<?php echo h($zemilog['Zemilog']['log']);?></p>
            <!-- 本文 -->
       <?php
			echo Markdown($zemilog ['Zemilog'] ['body'] );
	?>
    </div>
</div>

<!-- 戻るボタン -->
<p style="text-align:right;">
    <?php
    echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> 過去のゼミログへ戻る',
    array('controller'=>'Zemilogs', 'action'=> 'past'),
    array('escape' => false));
    ?>
</p>