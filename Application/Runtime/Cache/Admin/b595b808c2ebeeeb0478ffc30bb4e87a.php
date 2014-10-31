<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>&#105;&#119;&#101;&#98;&#115;&#105;&#116;&#101;&#45;&#21518;&#21488;&#31649;&#29702;&#31995;&#32479;</title>
	<link rel="stylesheet" href="/iwebsite/CDN/css/bootstrap.min.css">
	<link rel="stylesheet" href="/iwebsite/Application/Admin/Public/css/theme.css">
	<link rel="stylesheet" href="/iwebsite/CDN/css/font-awesome.min.css">
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
				<li class="active"><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('/Content');?>">内容管理</a></li>
				<li><a href="<?php echo U('/Page');?>">单页管理</a></li>
				<li><a href="javascript:request('<?php echo U('Column/index');?>')">栏目管理</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo U('Info/index');?>" class="font-en"><i class="fa fa-user"></i>Administrator</a></li>
				<li><a href="<?php echo U('/Index/index');?>"><i class="fa fa-home"></i>网站首页</a></li>
				<li><a href="<?php echo U('Login/logout');?>"><i class="fa fa-sign-out"></i>退出</a></li>
			</ul>
		</div>
	</div>
</nav>

<div id="show-content">
	<section class="container-fulid">
		<div class="top text-center">
			<h2><span class="font-en">Hello</span>，欢迎来到<span class="font-en">iwebsite</span>后台管理系统</h2>
			<p>
				这是一个开源的免费项目，你可以自由二次开发，如果你想参与我的项目开发或者获取最新版本的项目源码，请访问 <a href="https://github.com/liuhongyi/iwebsite" class="text-primary">iwebsite项目源码</a>
			</p>
		</div>
	</section>
	<section class="container-fulid">
		<div class="col-sm-4">
			<div class="well-white">
				<h5><i class="fa fa-cogs"></i>系统信息</h5>
				<ul class="list-unstyled">
					<li>系统版本：<span class="font-en"><?php echo (C("iwebsite_version")); ?></span></li>
					<li>开发者：<?php echo (C("iwebsite_devoloper")); ?></li>
					<li>BUG反馈：531271788@qq.com</li>
					<li>授权信息：<?php echo (C("iwebsite_empower")); ?></li>
					<li>版权所有：<a href="http://www.iwebsite.cc" target="_blank" class="font-en font-14 text-primary"><?php echo (C("iwebsite_copy")); ?></a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="well-white">
				<h5><i class="fa fa-comments"></i>留言反馈</h5>
				<ul class="list-unstyled">
					<?php if(is_array($gbooklist)): foreach($gbooklist as $key=>$gbook): ?><li><a href="#"><?php echo ($gbook["title"]); ?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo (date('Y-m-d H:i',$gbook["date"])); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="well-white">
				<h5><i class="fa fa-shield"></i>登录信息</h5>
				<ul class="list-unstyled">
					<?php if(is_array($loglist)): foreach($loglist as $key=>$log): if($log["address"] == 0): ?><li>地址：本地登陆 &nbsp;&nbsp;&nbsp;&nbsp; IP：127.0.0.1 &nbsp;&nbsp;&nbsp;&nbsp; 日期：<?php echo (date('Y-m-d H:i:s',$log["date"])); ?></li>
						<?php else: ?>
						<li>地址：<?php echo ($log["address"]); ?> &nbsp;&nbsp;&nbsp;&nbsp; IP：<?php echo ($log["ip"]); ?> &nbsp;&nbsp;&nbsp;&nbsp; 日期：<?php echo (date('Y-m-d H:i:s',$log["date"])); ?></li><?php endif; endforeach; endif; ?>
				</ul>
			</div>
		</div>
	</section>
</div>


<script src="/iwebsite/CDN/js/jquery.min.js"></script>
<script src="/iwebsite/CDN/js/bootstrap.min.js"></script>
<script src="/iwebsite/CDN/js/bootstrap-tooltip.js"></script>
<script src="/iwebsite/Application/Admin/Public/js/theme.js"></script>
</body>
</html>