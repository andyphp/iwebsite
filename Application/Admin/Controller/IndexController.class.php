<?php
namespace Admin\Controller;

/**
 *后台首页控制器 
 */
class IndexController extends AdminController {

	// 后台首页
	public function index() {
		$ip = get_client_ip(); 
					if ($ip == '127.0.01') {
						$tip = 'localhost'; 
					}else {
						$tip = $this -> getCity($ip);
					}

		echo $tip;
		$this -> indexactive = 'active';
		$this -> display();
	}

	
	// 获取IP
	public function getCity($ip) {
	$url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
	$ip = json_decode(file_get_contents($url));
	if((string)$ip -> code == '1') {
		return '数据异常';
	}
	$data = (array)$ip -> data;
		return $data['region'].$data['city'];
	}

}