<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>&#105;&#119;&#101;&#98;&#115;&#105;&#116;&#101;&#45;&#21518;&#21488;&#31649;&#29702;&#31995;&#32479;</title>
	<link rel="stylesheet" href="/iwebsite/CDN/css/bootstrap.min.css">
	<link rel="stylesheet" href="/iwebsite/CDN/css/font-awesome.min.css">
	<link rel="stylesheet" href="/iwebsite/CDN/css/datatables.css">
	<link rel="stylesheet" href="/iwebsite/Application/Admin/Public/css/theme.css">
	<script src="/iwebsite/CDN/js/jquery.min.js"></script>
	<script src="/iwebsite/Application/Admin/Public/js/load.js"></script>
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<!-- 手机界面导航 -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand font-en" href="<?php echo U('Index/index');?>">iwebsite</a>
		</div>

		<!-- 栏目导航 -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="<?php echo ($index_active); ?>"><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('/Content');?>">内容管理</a></li>
				<li><a href="<?php echo U('/Page');?>">单页管理</a></li>
				<li class="<?php echo ($column_active); ?>"><a href="<?php echo U('Column/index');?>">栏目管理</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo U('Info/index');?>" class="font-en"><i class="fa fa-user"></i>Administrator</a></li>
				<li><a href="<?php echo U('/Index/index');?>"><i class="fa fa-home"></i>网站首页</a></li>
				<li><a href="<?php echo U('Login/logout');?>"><i class="fa fa-sign-out"></i>退出</a></li>
			</ul>
		</div>
	</div>
</nav>

<section class="container-fulid white main">
  	<h5><a data-toggle="modal" data-target="#myColumn" class="btn btn-primary-outline"><i class="fa fa-plus"></i>添加栏目</a></h5>
  	<table class="table table-bordered table-striped dataTable" id="tables" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>ID</th>
				<th>栏目名称</th>
				<th>状态</th>
				<th>排序</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$column): ?><tr>
				<td><?php echo ($column["id"]); ?></td>
				<td><a href="#" class="tip-top" title="<?php echo ($column["name"]); ?>"><?php echo ($column["name"]); ?></a></td>
				<td>
					<?php if($column["state"] == 1): ?>显示<?php else: ?><span class="red">隐藏</span><?php endif; ?>
				</td>
				<td><?php echo ($column["sort"]); ?></td>
				<td class="icon-edit">
					<a href="<?php echo U('Column/editColumn');?>" class="tip-top" title="修改"><i class="fa fa-pencil"></i></a>
					<a href="#" class="tip-top" title="删除"><i class="fa fa-trash"></i></a>
				</td>
			</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</section>

<!-- 添加栏目 -->
<div class="modal fade" id="myColumn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">添加栏目</h4>
			</div>
			<form class="form-horizontal" role="form" action="<?php echo U('addColumn');?>" method="post">
				<div class="modal-body">				
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">栏目名称</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="list_type" class="col-sm-2 control-label">列表页模版</label>
						<div class="col-sm-10">
							<select name="list_type" class="form-control">
								<option value="list.html">list.html</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="content_type" class="col-sm-2 control-label">内容页模版</label>
						<div class="col-sm-10">
							<select name="content_type" class="form-control">
								<option value="content.html">content.html</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="sort" class="col-sm-2 control-label">排序</label>
						<div class="col-sm-10">
							<input type="text" name="sort" value="10" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">状态</label>
						<div class="col-sm-10">
							<label class="radio-inline"><input name="state" type="radio" value="1" checked="checked"><span>显示</span></label>
							<label class="radio-inline"><input name="state" type="radio" value="0"><span>隐藏</span></label>
						</div>
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default-outline" data-dismiss="modal">关闭</button>
					<button type="submit" id="add-submit" class="btn btn-primary-outline">保存</button>
				</div>
			</form>
		</div>
	</div>
</div>


<script src="/iwebsite/CDN/js/bootstrap.min.js"></script>
<script src="/iwebsite/CDN/js/bootstrap-tooltip.js"></script>
<script src="/iwebsite/CDN/js/jquery.dataTables.min.js"></script>
<script src="/iwebsite/Application/Admin/Public/js/theme.js"></script>
</body>
</html>