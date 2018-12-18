<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
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
<!--/meta 作为公共模版分离出去-->

<link href="/dashou/Public/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="page-container">

		<table class="table table-border table-bordered table-hover table-bg">
		<?php if(is_array($policy_list)): foreach($policy_list as $key=>$policy): ?><thead>
				<tr>
					<th style="font-size: 18px;text-align:center;" scope="col" colspan="10">保单信息</th>
				</tr>
				<tr class="text-c">
					<th width="40">保单ID</th>
					<th width="90">险种名称</th>
					<th width="200">投保人</th>
					<th width="50">被保险人</th>
					<th width="90">受益人</th>
					<th width="200">投保金额</th>
					<th width="200">生效日期</th>
					<th>截止日期</th>
				</tr>
			</thead>
			<tbody>
					<tr class="text-c">
						<td><?php echo ($policy["policy_id"]); ?></td>
						<td><?php echo ($policy["insurance_title"]); ?></td>
						<td><?php echo ($policy["user_name"]); ?></td>
						<td><?php echo ($policy["policyto_name"]); ?></td>
						<td><?php echo ($policy["beneficiary_name"]); ?></td>
						<td> ￥ <?php echo ($policy["policy_money"]); ?></td>
						<td><?php echo ($policy["policy_begin"]); ?></td>
						<td><?php echo ($policy["policy_end"]); ?></td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col" colspan="11">被保险人信息</th>
				</tr>
				<tr class="text-c">
					<th width="90">姓名</th>
					<th width="200">身份证号</th>
					<th width="50">性别</th>
					<th width="90">民族</th>
					<th width="200">职业</th>
					<th width="200">出身日期</th>
					<th>婚否</th>
					<th width="300">手机号</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-c">
					<td><?php echo ($policy["policyto_name"]); ?></td>
					<td><?php echo ($policy["policyto_idcard"]); ?></td>
					<td><?php echo ($policy["policyto_gender"]); ?></td>
					<td><?php echo ($policy["policyto_nationality"]); ?></td>
					<td><?php echo ($policy["policyto_profession"]); ?></td>
					<td><?php echo ($policy["policyto_birth"]); ?></td>
					<td><?php echo ($policy["policyto_ismarried"]); ?></td>
					<td><?php echo ($policy["policyto_phone"]); ?></td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th scope="col" colspan="11">受益人信息</th>
				</tr>
				<tr class="text-c">
					<th width="90">姓名</th>
					<th width="200">身份证号</th>
					<th width="50">性别</th>
					<th width="90">民族</th>
					<th width="200">职业</th>
					<th width="200">出身日期</th>
					<th>婚否</th>
					<th width="300">手机号</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-c">
					<td><?php echo ($policy["beneficiary_name"]); ?></td>
					<td><?php echo ($policy["beneficiary_idcard"]); ?></td>
					<td><?php echo ($policy["beneficiary_gender"]); ?></td>
					<td><?php echo ($policy["beneficiary_nationality"]); ?></td>
					<td><?php echo ($policy["beneficiary_profession"]); ?></td>
					<td><?php echo ($policy["beneficiary_birth"]); ?></td>
					<td><?php echo ($policy["beneficiary_ismarried"]); ?></td>
					<td><?php echo ($policy["beneficiary_phone"]); ?></td>
				</tr>
			</tbody><?php endforeach; endif; ?>
		</table>
	</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/dashou/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本 -->
<script type="text/javascript" src="/dashou/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/dashou/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});




})
</script>
</body>
</html>