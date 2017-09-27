<?php
return array(
	//'配置项'=>'配置值'
// 	'MODULE_DENY_LIST'=>array('common','Runtine','Admin')
 // 'URL_PATHINFO_DEPR'=>'_',
 //mysql全局定义
    'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'shop',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_PORT'=>3306,
	'DB_PREFIX' =>'sw_',    // 数据库表前缀
	'DB_FIELDTYPE_CHECK' =>false,       // 是否进行字段类型检查
	'DB_FIELDS_CACHE'=>true,        // 启用字段缓存
	'DB_CHARSET'  =>'utf8',
 	'TMPL_ENGINE_TYPE'=>'Smarty'	,
//PDO专用定义
// 		'DB_TYPE'=>'pdo',
// 		'DB_USER'=>'root',
// 		'DB_PWD'=>'',
// 		'DB_PREFIX'=>'think_',
// 		'DB_DSN'=>'mysql:host=localhost;dbname=thinkphp;charset=UTF8',
//页面trace
//      'SHOW_PAGE_TRACE'=>true,
       'MODULE_ALLOW_LIST'=>array('Home','Admin'),
       'DEFAULT_MODULE'=>'Home',
		//启用路由
		'URL_ROUTER_ON'=>true,
		'URL_ROUTE_RULES'=>array(
// // 	    'u/:id\d|md5'=>'User/index',
//          '/^u\/(\d{2})$/'=>function ($id){
//          	echo $id;
//          },
           
			'LANG_SWITCH_ON'=>true,
			'LANG_AUTO_DETECT'=>true,
			'LANG_LIST'	=>'zh-cn,en-us',
			'VAR_LANGUAHE'=>'lang',
	    
),
		

		
		
		
		
		
		
);