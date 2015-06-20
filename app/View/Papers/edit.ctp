<h2>論文の編集</h2>

<?php
echo $this->Form->create('Paper',array('action'=>'edit'));
echo $this->Form->input('readername');
echo $this->Form->input('title');
echo $this->Form->input('content',array('rows' => 4 ));
echo $this->Form->end('論文を上書きする');
 ?>
