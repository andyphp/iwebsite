<?php
namespace Admin\Controller;

/**
 * 栏目控制器
 */
class ColumnController extends AdminController {

	// 栏目列表
	public function index() {
		$column = M('column');
		$list = $column -> order(array('sort','id ASC')) -> select(); 
		$this -> assign('list',$list);
		$this -> display();
	}

	// 添加栏目
	public function addColumn() {
		$column = M('column');
		$data['name'] = I('post.name');
		$data['list_type'] = I('post.list_type');
		$data['content_type'] = I('post.content_type');
		$data['sort'] = I('post.sort');
		$data['state'] = I('post.state');
		$column -> add($data);
		if ($column) {
			$this -> success('添加成功',U('/Column/index'));
		}else {
			$this -> error('添加失败',U('/Column/index'));
		}
	}
}

?>