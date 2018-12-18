<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
<title>用户管理</title>
<style>
	tr, th, td{
		font-size: 15px;
	}
</style>
</head>
<body>
<nav class="breadcrumb">
	<i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span> 用户管理
	<span class="c-gray en">&gt;</span> 用户信息
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
		<i class="Hui-iconfont">&#xe68f;</i>
	</a>
</nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray">
		<span class="l">
			<a class="btn btn-primary radius" href="javascript:;" onclick="user_add('添加用户','<?php echo U("User/userAdd");?>')">
				<i class="Hui-iconfont">&#xe600;</i> 添加用户</a>
		</span>
	</div>
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="11">用户信息</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" value="" name=""></th>
				<th width="40">ID</th>
				<th width="90">姓名</th>
				<th width="200">身份证号</th>
				<th width="50">性别</th>
				<th width="90">民族</th>
				<th width="200">职业</th>
				<th width="200">出身日期</th>
				<th>婚否</th>
				<th width="300">手机号</th>
				<th width="120">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($user_list)): foreach($user_list as $key=>$user): ?><tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td><?php echo ($user["user_id"]); ?></td>
				<td><?php echo ($user["user_name"]); ?></td>
				<td><?php echo ($user["user_idcard"]); ?></td>
				<td><?php echo ($user["user_gender"]); ?></td>
				<td><?php echo ($user["user_nationality"]); ?></td>
				<td><?php echo ($user["user_profession"]); ?></td>
				<td><?php echo ($user["user_birth"]); ?></td>
				<td><a href="#"><?php echo ($user["user_ismarried"]); ?></a></td>
				<td><?php echo ($user["user_phone"]); ?></td>
				<td class="f-14">
				<?php if($user["user_pwd"] != '123'): ?><a title="保单" href="javascript:;" onclick="user_edit('保单','<?php echo U("User/userPolicy");?>?id=<?php echo ($user[user_id]); ?>')" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe627;</i>
					</a><?php endif; ?>
					<a title="编辑" href="javascript:;" onclick="user_policy('编辑','<?php echo U("User/userEdit");?>?id=<?php echo ($user[user_id]); ?>')" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6df;</i>
					</a>
					<a title="删除" href="javascript:;" onclick="user_del(this,'<?php echo ($user[user_id]); ?>')" class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
					</td>
			</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>
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
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,9]}// 制定列不参与排序
	]
});
/*添加*/
function user_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*保单*/
function user_policy(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*编辑*/
function user_edit(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*删除*/
function user_del(obj,id){
	var url = "<?php echo U('User/delete');?>";
	layer.confirm('删除用户须谨慎，确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: url,
			data:{
				id: id
			},
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}
</script>
</body>
</html>