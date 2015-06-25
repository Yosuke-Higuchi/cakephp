<?php
class Zemilog extends AppModel {
	public $validate = array (
			'title' => array (
					'rule' => 'notEmpty' 
			),
			'host' => array (
					'rule' => 'notEmpty'
			),
			'log' => array (
					'rule' => 'notEmpty'
			),
			'body' => array (
					'rule' => 'notEmpty' 
			) 
	);
}