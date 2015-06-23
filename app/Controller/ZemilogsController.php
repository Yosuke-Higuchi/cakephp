<?php
class ZemilogsController extends AppController {
	public $helper = array (
			'Html',
			'Form' 
	);
	public function index() {
		$params = array (
				'order' => 'title desc' 
		);
		$this->set ( 'zemilogs', $this->Zemilog->find ( 'all', $params ) );
	}
	public function view($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( '無効な記事です．' ) );
		}
		$this->Zemilog->id = $id;
		$this->set ( 'zemilog', $this->Zemilog->read () );
	}
	public function add() {
		if ($this->request->is ( 'post' )) {
			if ($this->Zemilog->save ( $this->request->data )) {
				$this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( '編集失敗' );
			}
		}
	}
	public function edit($id = null) {
		$this->Zemilog->id = $id;
		
		if ($this->request->is ( 'get' )) {
			$this->request->data = $this->Zemilog->read ();
		} else {
			if ($this->Zemilog->save ( $this->request->data )) {
				$this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'controller' => 'Zemilogs',
						'action' => 'view/'.$id 
				) );
			} else {
				$this->Session->setFlash ( '編集失敗' );
			}
		}
	}
	public function delete($id) {
		if ($this->request->is ( 'get' )) {
			throw new MethodNotAllowedException ();
		}
		
		if ($this->Zemilog->delete ( $id )) {
			$this->Session->setFlash ( __ ( '削除成功' ) );
		} else {
			$this->Session->setFlash ( __ ( '削除失敗' ) );
		}
		
		return $this->redirect ( array (
				'action' => 'index' 
		) );
	}
}