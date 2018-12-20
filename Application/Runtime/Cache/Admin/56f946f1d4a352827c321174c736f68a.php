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
	<form action="<?php echo U('Insurance/update');?>" method="post" class="form form-horizontal" enctype="multipart/form-data" id="form-article-add">
		<input type="hidden" class="input-text" value="<?php echo ($insurance['insurance_id']); ?>" placeholder="" id="" name="insurance_id">
		<input type="hidden" class="input-text" value="<?php echo ($insurance['insurance_image']); ?>" placeholder="" id="" name="insurance_image">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>险种名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($insurance['insurance_title']); ?>" placeholder="" id="" name="insurance_title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>险种类别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<select style="font-size:17px" class="select" name="insurance_categories" id="">
					<option>--请选择--</option>
					<option value="人身保险">人身保险</option>
					<option value="责任保险">责任保险</option>
					<option value="人寿保险">人寿保险</option>
					<option value="工程保险">工程保险</option>
					<option value="信用保险">信用保险</option>
					<option value="财产保险">财产保险</option>
        </select>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>客户类别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<select style="font-size:17px" class="select" name="insurance_customer" id="">
					<option>--请选择--</option>
						<option value="个人客户">个人客户</option>
						<option value="企业客户">企业客户</option>
				</select>
			</div>
		</div>

		<?php if($insurance["insurance_image"] != null): ?><div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">原图片：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<img style="max-width:25%;" src="/dashou<?php echo ($insurance['insurance_image']); ?>" />
				</div>
			</div><?php endif; ?>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片上传：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-list-container">
					<div class="queueList">
						<div id="dndArea" class="placeholder">
							<input type="file" name="f" />
						</div>
					</div>
				</div>
			</div>
		</div>


      <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">险种介绍：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<link href="/dashou/Public/Admin/lib/umeditor/themes/default/css/umeditor.min.css" rel="stylesheet" />
				<script src="/dashou/Public/Admin/lib/umeditor/third-party/jquery.min.js"></script>
				<script src="/dashou/Public/Admin/lib/umeditor/umeditor.config.js"></script>
				<script src="/dashou/Public/Admin/lib/umeditor/umeditor.min.js"></script>
				<script src="/dashou/Public/Admin/lib/umeditor/lang/zh-cn/zh-cn.js"></script>
				<script>
					$(function(){
						UM.getEditor('myEditor');
					});
				</script>
				<!-- style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="myEditor" style="width:100%;height:380px;" name="insurance_content">
					<?php echo (stripslashes(htmlspecialchars_decode($insurance['insurance_content']))); ?>
				</script>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<!-- <button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button> -->
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
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

</script>
</body>
</html>