<?php
namespace Admin\Controller;

/**
 * 栏目控制器
 */
class ColumnController extends AdminController {

	// 栏目列表
	public function index() {
		$this -> display();
	}

	// 添加栏目
	public function addColumn() {
		$this -> show('2');
	}
}

?>