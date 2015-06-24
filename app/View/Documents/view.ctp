<!-- ドキュメントの表示 -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout',$document['Document']['title']); ?>

<div class="listview">
    <div class="top">
        <div class="title">
            <!-- タイトル -->
            <?php echo h($document['Document']['title']);?>
        </div>
        <div class="icons">
            <!-- 編集と消去ボタン -->
            <?php
            echo $this->Html->link('<i class="fa fa-pencil"></i>'
            ,array('action'=>'edit', $document['Document'] ['id']), array('escape' => false));
            ?>
            <?php
            echo $this->Form->postLink ('<i class="fa fa-trash-o"></i>',
            array ('action' => 'delete',$document['Document'] ['id']),
            array ('confirm' => '削除しますか？','escape' => false));
            ?>
        </div>
    </div>
    <div class="middle">
		<!-- 記事本文 -->
		<?php
		echo Markdown ( $document ['Document'] ['body'] );
		?>
    </div>
</div>

<!-- 戻るボタン -->
<p style="text-align:right;">
    <?php
    echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i> ドキュメントへ戻る',
    array('controller'=>'Documents', 'action'=> 'index'),
    array('escape' => false));
    ?>
</p>
