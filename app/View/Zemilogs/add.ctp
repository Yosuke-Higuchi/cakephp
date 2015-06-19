<h2>記事の追加</h2>

<?php
echo $this->Form->create ( 'Zemilog' );
echo $this->Form->input ( 'title' );
echo $this->Form->input ( 'host' );
echo $this->Form->input ( 'log' );
echo $this->Form->input ( 'body');
echo $this->Form->end ( '投稿' );
