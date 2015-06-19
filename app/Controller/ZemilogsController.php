<?php
class ZemilogsController extends AppController {
	public $helpers = array (
			'Html',
			'Form' 
	);
	public function index() { // home/Zemilogs/index
		$this->set ( '$title_for_layout', 'ゼミログ' );
		// ゼミログの一覧表示
		$params = array (
				'order' => 'created desc', // 作成順
				'limit' => 3 
		);
		$this->set ( 'zemilogs', $this->Zemilog->find ( 'all', $params ) );
	}
	
	public function view($id = NULL){
		$this->Zemilog->id =$id;
		$this->set('zemilog',$this->Zemilog->read());
	}
	
}