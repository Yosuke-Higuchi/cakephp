<!-- 論文DBのページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', '論文DB'); ?>

<!-- タイトル -->
<h2>論文一覧</h2>

<!-- 論文追加ボタン -->
<p><?php echo $this->Html->link("論文を追加する",array('action' => 'add')); ?></p>

<!-- 並び替えのセレクトボックス -->
<p>	
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
</p>

<!-- 論文テーブル -->
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
        <?php echo $this->Html->link('編集',array('action'=>'edit',$paper['Paper']['id'])); ?>
       <!--?php echo $this->Html->link('削除','#',array('class' => 'delete', 'data-post-id'=>$paper['Paper']['id'])); ?--> 
			<?php
					echo $this->Form->postLink ( '削除', array (
							'action' => 'delete',
							$paper ['Paper'] ['id'] 
					), array (
							'confirm' => '削除しますか？' 
					) );
					?>        </td>
	</tr>
    <?php endforeach; ?>
</table>

<!-- 戻るボタン -->
<p>
	<br>
</p>
<p><?php  echo $this->Html->link('HOMEに戻る',array('controller'=>'Pages', 'action'=> 'index'))?></p>






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
