<?php
class ZemilogsController extends AppController {
	public $helpers = array (
			'Html',
			'Form',
			'Markdown' 
	);
	public function index() {
		$this->set ( 'zemilogs_this_year', $this->Zemilog->find ( 'all', array (
				'order' => 'created desc',
				'conditions' => array (
						'title like' => date ( "Y%" ) 
				) 
		) ) );
		$this->set ( 'zemilogs_last_year', $this->Zemilog->find ( 'all', array (
				'order' => 'created desc',
				'conditions' => array (
						'title like' => date ( "Y%", strtotime ( "-1 year" ) ) 
				) 
		) ) );
	}
	public function view($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( '無効な記事です．' ) );
		}
		$this->Zemilog->id = $id;
		$this->set ( 'zemilog', $this->Zemilog->read () );
	}
	public function past($id = NULL) {
		$this->set ( 'zemilogs_past_year', $this->Zemilog->find ( 'all', array (
				'order' => 'title desc',
				'conditions' => array (	//この書き方がANDでつないでることになる模様です．
					array(	'title not like' => date ( "Y%" )),
					array(	'title not like' => date ( "Y%", strtotime ( "-1 year" ) )) 
						) )
				) 
		) ;
	}
	public function pastview($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( '無効な記事です．' ) );
		}
		$this->Zemilog->id = $id;
		$this->set ( 'zemilog', $this->Zemilog->read () );
	}
	public function add() {
		if ($this->request->is ( 'post' )) {
			if ($this->Zemilog->save ( $this->request->data )) {
				// $this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'action' => 'view',
						$this->Zemilog->id 
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
				// $this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'action' => 'view',
						$this->Zemilog->id 
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