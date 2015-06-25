<!-- 論文DBのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '論文DB'); ?>



<div class="listindex">
    <div class="top">
        <div class="title">論文一覧</div>
        <div class="icons">
            <!-- 並び替えのセレクトボックス -->
            <?php
            echo $this->Form->create ( false, array (
            'action' => 'index'
            ) );
            echo $this->Form->input ( 'sortselect', array (
            'type' => 'select',
            'div' => false,
            'label' => false,
            'options' => $sortitems,
            'empty' => '並び順',
            'onChange' => 'this.form.submit()'
            ) );
            ?>
            <!--  論文の追加ボタン -->
            <?php
            echo $this->Html->link ( '<i class="fa fa-plus"></i>', array (
            'controller' => 'Papers',
            'action' => 'add'
        ), array (
        'escape' => false
        ) );
        ?>
    </div>
</div>

<div class="middle">
    <!-- 論文テーブル -->
    <table class="table">
        <tr>
            <th style="width:4em">読者</th>
            <th>論文名</th>
            <th>研究内容</th>
            <th style="width:2em"></th>
        </tr>
        <?php foreach ($papers as $paper)  : ?>
            <tr id="paper_<?php echo h($paper['Paper']['id']); ?>">
                <td>
                    <?php echo $paper['Paper']['readername']?>
                </td>
                <td>
                    <?php echo $paper['Paper']['title']?>
                </td>
                <td>
                    <?php
                    // 改行がちゃんと行われるようにnl2br関数をプラス
                    echo nl2br ( $paper ['Paper'] ['content'] )?>
                </td>
                <td>
                    <?php echo $this->Html->link('<i class="fa fa-pencil"></i>',
                    array('action'=>'edit',$paper['Paper']['id']),array('escape' => false)); ?>
                    <!--?php echo $this->Html->link('削除','#',array('class' => 'delete', 'data-post-id'=>$paper['Paper']['id'])); ?-->
                    <?php
                    echo $this->Form->postLink ( '<i class="fa fa-trash-o"></i>', array (
                    'action' => 'delete',
                    $paper ['Paper'] ['id']
                ), array (
                'confirm' => '削除しますか？',
                'escape' =>false
                ) );
                ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>







<!-- 戻るボタン
<p>
    <br>
</p>
<p><?php  echo $this->Html->link('HOMEに戻る',array('controller'=>'Pages', 'action'=> 'index'))?></p>
-->





<!--<script>
$(function(){
$('a.delete').click(function(e){
if(confirm('削除してもよろしいですか？')){
$.post('/paperdb/papers/delete/'+$(this).data('post-id'),{},function(res){
$('#paper_'+res.id).fadeOut();
},"json");
}
return false;
});
});
</script>
こっちでできませんでした申し訳ありませんorz-->
