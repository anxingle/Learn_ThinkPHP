<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    $person =array(
        1=>array('name'=>'AnXingle','age'=>26),
        2=>array('name'=>'MyPan','age'=>27),
        3=>array('name'=>'Weiwei','age'=>29),
        4=>array('name'=>'Shuo','age'=>16),
        5=>array('name'=>'YongYong','age'=>13),
        6=>array('name'=>'yuan','age'=>2),
    ); 
    $this->assign('family',$person);
    $this->display('Index/abc');
	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function user1(){
        //echo "This is user1 function"."<br>";
        //echo C('nam');
        //echo "ID is: ".$_GET['id']."<hr>";
        //trace('nam',C('nam'));
        //$us = new Model('user');
        //$dat = $us->select();
        //dump($dat);
        $u = new userModel();
        $u->getinf();
        echo "<hr>"."If you see this ,it turns out you make it"."<hr>";
        $this->display();
    }
}