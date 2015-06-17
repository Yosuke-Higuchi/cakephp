<h2>論文を追加する</h2>

<?php
echo $this->Form->create('Paper');
echo $this->Form->input('readername');
echo $this->Form->input('title');
echo $this->Form->input('content',array('raws'=>4));
echo $this->Form->end('論文を保存する');
?>
