<?php
namespace Admin\Controller;
use Think\Controller;

/**
 *后台登录控制器 
 */
 class LoginController extends Controller {

 	// 登录界面
 	public function index() {
 		$this->display();
 	}

 	// 登录验证
 	public function login($username = null,$password = null,$verify = null) {
 		if (IS_POST) {
 			if (check_verify($verify)) {
 				$User = M('user');
 				$user = $db->where(array('username' => I('post.username')))->find();
 				if (!$user || $user['password'] != I('post.password','','md5')) {
					$this->error('帐号或密码错误！');
				}else{
					session('uid',$user['id']);
					$this->redirect('Index/index');
				}
 			}else{
 				$this->error('验证码错误');
 			}
 		}else{
 			$this->error('非法操作');
 		}
 	}

 	//验证码
 	public function verify() {
 		$verify = new \Think\Verify();
        		$verify->entry(1);     //验证码ID:1
 	}
 }

?>