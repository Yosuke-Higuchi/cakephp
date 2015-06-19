<?php
class ZemilogsController extends AppController {
	public $helpers = array (
			'Html',
			'Form',
			'Session' 
	);
	public $components = array (
			'Session' 
	);
	public function index() { // home/Zemilogs/index
		$this->set ( '$title_for_layout', 'ゼミログ' );
		// ゼミログの一覧表示
		$params = array (
				'order' => 'created desc' 
		); // 作成順 ////'limit' => 3
		
		$this->set ( 'zemilogs', $this->Zemilog->find ( 'all', $params ) );
	}
	public function view($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		$this->Zemilog->id = $id;
		$this->set ( 'zemilog', $this->Zemilog->read () );
	}
	
	public function add() {
		if ($this->request->is ( 'zemilog' )) {
			if ($this->Zemilog->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'Your post has been saved.' ) );
				$this->redirect ( array (
						'action' => 'index' 
				) );
			}
			$this->Session->setFlash ( __ ( 'Unable to add your post.' ) );
		}
	}
}