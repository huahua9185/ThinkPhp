<?php
return array(
	'URL_MODEL'           => 2, // 如果你的环境不支持PATHINFO 请设置为3
	'DB_TYPE'             => 'mysql',
	'DB_HOST'             => 'localhost',
	'DB_NAME'             => 'think',
	'DB_USER'             => 'root',
	'DB_PWD'              => '',
	'DB_PORT'             => '3306',
	'DB_PREFIX'           => 'think_',
	'APP_AUTOLOAD_PATH'   => '@.TagLib',
	'SESSION_AUTO_START'  => true,
	// 'TMPL_ACTION_ERROR'   => 'Public:success', // 默认错误跳转对应的模板文件
	// 'TMPL_ACTION_SUCCESS' => 'Public:success', // 默认成功跳转对应的模板文件
	'URL_CASE_INSENSITIVE'  =>  false,   // 默认false 表示URL区分大小写 true则表示不区分大小写
	'LOG_RECORD'            =>  true,  // 进行日志记录
    'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志
    'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,DEBUG,SQL',  // 允许记录的日志级别
	'AUTH_CONFIG'         =>array(
							'AUTH_ON' => true, //认证开关
							'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
							'AUTH_GROUP' => 'think_auth_group', //用户组数据表名
							'AUTH_GROUP_ACCESS' => 'think_auth_group_access', //用户组明细表
							'AUTH_RULE' => 'think_auth_rule', //权限规则表
							'AUTH_USER' => 'think_members'//用户信息表
				),
);