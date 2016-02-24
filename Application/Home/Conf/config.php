<?php
return array(
	'URL_MODEL'           => 2, // 如果你的环境不支持PATHINFO 请设置为3
	'DB_TYPE'             => 'mysql',
	'DB_HOST'             => 'localhost',
	'DB_NAME'             => 'ltp',
	'DB_USER'             => 'root',
	'DB_PWD'              => '',
	'DB_PORT'             => '3306',
	'DB_PREFIX'           => 'rbac_',
	'APP_AUTOLOAD_PATH'   => '@.TagLib',
	'SESSION_AUTO_START'  => true,
	// 'TMPL_ACTION_ERROR'   => 'Public:success', // 默认错误跳转对应的模板文件
	// 'TMPL_ACTION_SUCCESS' => 'Public:success', // 默认成功跳转对应的模板文件
	'USER_AUTH_ON'        => true,
	'USER_AUTH_TYPE'      => 1,        // 默认认证类型 1 登录认证 2 实时认证
	'USER_AUTH_KEY'       => 'authId',    // 用户认证SESSION标记
	'ADMIN_AUTH_KEY'      => 'admin',
	'USER_AUTH_MODEL'     => 'User',    // 默认验证数据表模型
	'AUTH_PWD_ENCODER'    => 'md5',    // 用户认证密码加密方式
	'USER_AUTH_GATEWAY'   => '/Home/Login',// 默认认证网关
	'NOT_AUTH_MODULE'     => '/Home/Index',    // 默认无需认证模块
	'REQUIRE_AUTH_MODULE' => '',        // 默认需要认证模块
	'NOT_AUTH_ACTION'     => '',        // 默认无需认证操作
	'REQUIRE_AUTH_ACTION' => '',        // 默认需要认证操作
	'GUEST_AUTH_ON'       => false,    // 是否开启游客授权访问
	'GUEST_AUTH_ID'       => 0,        // 游客的用户ID
	'DB_LIKE_FIELDS'      => 'title|remark',
	'RBAC_ROLE_TABLE'     => 'rbac_role',
	'RBAC_USER_TABLE'     => 'rbac_role_user',
	'RBAC_ACCESS_TABLE'   => 'rbac_access',
	'RBAC_NODE_TABLE'     => 'rbac_node',
	'TMPL_PARSE_STRING'=>array(
		'__STATICS__'=>__ROOT__.'/statics'
	),
	'URL_CASE_INSENSITIVE'  =>  false,   // 默认false 表示URL区分大小写 true则表示不区分大小写
	'LOG_RECORD'            =>  true,  // 进行日志记录
    'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志
    'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,DEBUG,SQL',  // 允许记录的日志级别
);