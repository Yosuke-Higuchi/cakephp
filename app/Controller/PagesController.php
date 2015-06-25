<?php
class PagesController extends AppController {
	public $name = 'Pages';
	public $uses = array('Page','Zemilog'); //Zemilogモデルを利用!!!!
	public $helper = array (
			'Html',
			'Form'
	);
	public function index() {
		// ゼミログから内容取ってきて、変数につめる処理書く
		// その後に、Pages/index.ctpを書く

		$params = array (
				'order' => 'created desc'
		);
		$this->set ( 'zemilogs', $this->Zemilog->find ( 'first', $params ) );
	}
}
