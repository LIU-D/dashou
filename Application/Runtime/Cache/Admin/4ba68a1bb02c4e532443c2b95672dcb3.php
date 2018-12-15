<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/dashou/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/dashou/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/dashou/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/dashou/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/dashou/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/dashou/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>审核 - 申请管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="<?php echo U('Join/update');?>" method="post" class="form form-horizontal" enctype="multipart/form-data" id="form-join-update">
		<input type="hidden" value="<?php echo ($join['join_id']); ?>" name="join_id" >
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">姓名：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($join['user_name']); ?>" placeholder="" id="adminName" name="user_name" disabled>
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">手机号：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($join['user_phone']); ?>" placeholder="" id="phone" name="user_phone" disabled>
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">申请说明：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<textarea style="height:300px" name="join_content" cols="" rows="" class="textarea" dragonfly="true" disabled><?php echo ($join['join_content']); ?></textarea>
		</div>
	</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<?php if($join["join_ispass"] == '待审核'): ?><input value="待审核" name="join_ispass" type="radio" id="join_ispass-1" checked>
					<?php else: ?>
					<input value="待审核" name="join_ispass" type="radio" id="join_ispass-1"><?php endif; ?>
					<label for="join_ispass-1">待审核</label>
				</div>
				<div class="radio-box">
					<?php if($join["join_ispass"] == '通过'): ?><input value="通过" name="join_ispass" type="radio" id="join_ispass-2" checked>
					<?php else: ?>
					<input value="通过" name="join_ispass" type="radio" id="join_ispass-2"><?php endif; ?>
					<label for="join_ispass-2">通过</label>
				</div>
				<div class="radio-box">
					<?php if($join["join_ispass"] == '未通过'): ?><input value="未通过" name="join_ispass" type="radio" id="join_ispass-3" checked>
					<?php else: ?>
					<input value="未通过" name="join_ispass" type="radio" id="join_ispass-3"><?php endif; ?>
					<label for="join_ispass-3">未通过</label>
				</div>
			</div>
		</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/dashou/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/dashou/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});


});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>