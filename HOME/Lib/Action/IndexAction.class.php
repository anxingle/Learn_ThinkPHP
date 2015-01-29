<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    //show();
    $love = array(1,2,3,'love my ','lord','<br>');
    $friends = array(
        '1' =>array('x'=>'I love lord','y'=>'U are '),
        '2' =>array('x'=>'I love mySelf','y'=>'Life is beautiful'),
        '3' =>array('x'=>'Time is limited','y'=>'world is Good'),
    );
    for($i1=1;$i1<=4;$i1++){
        echo "i is:".$i1."<br>";
    }
    //dump($love);
    //echo C("URL_MODEL")."<br>";
    //echo U('Index/user1/',array('id'=>1),'shtml',false,'localhost')."<br>";
    //echo C('name')."<hr>";
    //echo "I love Jesus"."<br>";
    //echo "This is added by siler"."<br>";
    //echo C('love');
    $this->siler = '我爱盼盼';
    $day = date('Y-m-d');
    $this->falllove=time();
    $this->assign('mypan','刘盼')->assign('today',$day)->assign('love',$love)->assign('beg',$friends)->assign('num2',226);
    $this->display('Index/abc');
	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function user1(){
        echo "This is user1 function";
        echo "ID is: ".$_GET['id']."<hr>";
        echo "<hr>"."If you see this ,it turns out you make it"."<hr>";
    }
}