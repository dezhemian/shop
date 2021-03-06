<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
//定义前台常量
define("SITE_URL", "http://localhost/shopdemo/");
define("CSS_URL",SITE_URL."Shop/Public/Home/css/");
define("IMG_URL", SITE_URL."Shop/Public/Home/image/");
define("JS_URL", SITE_URL."Shop/Public/Home/js/");
//定义后台常量
define("ADMIN_CSS_URL",SITE_URL."Shop/Public/Admin/css/");
define("ADMIN_IMG_URL", SITE_URL."Shop/Public/Admin/img/");
define("ADMIN_JS_URL", SITE_URL."Shop/Public/Admin/js/");

define("IMG_UPLOAD", SITE_URL."Shop/Public/");
// 定义应用目录
define('APP_PATH','./Shop/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单