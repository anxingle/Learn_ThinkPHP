<?php
class scoreuserModel extends CommonModel{
    protected $_scope=array(
        'jige'=>array(
            'where'=>array(
                'score'=>array('egt',3),
            ),
            'order'=>'id desc',
        ),
        'abc'=>array(
            'field'=>'id,score',
            'limit'=>'3',
        ),
    );
}