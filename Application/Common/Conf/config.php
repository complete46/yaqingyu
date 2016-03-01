<?php
return array(
	'DB_TYPE'=>'pdo',
	'DB_USER'=>'sql5108811',
	'DB_PWD'=>'9Satlkq3Su',
	'DB_PREFIX'=>'brilliance_',
	'DB_DSN'=>'mysql:host=sql5.freemysqlhosting.net;dbname=sql5108811;charset=UTF8',
        'DB_PORT'=>3306,
	'SHOW_PAGE_TRACE'=>true,
				
	//页面Trace
	'SHOW_PAGE_TRACE' =>true,
		
	//修改视图目录
	'DEFAULT_V_LAYER' =>'View',
	//修改模版文件的后缀
	//'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
	
	//修改模版目录
	//'VIEW_PATH'=>'./Public/',
	
	//设置默认主题
	'MODULE_ALLOW_LIST' => array('Home'),
	'DEFAULT_THEME'=>'default',
		
	
	//'LAYOUT_ON'=>true,
	//'LAYOUT_NAME'=>'Public/layout',
	
	//'TAGLIB_BUILD_IN' =>'cx,html',
	//'TAGLIB_PRE_LOAD'=>'html',
	//设置了内置标签，就不需要标签预加载了
	
	//设置可访问模块
	'DEFAULT_MODULE'=>'Home',// 默认模块，可以省去模块名输入
		
	//启用路由功能
	//'URL_ROUTER_ON'=>true,
	//配置路由规则
	//'URL_ROUTE_RULES'=>array(
		//'u'=>'User/index',
		//'u/:id'=>'User/index',
		//'u/:type/:attr/:list'=>'User/index',
		//':u/:id'=>'User/index',
		//'u/:id\d'=>'User/index',
		//'u/:id\d|md5'=>'User/index',
		//'u/[:id\d]'=>'User/index',
		//'u/:id\d$'=>'User/index',
		//'/^u_(\d{2})$/'=>'User/index?id=:1',
		//'/^u_(\d{2})$/'=>'User/index?id=:1|md5',
		//'u/:id'=>function ($id) {
		//	echo $id;
		//},
		//'/^u_(\d{2})$/'=>function ($id) {
		//	echo $id;
		//},
		//'m/:id\d'=>'Member/add',
		//'/^m_(\d+)$/'=>'Member/add?id=:1',
	//),

	//配置静态路由
	'URL_MAP_RULES'=>array(
		//'u_i'=>'User/index',
	),
		
	//URL可以不区分大小写
	'URL_CASE_INSENSITIVE' =>true,
	
	//设置伪静态后缀，默认为html
	//'URL_HTML_SUFFIX'=>'shtml',
	//'URL_HTML_SUFFIX'=>'',
	'URL_HTML_SUFFIX'=>'html|shtml|xml',
		
	//禁止访问的后缀
	'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg',
		
	
	//'URL_MODEL'=>0,		//普通模式
	//'URL_MODEL'=>1,
	//'URL_MODEL'=>2,		

	//允许二级控制器
	//'CONTROLLER_LEVEL'=>2,
	
	//启用Action参数绑定，默认为true，可以不写
	//'URL_PARAMS_BIND'=>true,

	//定义按顺序传参绑定
	//'URL_PARAMS_BIND_TYPE'=>1,
	
	//自定义成功和错误提示模版页面
	'TMPL_ACTION_SUCCESS'=>'Public/success',
	'TMPL_ACTION_ERROR'=>'Public/error',
		
	'DEFAULT_FILTER'=>'htmlspecialchars',
	'TMPL_PARSE_STRING' =>array(
		'__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
	)
	//设置操作绑定到类
	//'ACTION_BIND_CLASS'=>True,
		
);
