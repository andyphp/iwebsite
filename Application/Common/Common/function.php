<?php

//格式化打印
function p($arr){
	echo '<pre>' . print_r($arr,true) . '<pre>';
}

//检测缓存文件是否存在
function F_conf($name = null){   //$name缓存文件名
	$cache_conf = F($name,'',CONF_PATH);
	if ($cache_conf) {
		return $cache_conf;
	}else{
		return 0;
	}
}

?>