<?php
class ZemilogsController extends AppController {
	public $helper = array (
			'Html',
			'Form' 
	);
	public function index() {
		// すべて表示
		$this->set ( 'zemilogs', $this->Zemilog->find ( 'all' ) );
	}
	
	public function view($id = NULL) {
		if (! $id) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		$this->Zemilog->id = $id;
		$this->set ( 'zemilog', $this->Zemilog->read () );
	}
	public function add() {
		if ($this->request->is ( 'post' )) {
			if ($this->Zemilog->save ( $this->request->data )) {
				$this->Session->setFlash ( 'Success!' );
				$this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( 'Failed!' );
			}
		}
	}
	public function delete($id) {
		if ($this->request->is ( 'get' )) {
			throw new MethodNotAllowedException ();
		} else {
			if ($this->request->is ( 'ajax' )) {
				if ($this->Zemilog->delete ( $id )) {
					$this->autoRender = false;
					$this->autoLayout = false;
					$response = array (
							'id' => $id 
					);
					$this->header ( 'Content-Type: application/json' );
					echo json_encode ( $response );
					exit ();
				}
			}
		}
		$this->redirect ( array (
				'action' => 'index' 
		) );
	}
	public function edit($id = null) {
		$this->Zemilog->id = $id;
		
		if ($this->request->is ( 'get' )) { 
			$this->request->data = $this->Zemilog->read ();
		} else {
			if ($this->Zemilog->save ( $this->request->data )) {
				$this->Session->setFlash ( 'Success' );
				$this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( 'Failed' );
			}
		}
	}
}