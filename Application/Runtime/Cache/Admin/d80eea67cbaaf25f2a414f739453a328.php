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

<section class="col-sm-2">
	<div class="nav-left">
		<ul class="list-unstyled">
			<li><a><i class="fa fa-align-right"></i></a></li>
			<li><a href="#">删除该栏目</a></li>
		</ul>
	</div>
</section>
<section class="col-sm-10">
	<div class="well-white">
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
				<a href="<?php echo U('index');?>" class="btn btn-default-outline">返回</a>
				<button type="submit" id="add-submit" class="btn btn-primary-outline">保存</button>
			</div>
		</form>
	</div>
</section>


<script src="/iwebsite/CDN/js/bootstrap.min.js"></script>
<script src="/iwebsite/CDN/js/bootstrap-tooltip.js"></script>
<script src="/iwebsite/CDN/js/jquery.dataTables.min.js"></script>
<script src="/iwebsite/Application/Admin/Public/js/theme.js"></script>
</body>
</html>