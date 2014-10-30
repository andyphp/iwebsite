<?php
return array(

	'DEFAULT_MODULE' => 'Home',	//默认模块
	'URL_MODEL' => '2',		//URL模式
	'SESSION_AUTO_START' => true, 	//是否开启SESSION

	// 允许访问的模块
	'MODULE_ALLOW_LIST' => array('Home','Admin'),
	'DEFAULT_MODILE' => 'Home',

	/* 系统数据加密设置 */
   	'DATA_AUTH_KEY' => 'IO_pu8d5qzc1[rE`.wkPYN~@/(&6|XTW>2$t^#0<', //默认数据加密KEY

   	// 数据库配置
	'DB_TYPE' => 'mysql',   // 数据库类型
	'DB_HOST' => 'localhost', // 服务器地址
	'DB_PORT' => '3306', // 端口
	'DB_NAME' => 'iwebsite', // 数据库名
	'DB_USER' => 'root',  // 用户名
	'DB_PWD' => '',  // 密码
	'DB_PREFIX' => 'iwebsite_',  // 数据库表前缀 

	// 系统信息
	'IWEBSITE_VERSION' => 'V 0.0.1', 
	'IWEBSITE_DEVOLOPER' => 'Mr.Liu',
	'IWEBSITE_EMPOWER' => 'Free open source',
	'IWEBSITE_COPY' => 'iwebsite',
);