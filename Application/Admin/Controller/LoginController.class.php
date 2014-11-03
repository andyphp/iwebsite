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
 				$sql = M('user');
 				$user = $sql -> where(array('username' => I('post.username'))) -> find();
 				if (!$user || $user['userpassword'] != I('post.password','','md5')) {
					$this -> error('帐号或密码错误！');
				}else{
					// 存储session数据
					session('uid',$user['id']);
					// 存储IP信息
					$ip = get_client_ip(); 
					$ipx = $this -> getCity($ip);

					if (!$ipx) {
						$ipx = 0;
					}

					$log = M('log');
					$data['address'] = $ipx;
					$data['date'] = time();
					$data['ip'] = $ip;
					$log -> add($data);

					$this -> redirect('Index/index');
				}
 			}else{
 				$this -> error('验证码错误',U('index'));
 			}
 		}else{
 			$this -> error('非法操作');
 		}
 	}

 	// 获取IP
	public function getCity($ip) {
	$url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
	$ip = json_decode(file_get_contents($url));
	if((string)$ip -> code == '1') {
		return false;
	}
	$data = (array)$ip -> data;
		return $data['region'].$data['city'];
	}

 	//验证码
 	public function verify() {
 		$verify = new \Think\Verify();
		$verify -> entry(1);     //验证码ID:1
 	}

 	// 安全退出
 	public function logout() {
 		session('[destroy]'); 
 		$this->success('安全退出！', U('index'));
 	}
 }

?>