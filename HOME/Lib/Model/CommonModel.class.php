<?php
class CommonModel extends Model{
    public function strm($str){
        return md5($str);
    }
}