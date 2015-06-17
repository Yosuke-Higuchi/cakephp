<?php
App::uses('AppHelper', 'View/Helper');

/**
 * 価格の表示周りの共通処理
 */
class PriceHelper extends AppHelper {

  /**
   * 価格を整形する。
   *
   * @param int $price 価格
   * @return string 整形した価格の文字列
   */
  public function format($price) {
    return number_format($price) . '円';
  }

}