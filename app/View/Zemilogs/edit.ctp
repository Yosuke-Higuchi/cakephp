<h2>編集</h2>

<?php
echo $this->Form->create ( 'Zemilog', array (
		'action' => 'edit' 
) );
echo $this->Form->input ( 'title' );
echo $this->Form->input ( 'host' );
echo $this->Form->input ( 'log' );
echo $this->Form->input ( 'body', array (
		'rows' => 3 
) );
echo $this->Form->end ( '保存' );

?>