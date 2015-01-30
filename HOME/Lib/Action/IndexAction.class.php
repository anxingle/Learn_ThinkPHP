<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function user1(){
        $d = array(
            0 => array(
                'id'=>'4',
                'name'=>'张景开1',
                'score'=>'4',
            ),
            1 => array(
                'id'=>'5',
                'name'=> '王佳琪',
                'score'=>'4',
            ),
            2 => array(
                'id'=>'6',
                'name'=>'王老五',
                'score'=>'4',
            ),
        );
        $siler = new Model('scoreuser');
        $condition['name']=array('NEQ','');
        $condition['_string']='score > 0';
        //$sql = " name == null";
        $da0 = $siler->where($condition)->select();
        dump($da0);
        echo "<hr>";
        $da = $siler->where($condition)->count();
        echo "<hr>";
        $da2=$siler->where($condition)->max('id');
        dump($da);
        echo "<hr>";
        dump($da2);
        echo "<hr>";
        $da3=$siler->where($condition)->sum('id');
        dump($da3);
        $da4=$siler->where($condition)->avg('id');
        echo "<hr>";
        dump($da4);
        echo "<hr>"."If you see this ,it turns out you make it"."<hr>";
        $this->display();
    }
}