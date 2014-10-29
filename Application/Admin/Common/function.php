<?php

/**
 *后台公共函数库
 */

//检测用户是否登录
function is_login() {
	$user = session('uid');
	if (empty($user)) {
		return 0;
	}else{
		return $user;
	}
}

//检测验证码
function check_verify($code, $id = 1) {
	$verify = new \Think\Verify();
    	return $verify->check($code, $id);
}

?>