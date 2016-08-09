<?php
return array(
	//'配置项'=>'配置值'
	//PDO连接方式
	'DB_TYPE'   => 'pdo', // 数据库类型
	'DB_DSN'    => 'mysql:host=localhost;dbname=meizu;charset=utf8',
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PREFIX' => 'meizu_', // 数据库表前缀 
	 'URL_HTML_SUFFIX'       =>  'shtml',  // URL伪静态后缀设置

	// 关闭字段缓存
	'DB_FIELDS_CACHE'=>false,
	'SHOW_PAGE_TRACE'=>true,
);





