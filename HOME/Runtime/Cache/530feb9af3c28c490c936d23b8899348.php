<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php if(is_array($family)): foreach($family as $key=>$vo): if(($vo["age"]) >= "18"): echo ($vo["name"]); ?>---你都成年了---<?php echo ($vo["age"]); ?><hr>
		<?php else: ?>
		<?php echo ($vo["name"]); ?>---你还小---<?php echo ($vo["age"]); ?><hr><?php endif; endforeach; endif; ?>
</body>
</html>