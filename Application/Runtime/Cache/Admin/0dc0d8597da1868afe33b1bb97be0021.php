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
<title>申请管理</title>
<style>
	tr, th, td{
		font-size: 15px;
	}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 申请管理 <span class="c-gray en">&gt;</span> 申请表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="11">申请表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" value="" name=""></th>
				<th width="40">ID</th>
				<th width="90">姓名</th>
				<th width="100">手机号</th>
				<th width="600">申请说明</th>
				<th width="100">状态</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($join_list)): foreach($join_list as $key=>$join): ?><tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td><?php echo ($join["join_id"]); ?></td>
				<td><?php echo ($join["user_name"]); ?></td>
				<td><?php echo ($join["user_phone"]); ?></td>
				<td><?php echo ($join["join_content"]); ?></td>
				<?php switch($join["join_ispass"]): case "待审核": ?><td style="color: blue;font-weight: bold"><?php echo ($join["join_ispass"]); ?></td><?php break;?>
					<?php case "通过": ?><td style="color: green;font-weight: bold"><?php echo ($join["join_ispass"]); ?></td><?php break;?>
					<?php case "未通过": ?><td style="color: red;font-weight: bold"><?php echo ($join["join_ispass"]); ?></td><?php break;?>
					<?php default: ?><td><?php echo ($join["join_ispass"]); ?></td><?php endswitch;?>


				<td class="f-14">
					<a title="审核" href="javascript:;" onclick="join_ispass('审核','<?php echo U("Join/joinEdit");?>?id=<?php echo ($join[join_id]); ?>')" style="text-decoration:none">
					<i class="Hui-iconfont">&#xe692;</i></a>
					<a title="删除" href="javascript:;" onclick="join_del(this,'<?php echo ($join[join_id]); ?>')" class="ml-5" style="text-decoration:none">
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

/*审核*/
function join_ispass(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*删除*/
function join_del(obj,id){
	var url = "<?php echo U('Join/delete');?>";
	layer.confirm('申请信息删除须谨慎，确认要删除吗？',function(index){
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