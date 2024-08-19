<?

return [
	'default' => 'mysql',
	'connections' => [
		'mysql' => [
			// 数据库类型
			'type' => 'mysql',
			// 服务器地址
			'hostname' => env('HOSTNAME', '127.0.0.1'),
			// 数据库名
			'database' => env('DATABASE', 'text'),
			// 数据库用户名
			'username' => env('USERNAME', 'text'),
			// 数据库密码
			'password' => env('PASSWORD', 'text'),
			// 数据库连接端口
			'hostport' => env('HOSTPORT', 'text'),
			// 数据库连接参数
			'params' => [],
			// 数据库编码默认采用utf8
			'charset' => 'utf8mb4',
			// 数据库表前缀
			'prefix' => 'xx_',
		],
	],
];
