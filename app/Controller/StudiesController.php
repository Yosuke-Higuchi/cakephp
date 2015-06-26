<?php
class StudiesController extends AppController {
    public $helpers = array (
            'Html',
            'Form',
            'Markdown'
    );

    public function index(){
        $params = array (
				'order' => 'created desc'
		);
        $this->set ( 'benkyoukais', $this->Study->find ( 'all', array ( // 勉強会
				'conditions' => array (
						'item' => '勉強会' ,
				) ,
                'order' => 'created desc'
		) ) );
		$this->set ( 'rinkous', $this->Study->find ( 'all', array ( // 輪講
				'conditions' => array (
						'item' => '輪講'
				) ,
                'order' => 'created desc'
		) ) );
    }

    public function view($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( '無効な記事です．' ) );
		}
		$this->Study->id = $id;
		$this->set ( 'study', $this->Study->read () );
	}

	public function add() {
		if ($this->request->is ( 'post' )) {
			if ($this->Study->save ( $this->request->data )) {
				// $this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'action' => 'view',
						$this->Study->id
				) );
			} else {
				$this->Session->setFlash ( '編集失敗' );
			}
		}
	}
	public function edit($id = null) {
		$this->Study->id = $id;
		if ($this->request->is ( 'get' )) {
			$this->request->data = $this->Study->read ();
		} else {
			if ($this->Study->save ( $this->request->data )) {
				// $this->Session->setFlash ( '編集成功' );
				$this->redirect ( array (
						'controller' => 'Studies',
						'action' => 'view',
						$this->Study->id
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
		if ($this->Study->delete ( $id )) {
			// $this->Session->setFlash ( __ ( '削除成功' ) );
		} else {
			$this->Session->setFlash ( __ ( '削除失敗' ) );
		}
		return $this->redirect ( array (
				'action' => 'index'
		) );
	}


}
