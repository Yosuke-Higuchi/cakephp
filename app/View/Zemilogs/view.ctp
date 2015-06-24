<!-- ゼミログの表示 -->

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
        <p>
            <?php echo  nl2br ( $zemilog['Zemilog']['body'] );?>
        </p>
    </div>
</div>

<!-- 戻るボタン -->
<p style="text-align:right;">
    <?php
    echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> ゼミログへ戻る',
    array('controller'=>'Zemilogs', 'action'=> 'index'),
    array('escape' => false));
    ?>
</p>