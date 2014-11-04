<?php
namespace Admin\Controller;

/**
 * 栏目控制器
 */
class ColumnController extends AdminController {

	// 栏目列表
	public function index() {
		$this -> column_active = 'active';


		$column = M('column');
		$list = $column -> select(); 
		$this -> assign('list',$list);
		
		$file1 = glob('Application/Home/View/Tpl/*.html');  //匹配文件
		print_r($file1);

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
			$this -> success('添加成功');
		}else {
			$this -> error('添加失败');
		}
	}

	// 修改栏目
	public function editColumn() {
		$this -> column_active = 'active';
		$this -> display();
	}
}

?>