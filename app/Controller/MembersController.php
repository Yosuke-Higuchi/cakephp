<?php
class MembersController extends AppController {
	public $helpers = array (
			'Html',
			'Form',
			'Markdown' 
	);
	public function index() {
		$this->set ( 'M2members', $this->Member->find ( 'all', array ( // M2
				'conditions' => array (
						'grade' => 'M2' 
				) 
		) ) );
		$this->set ( 'M1members', $this->Member->find ( 'all', array ( // M1
				'conditions' => array (
						'grade' => 'M1' 
				) 
		) ) );
		$this->set ( 'B4members', $this->Member->find ( 'all', array ( // B4
				'conditions' => array (
						'grade' => 'B4' 
				) 
		) ) );
		$this->set ( 'Othermembers', $this->Member->find ( 'all', array ( // 卒業生
				'conditions' => array (
						'grade' => '卒業生' 
				) 
		) ) );
	}
	public function view($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( '無効な記事です．' ) );
		}
		$this->Member->id = $id;
		$this->set ( 'member', $this->Member->read () );
	}
	public function add() {
		if ($this->request->is ( 'post' )) {
			if ($this->Member->save ( $this->request->data )) {
				$this->Session->setFlash ( '追加成功' );
				$this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( '追加失敗' );
			}
		}
	}
	public function edit($id = null) {
		$this->Member->id = $id;
		
		if ($this->request->is ( 'get' )) {
			$this->request->data = $this->Member->read ();
		} else {
			if ($this->Member->save ( $this->request->data )) {
				$this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'controller' => 'Members',
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
		
		if ($this->Member->delete ( $id )) {
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