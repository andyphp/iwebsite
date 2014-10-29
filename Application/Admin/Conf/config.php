<?php
return array(
	
	//取消伪静态
	'URL_HTML_SUFFIX' => '',

	//配置style地址
	'TMPL_PARSE_STRING' => array(
		'__CSS__' => __ROOT__ . '/Application/' .MODULE_NAME. '/Public/css',
		'__JS__' => __ROOT__ . '/Application/' .MODULE_NAME. '/Public/js',
		'__IMG__' => __ROOT__ . '/Application/' .MODULE_NAME. '/Public/images',
		'__CDNCSS__' => __ROOT__.'/CDN/css',
		'__CDNJS__' => __ROOT__.'/CDN/js',
		'__CDNIMG__' => __ROOT__.'/CDN/images',
	),
);