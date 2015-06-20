<?php
App::uses('Component', 'Controller');

/**
 * 価格関連の共通処理
 */
class PriceComponent extends Component {

  /**
   * 商品の合計価格を取得する。
   *
   * @param array $items 商品情報
   * @return int 商品の合計価格
   */
  public function getSum($items) {
    $sum = 0;
    foreach ($items as $item) {
      $sum += $item['Item']['price'];
    }
    return $sum;
  }

  /**
   * 商品の平均価格を取得する。
   *
   * @param array $items 商品情報
   * @return int 商品の平均価格
   */
  public function getAverage($items) {
    $sum = $count = 0;
    foreach ($items as $item) {
      $sum += $item['Item']['price'];
      $count++;
    }
    if ($count) {
      return $sum / $count;
    } else {
      return false;
    }
  }

}