<?php
App::uses('AppController', 'Controller');

/**
 * 商品の一覧表示と商品の追加を行う。
 */
class SampleController extends AppController {

  public $uses = array('Item');
  public $components = array('Price');
  public $helpers = array('Price');

  /**
   * 商品の一覧表示
   */
  public function index() {
    $items = $this->Item->getAll();

    $sum = $this->Price->getSum($items);
    $avg = $this->Price->getAverage($items);

    $this->set('items', $items);
    $this->set('sum', $sum);
    $this->set('avg', $avg);
  }

  /**
   * 商品の追加
   */
  public function add() {
    $name = $this->params['data']['name'];
    $price = $this->params['data']['price'];

    $result = $this->Item->add($name, $price);
    if ($result) {
      $this->redirect('/sample/');
    } else {
      $this->autoRender = false;
      print_r($this->Item->validationErrors);
    }
  }

}