<?php
class PapersController extends AppController {
	public $helper = array (
			'Html',
			'Form'
	);
	public function index() {
		static $sortdata = '1';

		$this->set ( 'sortitems', $sortitems = array (
				'1' => 'アップロード順',
				'2' => '読者順'/*,'3'=>'カテゴリ順'*/
      ) );

		// ソート方法決定
		if ($this->request->is ( 'post' )) {
			$sortdata = $this->request->data ['sortselect'];
		}

		// ソートして表示
		switch ($sortdata) {
			case '1' : // アップロード順
				$this->set ( 'papers', $this->Paper->find ( 'all', array (
						'order' => 'Paper.createdtime DESC'
				) ) );
				break;

			case '2' : // 読者順
				$this->set ( 'papers', $this->Paper->find ( 'all', array (
						'order' => 'Paper.readername ASC'
				) ) );
				break;

			default : // 並び順を選ぶとここに飛ぶ
			          // id順って言った
				$this->set ( 'papers', $this->Paper->find ( 'all' ), array (
						'order' => 'Paper.id DESC'
				) );
				break;
		}
	}
	public function add() {
		if ($this->request->is ( 'post' )) {
			if ($this->Paper->save ( $this->request->data )) { // 入力内容をDBに保存
				$this->Paper->saveField ( 'createdtime', date ( "Y-m-d H:i:s" ) ); // 入力日時をDBに保存
				//$this->Session->setFlash ( '追加成功' );
				$this->redirect ( array (
						'action' => 'index'
				) );
			} else {
				$this->Session->setFlash ( '追加失敗' );
			}
		}
	}
	public function delete($id) {
		if ($this->request->is ( 'get' )) {
			throw new MethodNotAllowedException ();
		}

		if ($this->Paper->delete ( $id )) {
			//$this->Session->setFlash ( __ ( '削除成功' ) );
		} else {
			$this->Session->setFlash ( __ ( '削除失敗' ) );
		}

		return $this->redirect ( array (
				'controller' => 'Papers',
				'action' => 'index'
		) );
	}
	/*
	 * public function delete($id) {
	 * if ($this->request->is ( 'get' )) {
	 * throw new MethodNotAllowedException ();
	 * } else {
	 * if ($this->request->is ( 'ajax' )) {
	 * if ($this->Paper->delete ( $id )) {
	 * $this->autoRender = false;
	 * $this->autoLayout = false;
	 * $response = array (
	 * 'id' => $id
	 * );
	 * $this->header ( 'Content-Type: application/json' );
	 * echo json_encode ( $response );
	 * exit ();
	 * }
	 * }
	 * }
	 * $this->redirect ( array (
	 * 'action' => 'index'
	 * ) );
	 * }
	 */
	public function edit($id = null) {
		$this->Paper->id = $id;

		if ($this->request->is ( 'get' )) { // edit画面に移ろうとしたとき
			$this->request->data = $this->Paper->read ();
		} else { // 編集が終わって保存したいとき
			if ($this->Paper->save ( $this->request->data )) { // 保存がうまく行ったとき
				//$this->Session->setFlash ( '保存成功' );
				$this->redirect ( array (
						'action' => 'index'
				) );
			} else {
				$this->Session->setFlash ( '保存失敗' );
			}
		}
	}
}
