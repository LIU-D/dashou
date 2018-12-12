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
<script type="text/javascript" src="/dashou/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>资讯列表</title>
<style>
	tr, th, td{
		font-size: 15px;
	}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加资讯" data-href="<?php echo U('News/addNews');?>" onclick="news_add('添加资讯','<?php echo U("News/addNews");?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="65">ID</th>
					<th width="205">缩略图</th>
					<th width="780">标题</th>
					<th width="160">发布时间</th>
					<th width="100">作者</th>
					<th width="60">发布状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($news_list)): foreach($news_list as $key=>$news): ?><tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td><?php echo ($news["news_id"]); ?></td>
					<td class="text-l">
						<img width="210" class="picture-thumb" src="/dashou<?php echo ($news["news_image"]); ?>">
					</td>
					<td style="font-size: 18px"><?php echo ($news["news_title"]); ?></td>
					<td><?php echo ($news["news_addtime"]); ?></td>
					<td><?php echo ($news["news_author"]); ?></td>
					<td class="td-status">
						<?php if($news["news_isdel"] == '已发布' ): ?><span class="label label-success radius"><?php echo ($news["news_isdel"]); ?></span>
						<?php else: ?>
							<span class="label label-dafault radius"><?php echo ($news["news_isdel"]); ?></span><?php endif; ?>		
					</td>
					<td class="f-14 td-manage">
						<?php if($news["news_isdel"] == '已发布' ): ?><a style="text-decoration:none" onClick="news_stop(this,'<?php echo ($news[news_id]); ?>')" href="javascript:;" title="下架">
								<i class="Hui-iconfont">&#xe6de;</i>
							</a>
						<?php else: ?>
							<a style="text-decoration:none" onclick="news_start(this,'<?php echo ($news[news_id]); ?>')" href="javascript:;" title="发布">
								<i class="Hui-iconfont">&#xe603;</i>
							</a><?php endif; ?>
						<a style="text-decoration:none" class="ml-5" onClick="news_edit('资讯编辑','<?php echo U("News/editNews");?>','<?php echo ($news[news_id]); ?>')" href="javascript:;" title="编辑">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a> 
						<a style="text-decoration:none" class="ml-5" onClick="news_del(this,'<?php echo ($news[news_id]); ?>')" href="javascript:;" title="删除">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
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
	"pading":false,
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,7]}// 不参与排序的列
	]
});



Date.prototype.Format = function (fmt) {
    var o = {
        "M+": this.getMonth() + 1, //月份 
        "d+": this.getDate(), //日 
        "H+": this.getHours(), //小时 
        "m+": this.getMinutes(), //分 
        "s+": this.getSeconds(), //秒 
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
        "S": this.getMilliseconds() //毫秒 
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}



/*资讯-添加*/
function news_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function news_edit(title,url,id,w,h){
	$.ajax({
			type: 'POST',
			url: url,
			data:{
				id: id
			},
			dataType: 'json',
			success: function(data){
			},
			error:function(data) {
				console.log(data.msg);	
			},
		});	
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-删除*/
function news_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		var url = "<?php echo U('News/delNews');?>";
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

/*资讯-审核*/
function news_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'], 
		shade: false,
		closeBtn: 0
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="news_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="news_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*资讯-下架*/
function news_stop(obj,id){
	layer.confirm('确认要取消发布吗？',function(index){
		var url = "<?php echo U('News/stopNews');?>";
		var time = new Date().Format("yyyy-MM-dd HH:mm:ss");
		$.ajax({
			type: 'POST',
			url: url,
			dataType: 'json',
			data:{
				id: id,
				state: '未发布',
				time:time
			},
			success: function(data){
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="news_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">未发布</span>');
				$(obj).remove();
				layer.msg('取消发布!',{icon: 5,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
		// $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="news_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		// $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">未发布</span>');
		// $(obj).remove();
		// layer.msg('取消发布!',{icon: 5,time:1000});
		// var url = $(obj).attr('name');
		
	});
}

/*资讯-发布*/
function news_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		var url = "<?php echo U('News/stopNews');?>";
		var time = new Date().Format("yyyy-MM-dd HH:mm:ss");
		$.ajax({
			type: 'POST',
			url: url,
			dataType: 'json',
			data:{
				id: id,
				state: '已发布',
				time:time
			},
			success: function(data){
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="news_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
				$(obj).remove();

				layer.msg('已发布!',{icon: 6,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	




		// $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="news_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		// $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		// $(obj).remove();

		// layer.msg('已发布!',{icon: 6,time:1000});

	});
}
/*资讯-申请上线*/
function news_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

</script> 
</body>
</html>