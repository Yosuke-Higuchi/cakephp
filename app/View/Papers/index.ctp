<h2>論文一覧</h2>

<p><?php echo $this->Html->link("論文を追加する",array('action' => 'add')); ?></p>

<table>
    <tr>
        <th>読者</th>
        <th>論文名</th>
        <th>研究内容</th>
        <th></th>
    </tr>
    <?php foreach ($papers as $paper)  : ?>
    <tr id="paper_<?php echo h($paper['Paper']['id']); ?>">
        <td>
        <?php echo $paper['Paper']['readername'] ?>
        </td>
        <td>
        <?php echo $paper['Paper']['title'] ?>
        </td>
        <td>
        <?php echo $paper['Paper']['content'] ?>
        </td>
        <td>
        <?php echo $this->Html->link('編集',array('action'=>'edit',$paper['Paper']['id'])); ?>
        <?php echo $this->Html->link('削除','#',array('class' => 'delete', 'data-post-id'=>$paper['Paper']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<script>
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
