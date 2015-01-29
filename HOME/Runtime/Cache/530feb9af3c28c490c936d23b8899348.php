<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
这个还是Index模板的index方法，哈哈
<?php
 echo $siler; ?>
<br>
<?php
 echo $mypan; ?>
<br>
<?php
 echo $today."<hr>"; ?>
<?php echo (md5($love['1'])); ?>
<hr>
<?php echo (date('Y-m-d H:i:s',$falllove)); ?>
<hr><hr>
<?php echo (THINK_VERSION); ?>
<hr><hr>
<?php if(is_array($beg2)): $i = 0; $__LIST__ = $beg2;if( count($__LIST__)==0 ) : echo "我没有数据" ;else: foreach($__LIST__ as $key=>$FF): $mod = ($i % 2 );++$i; echo ($FF['x']); ?>------<?php echo ($FF['y']); ?> <br><?php endforeach; endif; else: echo "我没有数据" ;endif; ?>
//<?php $__FOR_START_1640__=1;$__FOR_END_1640__=5;for($kk=$__FOR_START_1640__;$kk <= $__FOR_END_1640__;$kk+=1){ ?>//<hr><?php echo ($kk); ?>
//<?php } ?>
<?php if($num2 > 10): ?>大于10
<?php elseif($num2 < 10): ?>小于10
<?php else: ?>等于10<?php endif; ?>
<?php
echo "  **".$num2; ?>
<?php switch($num2): case "20": ?>是20<?php break;?>
	<?php case "24": ?>滚蛋<?php break;?>
	<?php case "23": ?>草泥马<?php break;?>
	<?php case "22": ?>策马奔腾<?php break;?>
	<?php case "21": ?>爱你一万年<?php break;?>
	<?php default: ?>SBSBSSB<?php endswitch;?>
</body>
</html>