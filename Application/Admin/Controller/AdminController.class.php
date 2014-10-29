<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 后台全局控制器
 */
class AdminController extends Controller {
	//后台初始化
	protected function _initialize() {
		define(UID, is_login());
		if (!UID) {
			$this->redirect('Login/index');
		}
	}
}

?>