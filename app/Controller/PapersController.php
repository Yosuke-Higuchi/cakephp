<?php

class PapersController extends AppController{
    public $helper = array('Html','Form');

    public function index(){
        //すべて表示
        $this->set('papers',$this->Paper->find('all'));
    }

    public function add(){
        if($this->request->is('post')){
            if($this->Paper->save($this->request->data)){
                $this->Session->setFlash('Success!');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('failed!');
            }
        }
    }

    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }else{
            if($this->request->is('ajax')){
                if($this->Paper->delete($id)){
                    $this->autoRender = false;
                    $this->autoLayout = false;
                    $response = array('id' => $id);
                    $this->header('Content-Type: application/json');
                    echo json_encode($response);
                    exit();
                }
            }
        }
        $this->redirect(array('action' => 'index'));
    }

    public function edit($id = null){
        $this->Paper->id = $id;

        if($this->request->is('get')){//edit画面に移ろうとしたとき
            $this->request->data = $this->Paper->read();
        }else{//編集が終わって保存したいとき
            if($this->Paper->save($this->request->data)){//保存がうまく行ったとき
                $this->Session->setFlash('success');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('failed');
            }
        }
    }

}
