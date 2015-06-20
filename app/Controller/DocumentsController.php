<?php
class DocumentsController extends AppController {
	public $helpers = array (
			'Html',
			'Form',
			'Markdown' 
	);
	
	public function index() {
		$this->set ( 'documents', $this->Document->find ( 'all' ) );
	}
	
	public function view($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( '無効な記事です．' ) );
		}
		$this->Document->id = $id;
		$this->set ( 'document', $this->Document->read () );
	}
	
	public function add() {
		if ($this->request->is ( 'post' )) {
			if ($this->Document->save ( $this->request->data )) {
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
		$this->Document->id = $id;
		
		if ($this->request->is ( 'get' )) {
			$this->request->data = $this->Document->read ();
		} else {
			if ($this->Document->save ( $this->request->data )) {
				$this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'action' => 'index' 
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
		
		if ($this->Document->delete ( $id )) {
			$this->Session->setFlash ( __ ( '削除成功' ) );
		} else {
			$this->Session->setFlash ( __ ( '削除失敗' ) );
		}
		
		return $this->redirect ( array (
				'action' => 'index' 
		) );
	}
}

?>