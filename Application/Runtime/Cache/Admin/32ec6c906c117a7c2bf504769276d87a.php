<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>&#105;&#119;&#101;&#98;&#115;&#105;&#116;&#101;&#45;&#21518;&#21488;&#31649;&#29702;&#31995;&#32479;</title>
	<link rel="stylesheet" href="/iwebsite/CDN/css/bootstrap.min.css">
	<link rel="stylesheet" href="/iwebsite/Application/Admin/Public/css/login.min.css">
	<link rel="stylesheet" href="/iwebsite/CDN/css/font-awesome.min.css">
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="login">
	<div class="login-wrapper">
		<div class="login-container">
			<a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#119;&#119;&#119;&#46;&#105;&#119;&#101;&#98;&#115;&#105;&#116;&#101;&#46;&#99;&#99;" class="text-primary"><i class="fa fa-cloud"></i>&#105;&#119;&#101;&#98;&#115;&#105;&#116;&#101;</a>
			<form action="<?php echo U('login');?>" method="post">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="text" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="text" class="form-control" name="verify" placeholder="verify">
				</div>
				<img onclick="this.src='<?php echo U('verify');?>?'+Math.random()" alt="点击切换" src="<?php echo U('verify');?>">
				<input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
				<div class="copy">&#67;&#111;&#112;&#121;&#114;&#105;&#103;&#104;&#116; &copy; &#50;&#48;&#49;&#52; <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#119;&#119;&#119;&#46;&#105;&#119;&#101;&#98;&#115;&#105;&#116;&#101;&#46;&#99;&#99;">&#105;&#119;&#101;&#98;&#115;&#105;&#116;&#101;</a></div>

			</form>
		</div>
	</div>
</div>
<!-- js -->
<script src="/iwebsite/CDN/js/jquery.min.js"></script>
<script charset="utf-8">
	$(function(){
		$('.login-container ').css({'opacity':'100'});

		$('#submit').click(function(){
			var user = $('input[name=user]').val();
			var password = $('input[name=password]').val();
			var verify = $('input[name=verify]').val();
			if (user == '') {alert('输入用户名');return false;}
			if (password == '') {alert('输入密码');return false;}
			if (verify == '') {alert('输入验证码');return false;}
		})
	})
</script>
</body>
</html>