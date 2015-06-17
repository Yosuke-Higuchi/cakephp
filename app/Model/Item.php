<?php
/**
 * 商品情報
 */
class Item extends AppModel {

  public $validate = array(
    'name' => array(
      array('rule' => 'notEmpty', 'message' => '名前を入力してください'),
      array('rule' => array('maxLength', 8), 'message' => '8文字以下にしてください'),
    ),
    'price' => array(
      array('rule' => 'notEmpty', 'message' => '価格を入力してください'),
      array('rule' => 'numeric', 'message' => '数値を入力してください'),
    ),
  );

  /**
   * 商品情報をすべて修得する。
   *
   * @return array 商品情報
   */
  public function getAll() {
    return $this->find('all');
  }

  /**
   * 商品情報を追加する。
   *
   * @param string $name 商品名
   * @param int $price 価格
   * @return array/boolean 成功時は追加した商品情報。失敗時はfalse。
   */
  public function add($name, $price) {
    return $this->save(array('name' => $name, 'price' => $price));
  }

}