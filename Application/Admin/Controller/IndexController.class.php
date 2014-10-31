<?php
namespace Admin\Controller;

/**
 *后台首页控制器 
 */
class IndexController extends AdminController {

	// 后台首页
	public function index() {
		// 登录日志
		$log = M('log');
		$loglist = $log -> limit(10) -> select();
		$this -> assign('loglist',$loglist);

		// 留言反馈
		$gbook = M('gbook');
		$gbooklist = $gbook -> field('title,date') -> limit(10) -> select();
		$this -> assign('gbooklist',$gbooklist);

		$this -> display();
	}


}