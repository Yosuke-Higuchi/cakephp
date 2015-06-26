<?php

class Study extends AppModel{
    public $validate = array(
        'title'=>array(
            'rule' => 'notEmpty'
        ),
        'item'=>array(
            'rule' => 'notEmpty'
        ),
        'content'=>array(
            'rule' => 'notEmpty'
        )
    );
}
