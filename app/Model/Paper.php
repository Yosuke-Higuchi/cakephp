<?php

class Paper extends AppModel{
    public $validate = array(
        'readername'=>array(
            'rule' => 'notEmpty'
        ),
        'title'=>array(
            'rule' => 'notEmpty'
        ),
        'content'=>array(
            'rule' => 'notEmpty'
        )
    );
}
